/**
 @overview	##Info
 @version	1.3.0
 @license	Dual licensed under MIT license and GPL.
 @author		Jan Paepke - e-mail@janpaepke.de

 @todo: enhancement: remove dependencies and move to plugins -> 2.0
 @todo: bug: when cascading pins (pinning one element multiple times) and later removing them without reset, positioning errors occur.
 @todo: bug: having multiple scroll directions with cascaded pins doesn't work (one scroll vertical, one horizontal)
 @todo: feature: optimize performance on debug plugin (huge drawbacks, when using many scenes)
 */
(function(root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery', 'TweenMax', 'TimelineMax'], factory)
    } else {
        var sm = factory(root.jQuery, root.TweenMax, root.TimelineMax);
        root.ScrollMagic = sm.Controller;
        root.ScrollScene = sm.Scene
    }
}(this, function($, TweenMax, TimelineMax) {
    var ScrollMagic = function(options) {
        var
            NAMESPACE = "ScrollMagic",
            DEFAULT_OPTIONS = {
                container: window,
                vertical: !0,
                globalSceneOptions: {},
                loglevel: 2,
                refreshInterval: 100
            };
        var ScrollMagic = this,
            _options = $.extend({}, DEFAULT_OPTIONS, options),
            _sceneObjects = [],
            _updateScenesOnNextCycle = !1,
            _scrollPos = 0,
            _scrollDirection = "PAUSED",
            _isDocument = !0,
            _viewPortSize = 0,
            _enabled = !0,
            _updateCycle, _refreshInterval;
        var construct = function() {
            ScrollMagic.version = ScrollMagic.constructor.version;
            $.each(_options, function(key, value) {
                if (!DEFAULT_OPTIONS.hasOwnProperty(key)) {
                    log(2, "WARNING: Unknown option \"" + key + "\"");
                    delete _options[key]
                }
            });
            _options.container = $(_options.container).first();
            if (_options.container.length === 0) {
                log(1, "ERROR creating object " + NAMESPACE + ": No valid scroll container supplied");
                throw NAMESPACE + " init failed."
            }
            _isDocument = !$.contains(document, _options.container.get(0));
            if (!_isDocument) {
                _options.container.on('resize', function(e) {
                    e.stopPropagation()
                })
            }
            _viewPortSize = _options.vertical ? _options.container.height() : _options.container.width();
            _options.container.on("scroll resize", onChange);
            _options.refreshInterval = parseInt(_options.refreshInterval);
            if (_options.refreshInterval > 0) {
                _refreshInterval = window.setInterval(refresh, _options.refreshInterval)
            }
            _updateCycle = animationFrameCallback(updateScenes);
            log(3, "added new " + NAMESPACE + " controller (v" + ScrollMagic.version + ")")
        };
        var getScrollPos = function() {
            return _options.vertical ? _options.container.scrollTop() : _options.container.scrollLeft()
        };
        var setScrollPos = function(pos) {
            if (_options.vertical) {
                _options.container.scrollTop(pos)
            } else {
                _options.container.scrollLeft(pos)
            }
        };
        var updateScenes = function() {
            _updateCycle = animationFrameCallback(updateScenes);
            if (_enabled && _updateScenesOnNextCycle) {
                var
                    scenesToUpdate = $.isArray(_updateScenesOnNextCycle) ? _updateScenesOnNextCycle : _sceneObjects.slice(0),
                    oldScrollPos = _scrollPos;
                _scrollPos = ScrollMagic.scrollPos();
                var deltaScroll = _scrollPos - oldScrollPos;
                _scrollDirection = (deltaScroll === 0) ? "PAUSED" : (deltaScroll > 0) ? "FORWARD" : "REVERSE";
                if (deltaScroll < 0) {
                    scenesToUpdate.reverse()
                }
                $.each(scenesToUpdate, function(index, scene) {
                    log(3, "updating Scene " + (index + 1) + "/" + scenesToUpdate.length + " (" + _sceneObjects.length + " total)");
                    scene.update(!0)
                });
                if (scenesToUpdate.length === 0 && _options.loglevel >= 3) {
                    log(3, "updating 0 Scenes (nothing added to controller)")
                }
                _updateScenesOnNextCycle = !1
            }
        };
        var onChange = function(e) {
            if (e.type == "resize") {
                _viewPortSize = _options.vertical ? _options.container.height() : _options.container.width()
            }
            _updateScenesOnNextCycle = !0
        };
        var refresh = function() {
            if (!_isDocument) {
                if (_viewPortSize != (_options.vertical ? _options.container.height() : _options.container.width())) {
                    _options.container.trigger("resize")
                }
            }
            $.each(_sceneObjects, function(index, scene) {
                scene.refresh()
            })
        };
        var log = function(loglevel, output) {
            if (_options.loglevel >= loglevel) {
                var
                    prefix = "(" + NAMESPACE + ") ->",
                    args = Array.prototype.splice.call(arguments, 1);
                args.unshift(loglevel, prefix);
                debug.apply(window, args)
            }
        };
        var sortScenes = function(ScrollScenesArray) {
            if (ScrollScenesArray.length <= 1) {
                return ScrollScenesArray
            } else {
                var scenes = ScrollScenesArray.slice(0);
                scenes.sort(function(a, b) {
                    return a.scrollOffset() > b.scrollOffset() ? 1 : -1
                });
                return scenes
            }
        };
        this.addScene = function(newScene) {
            if ($.isArray(newScene)) {
                $.each(newScene, function(index, scene) {
                    ScrollMagic.addScene(scene)
                })
            } else if (newScene instanceof ScrollScene) {
                if (newScene.parent() != ScrollMagic) {
                    newScene.addTo(ScrollMagic)
                } else if ($.inArray(newScene, _sceneObjects) < 0) {
                    _sceneObjects.push(newScene);
                    _sceneObjects = sortScenes(_sceneObjects);
                    newScene.on("shift." + NAMESPACE + "_sort", function() {
                        _sceneObjects = sortScenes(_sceneObjects)
                    });
                    $.each(_options.globalSceneOptions, function(key, value) {
                        if (newScene[key]) {
                            newScene[key].call(newScene, value)
                        }
                    });
                    log(3, "added Scene (" + _sceneObjects.length + " total)")
                }
            } else {
                log(1, "ERROR: invalid argument supplied for '.addScene()'")
            }
            return ScrollMagic
        };
        this.removeScene = function(ScrollScene) {
            if ($.isArray(ScrollScene)) {
                $.each(ScrollScene, function(index, scene) {
                    ScrollMagic.removeScene(scene)
                })
            } else {
                var index = $.inArray(ScrollScene, _sceneObjects);
                if (index > -1) {
                    ScrollScene.off("shift." + NAMESPACE + "_sort");
                    _sceneObjects.splice(index, 1);
                    ScrollScene.remove();
                    log(3, "removed Scene (" + _sceneObjects.length + " total)")
                }
            }
            return ScrollMagic
        };
        this.updateScene = function(ScrollScene, immediately) {
            if ($.isArray(ScrollScene)) {
                $.each(ScrollScene, function(index, scene) {
                    ScrollMagic.updateScene(scene, immediately)
                })
            } else {
                if (immediately) {
                    ScrollScene.update(!0)
                } else {
                    if (!$.isArray(_updateScenesOnNextCycle)) {
                        _updateScenesOnNextCycle = []
                    }
                    if ($.inArray(ScrollScene, _updateScenesOnNextCycle) == -1) {
                        _updateScenesOnNextCycle.push(ScrollScene)
                    }
                    _updateScenesOnNextCycle = sortScenes(_updateScenesOnNextCycle)
                }
            }
            return ScrollMagic
        };
        this.update = function(immediately) {
            onChange({
                type: "resize"
            });
            if (immediately) {
                updateScenes()
            }
            return ScrollMagic
        };
        this.scrollTo = function(scrollTarget) {
            if (scrollTarget instanceof ScrollScene) {
                if (scrollTarget.parent() === ScrollMagic) {
                    ScrollMagic.scrollTo(scrollTarget.scrollOffset())
                } else {
                    log(2, "scrollTo(): The supplied scene does not belong to this controller. Scroll cancelled.", scrollTarget)
                }
            } else if ($.type(scrollTarget) === "string" || isDomElement(scrollTarget) || scrollTarget instanceof $) {
                var $elm = $(scrollTarget).first();
                if ($elm[0]) {
                    var
                        param = _options.vertical ? "top" : "left",
                        containerOffset = getOffset(_options.container),
                        elementOffset = getOffset($elm);
                    if (!_isDocument) {
                        containerOffset[param] -= ScrollMagic.scrollPos()
                    }
                    ScrollMagic.scrollTo(elementOffset[param] - containerOffset[param])
                } else {
                    log(2, "scrollTo(): The supplied element could not be found. Scroll cancelled.", scrollTarget)
                }
            } else if ($.isFunction(scrollTarget)) {
                setScrollPos = scrollTarget
            } else {
                setScrollPos.call(_options.container[0], scrollTarget)
            }
            return ScrollMagic
        };
        this.scrollPos = function(scrollPosMethod) {
            if (!arguments.length) {
                return getScrollPos.call(ScrollMagic)
            } else {
                if ($.isFunction(scrollPosMethod)) {
                    getScrollPos = scrollPosMethod
                } else {
                    log(2, "Provided value for method 'scrollPos' is not a function. To change the current scroll position use 'scrollTo()'.")
                }
            }
            return ScrollMagic
        };
        this.info = function(about) {
            var values = {
                size: _viewPortSize,
                vertical: _options.vertical,
                scrollPos: _scrollPos,
                scrollDirection: _scrollDirection,
                container: _options.container,
                isDocument: _isDocument
            };
            if (!arguments.length) {
                return values
            } else if (values[about] !== undefined) {
                return values[about]
            } else {
                log(1, "ERROR: option \"" + about + "\" is not available");
                return
            }
        };
        this.loglevel = function(newLoglevel) {
            if (!arguments.length) {
                return _options.loglevel
            } else if (_options.loglevel != newLoglevel) {
                _options.loglevel = newLoglevel
            }
            return ScrollMagic
        };
        this.enabled = function(newState) {
            if (!arguments.length) {
                return _enabled
            } else if (_enabled != newState) {
                _enabled = !!newState;
                ScrollMagic.updateScene(_sceneObjects, !0)
            }
            return ScrollMagic
        };
        this.destroy = function(resetScenes) {
            window.clearTimeout(_refreshInterval);
            var i = _sceneObjects.length;
            while (i--) {
                _sceneObjects[i].destroy(resetScenes)
            }
            _options.container.off("scroll resize", onChange);
            animationFrameCancelCallback(_updateCycle);
            log(3, "destroyed " + NAMESPACE + " (reset: " + (resetScenes ? "true" : "false") + ")");
            return null
        };
        construct();
        return ScrollMagic
    };
    ScrollMagic.version = "1.3.0";
    var ScrollScene = function(options) {
        var
            TRIGGER_HOOK_VALUES = {
                "onCenter": 0.5,
                "onEnter": 1,
                "onLeave": 0
            },
            NAMESPACE = "ScrollScene",
            DEFAULT_OPTIONS = {
                duration: 0,
                offset: 0,
                triggerElement: null,
                triggerHook: "onCenter",
                reverse: !0,
                tweenChanges: !1,
                loglevel: 2
            };
        var ScrollScene = this,
            _options = $.extend({}, DEFAULT_OPTIONS, options),
            _state = 'BEFORE',
            _progress = 0,
            _scrollOffset = {
                start: 0,
                end: 0
            },
            _triggerPos = 0,
            _enabled = !0,
            _durationUpdateMethod, _parent, _tween, _pin, _pinOptions, _cssClasses, _cssClassElm;
        var _validate = {
            "unknownOptionSupplied": function() {
                $.each(_options, function(key, value) {
                    if (!DEFAULT_OPTIONS.hasOwnProperty(key)) {
                        log(2, "WARNING: Unknown option \"" + key + "\"");
                        delete _options[key]
                    }
                })
            },
            "duration": function() {
                if ($.isFunction(_options.duration)) {
                    _durationUpdateMethod = _options.duration;
                    try {
                        _options.duration = parseFloat(_durationUpdateMethod())
                    } catch (e) {
                        log(1, "ERROR: Invalid return value of supplied function for option \"duration\":", _options.duration);
                        _durationUpdateMethod = undefined;
                        _options.duration = DEFAULT_OPTIONS.duration
                    }
                } else {
                    _options.duration = parseFloat(_options.duration);
                    if (!$.isNumeric(_options.duration) || _options.duration < 0) {
                        log(1, "ERROR: Invalid value for option \"duration\":", _options.duration);
                        _options.duration = DEFAULT_OPTIONS.duration
                    }
                }
            },
            "offset": function() {
                _options.offset = parseFloat(_options.offset);
                if (!$.isNumeric(_options.offset)) {
                    log(1, "ERROR: Invalid value for option \"offset\":", _options.offset);
                    _options.offset = DEFAULT_OPTIONS.offset
                }
            },
            "triggerElement": function() {
                if (_options.triggerElement !== null && $(_options.triggerElement).length === 0) {
                    log(1, "ERROR: Element defined in option \"triggerElement\" was not found:", _options.triggerElement);
                    _options.triggerElement = DEFAULT_OPTIONS.triggerElement
                }
            },
            "triggerHook": function() {
                if (!(_options.triggerHook in TRIGGER_HOOK_VALUES)) {
                    if ($.isNumeric(_options.triggerHook)) {
                        _options.triggerHook = Math.max(0, Math.min(parseFloat(_options.triggerHook), 1))
                    } else {
                        log(1, "ERROR: Invalid value for option \"triggerHook\": ", _options.triggerHook);
                        _options.triggerHook = DEFAULT_OPTIONS.triggerHook
                    }
                }
            },
            "reverse": function() {
                _options.reverse = !!_options.reverse
            },
            "tweenChanges": function() {
                _options.tweenChanges = !!_options.tweenChanges
            },
            "loglevel": function() {
                _options.loglevel = parseInt(_options.loglevel);
                if (!$.isNumeric(_options.loglevel) || _options.loglevel < 0 || _options.loglevel > 3) {
                    var wrongval = _options.loglevel;
                    _options.loglevel = DEFAULT_OPTIONS.loglevel;
                    log(1, "ERROR: Invalid value for option \"loglevel\":", wrongval)
                }
            },
        };
        var construct = function() {
            validateOption();
            ScrollScene.on("change.internal", function(e) {
                if (e.what !== "loglevel" && e.what !== "tweenChanges") {
                    if (e.what === "triggerElement") {
                        updateTriggerElementPosition()
                    } else if (e.what === "reverse") {
                        ScrollScene.update()
                    }
                }
            }).on("shift.internal", function(e) {
                updateScrollOffset();
                ScrollScene.update();
                if ((_state === "AFTER" && e.reason === "duration") || (_state === 'DURING' && _options.duration === 0)) {
                    updatePinState()
                }
            }).on("progress.internal", function(e) {
                updateTweenProgress();
                updatePinState()
            }).on("destroy", function(e) {
                e.preventDefault()
            })
        };
        var log = function(loglevel, output) {
            if (_options.loglevel >= loglevel) {
                var
                    prefix = "(" + NAMESPACE + ") ->",
                    args = Array.prototype.splice.call(arguments, 1);
                args.unshift(loglevel, prefix);
                debug.apply(window, args)
            }
        };
        var validateOption = function(check) {
            if (!arguments.length) {
                check = [];
                for (var key in _validate) {
                    check.push(key)
                }
            } else if (!$.isArray(check)) {
                check = [check]
            }
            $.each(check, function(key, value) {
                if (_validate[value]) {
                    _validate[value]()
                }
            })
        };
        var changeOption = function(varname, newval) {
            var
                changed = !1,
                oldval = _options[varname];
            if (_options[varname] != newval) {
                _options[varname] = newval;
                validateOption(varname);
                changed = oldval != _options[varname]
            }
            return changed
        };
        var updateScrollOffset = function() {
            _scrollOffset = {
                start: _triggerPos + _options.offset
            };
            if (_parent && _options.triggerElement) {
                _scrollOffset.start -= _parent.info("size") * ScrollScene.triggerHook()
            }
            _scrollOffset.end = _scrollOffset.start + _options.duration
        };
        var updateDuration = function(suppressEvents) {
            if (_durationUpdateMethod) {
                var varname = "duration";
                if (changeOption(varname, _durationUpdateMethod.call(ScrollScene)) && !suppressEvents) {
                    ScrollScene.trigger("change", {
                        what: varname,
                        newval: _options[varname]
                    });
                    ScrollScene.trigger("shift", {
                        reason: varname
                    })
                }
            }
        };
        var updateTriggerElementPosition = function(suppressEvents) {
            var elementPos = 0;
            if (_parent && _options.triggerElement) {
                var
                    element = $(_options.triggerElement).first(),
                    controllerInfo = _parent.info(),
                    containerOffset = getOffset(controllerInfo.container),
                    param = controllerInfo.vertical ? "top" : "left";
                while (element.parent().data("ScrollMagicPinSpacer")) {
                    element = element.parent()
                }
                var elementOffset = getOffset(element);
                if (!controllerInfo.isDocument) {
                    containerOffset[param] -= _parent.scrollPos()
                }
                elementPos = elementOffset[param] - containerOffset[param]
            }
            var changed = elementPos != _triggerPos;
            _triggerPos = elementPos;
            if (changed && !suppressEvents) {
                ScrollScene.trigger("shift", {
                    reason: "triggerElementPosition"
                })
            }
        };
        var updateTweenProgress = function(to) {
            if (_tween) {
                var progress = (to >= 0 && to <= 1) ? to : _progress;
                if (_tween.repeat() === -1) {
                    if (_state === "DURING" && _tween.paused()) {
                        _tween.play()
                    } else if (_state !== "DURING" && !_tween.paused()) {
                        _tween.pause()
                    } else {
                        return !1
                    }
                } else if (progress != _tween.progress()) {
                    if (_options.duration === 0) {
                        if (_state === "DURING") {
                            _tween.play()
                        } else {
                            _tween.reverse()
                        }
                    } else {
                        if (_options.tweenChanges) {
                            _tween.tweenTo(progress * _tween.duration())
                        } else {
                            _tween.progress(progress).pause()
                        }
                    }
                } else {
                    return !1
                }
                return !0
            } else {
                return !1
            }
        };
        var updatePinState = function(forceUnpin) {
            if (_pin && _parent) {
                var
                    containerInfo = _parent.info();
                if (!forceUnpin && _state === "DURING") {
                    if (_pin.css("position") != "fixed") {
                        _pin.css("position", "fixed");
                        updatePinSpacerSize();
                        _pin.addClass(_pinOptions.pinnedClass)
                    }
                    var fixedPos = getOffset(_pinOptions.spacer, !0),
                        scrollDistance = _options.reverse || _options.duration === 0 ? containerInfo.scrollPos - _scrollOffset.start : Math.round(_progress * _options.duration * 10) / 10;
                    fixedPos.top -= parseFloat(_pinOptions.spacer.css("margin-top"));
                    fixedPos[containerInfo.vertical ? "top" : "left"] += scrollDistance;
                    _pin.css({
                        top: fixedPos.top,
                        left: fixedPos.left
                    })
                } else {
                    var
                        newCSS = {
                            position: _pinOptions.inFlow ? "relative" : "absolute",
                            top: 0,
                            left: 0
                        },
                        change = _pin.css("position") != newCSS.position;
                    if (!_pinOptions.pushFollowers) {
                        newCSS[containerInfo.vertical ? "top" : "left"] = _options.duration * _progress
                    } else if (_options.duration > 0) {
                        if (_state === "AFTER" && parseFloat(_pinOptions.spacer.css("padding-top")) === 0) {
                            change = !0
                        } else if (_state === "BEFORE" && parseFloat(_pinOptions.spacer.css("padding-bottom")) === 0) {
                            change = !0
                        }
                    }
                    _pin.css(newCSS);
                    if (change) {
                        _pin.removeClass(_pinOptions.pinnedClass);
                        updatePinSpacerSize()
                    }
                }
            }
        };
        var updatePinSpacerSize = function() {
            if (_pin && _parent && _pinOptions.inFlow) {
                var
                    after = (_state === "AFTER"),
                    before = (_state === "BEFORE"),
                    during = (_state === "DURING"),
                    pinned = (_pin.css("position") == "fixed"),
                    vertical = _parent.info("vertical"),
                    $spacercontent = _pinOptions.spacer.children().first(),
                    marginCollapse = isMarginCollapseType(_pinOptions.spacer.css("display")),
                    css = {};
                if (marginCollapse) {
                    css["margin-top"] = before || (during && pinned) ? _pin.css("margin-top") : "auto";
                    css["margin-bottom"] = after || (during && pinned) ? _pin.css("margin-bottom") : "auto"
                } else {
                    css["margin-top"] = css["margin-bottom"] = "auto"
                }
                if (_pinOptions.relSize.width || _pinOptions.relSize.autoFullWidth) {
                    if (pinned) {
                        if ($(window).width() == _pinOptions.spacer.parent().width()) {
                            _pin.css("width", _pinOptions.relSize.autoFullWidth ? "100%" : "inherit")
                        } else {
                            _pin.css("width", _pinOptions.spacer.width())
                        }
                    } else {
                        _pin.css("width", "100%")
                    }
                } else {
                    css["min-width"] = $spacercontent.outerWidth(!$spacercontent.is(_pin));
                    css.width = pinned ? css["min-width"] : "auto"
                }
                if (_pinOptions.relSize.height) {
                    if (pinned) {
                        if ($(window).height() == _pinOptions.spacer.parent().height()) {
                            _pin.css("height", "inherit")
                        } else {
                            _pin.css("height", _pinOptions.spacer.height())
                        }
                    } else {
                        _pin.css("height", "100%")
                    }
                } else {
                    css["min-height"] = $spacercontent.outerHeight(!marginCollapse);
                    css.height = pinned ? css["min-height"] : "auto"
                }
                if (_pinOptions.pushFollowers) {
                    css["padding" + (vertical ? "Top" : "Left")] = _options.duration * _progress;
                    css["padding" + (vertical ? "Bottom" : "Right")] = _options.duration * (1 - _progress)
                }
                _pinOptions.spacer.css(css)
            }
        };
        var updatePinInContainer = function() {
            if (_parent && _pin && _state === "DURING" && !_parent.info("isDocument")) {
                updatePinState()
            }
        };
        var updateRelativePinSpacer = function() {
            if (_parent && _pin && _state === "DURING" && (((_pinOptions.relSize.width || _pinOptions.relSize.autoFullWidth) && $(window).width() != _pinOptions.spacer.parent().width()) || (_pinOptions.relSize.height && $(window).height() != _pinOptions.spacer.parent().height()))) {
                updatePinSpacerSize()
            }
        };
        var onMousewheelOverPin = function(e) {
            if (_parent && _pin && _state === "DURING" && !_parent.info("isDocument")) {
                e.preventDefault();
                _parent.scrollTo(_parent.info("scrollPos") - (e.originalEvent.wheelDelta / 3 || -e.originalEvent.detail * 30))
            }
        };
        this.parent = function() {
            return _parent
        };
        this.duration = function(newDuration) {
            var varname = "duration";
            if (!arguments.length) {
                return _options[varname]
            } else {
                if (!$.isFunction(newDuration)) {
                    _durationUpdateMethod = undefined
                }
                if (changeOption(varname, newDuration)) {
                    ScrollScene.trigger("change", {
                        what: varname,
                        newval: _options[varname]
                    });
                    ScrollScene.trigger("shift", {
                        reason: varname
                    })
                }
            }
            return ScrollScene
        };
        this.offset = function(newOffset) {
            var varname = "offset";
            if (!arguments.length) {
                return _options[varname]
            } else if (changeOption(varname, newOffset)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                });
                ScrollScene.trigger("shift", {
                    reason: varname
                })
            }
            return ScrollScene
        };
        this.triggerElement = function(newTriggerElement) {
            var varname = "triggerElement";
            if (!arguments.length) {
                return _options[varname]
            } else if (changeOption(varname, newTriggerElement)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                })
            }
            return ScrollScene
        };
        this.triggerHook = function(newTriggerHook) {
            var varname = "triggerHook";
            if (!arguments.length) {
                return $.isNumeric(_options[varname]) ? _options[varname] : TRIGGER_HOOK_VALUES[_options[varname]]
            } else if (changeOption(varname, newTriggerHook)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                });
                ScrollScene.trigger("shift", {
                    reason: varname
                })
            }
            return ScrollScene
        };
        this.reverse = function(newReverse) {
            var varname = "reverse";
            if (!arguments.length) {
                return _options[varname]
            } else if (changeOption(varname, newReverse)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                })
            }
            return ScrollScene
        };
        this.tweenChanges = function(newTweenChanges) {
            var varname = "tweenChanges";
            if (!arguments.length) {
                return _options[varname]
            } else if (changeOption(varname, newTweenChanges)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                })
            }
            return ScrollScene
        };
        this.loglevel = function(newLoglevel) {
            var varname = "loglevel";
            if (!arguments.length) {
                return _options[varname]
            } else if (changeOption(varname, newLoglevel)) {
                ScrollScene.trigger("change", {
                    what: varname,
                    newval: _options[varname]
                })
            }
            return ScrollScene
        };
        this.state = function() {
            return _state
        };
        this.triggerPosition = function() {
            var pos = _options.offset;
            if (_parent) {
                if (_options.triggerElement) {
                    pos += _triggerPos
                } else {
                    pos += _parent.info("size") * ScrollScene.triggerHook()
                }
            }
            return pos
        };
        this.triggerOffset = function() {
            return ScrollScene.triggerPosition()
        };
        this.scrollOffset = function() {
            return _scrollOffset.start
        };
        this.update = function(immediately) {
            if (_parent) {
                if (immediately) {
                    if (_parent.enabled() && _enabled) {
                        var
                            scrollPos = _parent.info("scrollPos"),
                            newProgress;
                        if (_options.duration > 0) {
                            newProgress = (scrollPos - _scrollOffset.start) / (_scrollOffset.end - _scrollOffset.start)
                        } else {
                            newProgress = scrollPos >= _scrollOffset.start ? 1 : 0
                        }
                        ScrollScene.trigger("update", {
                            startPos: _scrollOffset.start,
                            endPos: _scrollOffset.end,
                            scrollPos: scrollPos
                        });
                        ScrollScene.progress(newProgress)
                    } else if (_pin && _state === "DURING") {
                        updatePinState(!0)
                    }
                } else {
                    _parent.updateScene(ScrollScene, !1)
                }
            }
            return ScrollScene
        };
        this.refresh = function() {
            updateDuration();
            updateTriggerElementPosition();
            return ScrollScene
        };
        this.progress = function(progress) {
            if (!arguments.length) {
                return _progress
            } else {
                var
                    doUpdate = !1,
                    oldState = _state,
                    scrollDirection = _parent ? _parent.info("scrollDirection") : 'PAUSED',
                    reverseOrForward = _options.reverse || progress >= _progress;
                if (_options.duration === 0) {
                    doUpdate = _progress != progress;
                    _progress = progress < 1 && reverseOrForward ? 0 : 1;
                    _state = _progress === 0 ? 'BEFORE' : 'DURING'
                } else {
                    if (progress <= 0 && _state !== 'BEFORE' && reverseOrForward) {
                        _progress = 0;
                        _state = 'BEFORE';
                        doUpdate = !0
                    } else if (progress > 0 && progress < 1 && reverseOrForward) {
                        _progress = progress;
                        _state = 'DURING';
                        doUpdate = !0
                    } else if (progress >= 1 && _state !== 'AFTER') {
                        _progress = 1;
                        _state = 'AFTER';
                        doUpdate = !0
                    } else if (_state === 'DURING' && !reverseOrForward) {
                        updatePinState()
                    }
                }
                if (doUpdate) {
                    var
                        eventVars = {
                            progress: _progress,
                            state: _state,
                            scrollDirection: scrollDirection
                        },
                        stateChanged = _state != oldState;
                    var trigger = function(eventName) {
                        ScrollScene.trigger(eventName, eventVars)
                    };
                    if (stateChanged) {
                        if (oldState !== 'DURING') {
                            trigger("enter");
                            trigger(oldState === 'BEFORE' ? "start" : "end")
                        }
                    }
                    trigger("progress");
                    if (stateChanged) {
                        if (_state !== 'DURING') {
                            trigger(_state === 'BEFORE' ? "start" : "end");
                            trigger("leave")
                        }
                    }
                }
                return ScrollScene
            }
        };
        this.setTween = function(TweenObject) {
            if (!TimelineMax) {
                log(1, "ERROR: TimelineMax wasn't found. Please make sure GSAP is loaded before ScrollMagic or use asynchronous loading.");
                return ScrollScene
            }
            if (_tween) {
                ScrollScene.removeTween()
            }
            try {
                _tween = new TimelineMax({
                    smoothChildTiming: !0
                }).add(TweenObject).pause()
            } catch (e) {
                log(1, "ERROR calling method 'setTween()': Supplied argument is not a valid TweenObject")
            } finally {
                if (TweenObject.repeat && TweenObject.repeat() === -1) {
                    _tween.repeat(-1);
                    _tween.yoyo(TweenObject.yoyo())
                }
            }
            if (_tween && _parent && _options.triggerElement && _options.loglevel >= 2) {
                var
                    triggerTweens = _tween.getTweensOf($(_options.triggerElement)),
                    vertical = _parent.info("vertical");
                $.each(triggerTweens, function(index, value) {
                    var
                        tweenvars = value.vars.css || value.vars,
                        condition = vertical ? (tweenvars.top !== undefined || tweenvars.bottom !== undefined) : (tweenvars.left !== undefined || tweenvars.right !== undefined);
                    if (condition) {
                        log(2, "WARNING: Tweening the position of the trigger element affects the scene timing and should be avoided!");
                        return !1
                    }
                })
            }
            if (parseFloat(TweenLite.version) >= 1.14) {
                var
                    list = _tween.getChildren(!0, !0, !1),
                    newCallback = function() {
                        log(2, "WARNING: tween was overwritten by another. To learn how to avoid this issue see here: https://github.com/janpaepke/ScrollMagic/wiki/WARNING:-tween-was-overwritten-by-another")
                    };
                for (var i = 0, thisTween, oldCallback; i < list.length; i++) {
                    thisTween = list[i];
                    if (oldCallback !== newCallback) {
                        oldCallback = thisTween.vars.onOverwrite;
                        thisTween.vars.onOverwrite = function() {
                            if (oldCallback) {
                                oldCallback.apply(this, arguments)
                            }
                            newCallback.apply(this, arguments)
                        }
                    }
                }
            }
            log(3, "added tween");
            updateTweenProgress();
            return ScrollScene
        };
        this.removeTween = function(reset) {
            if (_tween) {
                if (reset) {
                    updateTweenProgress(0)
                }
                _tween.kill();
                _tween = undefined;
                log(3, "removed tween (reset: " + (reset ? "true" : "false") + ")")
            }
            return ScrollScene
        };
        this.setPin = function(element, settings) {
            var
                defaultSettings = {
                    pushFollowers: !0,
                    spacerClass: "scrollmagic-pin-spacer",
                    pinnedClass: ""
                };
            settings = $.extend({}, defaultSettings, settings);
            element = $(element).first();
            if (element.length === 0) {
                log(1, "ERROR calling method 'setPin()': Invalid pin element supplied.");
                return ScrollScene
            } else if (element.css("position") == "fixed") {
                log(1, "ERROR calling method 'setPin()': Pin does not work with elements that are positioned 'fixed'.");
                return ScrollScene
            }
            if (_pin) {
                if (_pin === element) {
                    return ScrollScene
                } else {
                    ScrollScene.removePin()
                }
            }
            _pin = element;
            _pin.parent().hide();
            var inFlow = _pin.css("position") != "absolute",
                pinCSS = _pin.css(["display", "top", "left", "bottom", "right"]),
                sizeCSS = _pin.css(["width", "height"]);
            _pin.parent().show();
            if (sizeCSS.width === "0px" && inFlow && isMarginCollapseType(pinCSS.display)) {}
            if (!inFlow && settings.pushFollowers) {
                log(2, "WARNING: If the pinned element is positioned absolutely pushFollowers is disabled.");
                settings.pushFollowers = !1
            }
            var spacer = $("<div></div>").addClass(settings.spacerClass).css(pinCSS).data("ScrollMagicPinSpacer", !0).css({
                position: inFlow ? "relative" : "absolute",
                "margin-left": "auto",
                "margin-right": "auto",
                "box-sizing": "content-box"
            });
            var pinInlineCSS = _pin[0].style;
            _pinOptions = {
                spacer: spacer,
                relSize: {
                    width: sizeCSS.width.slice(-1) === "%",
                    height: sizeCSS.height.slice(-1) === "%",
                    autoFullWidth: sizeCSS.width === "0px" && inFlow && isMarginCollapseType(pinCSS.display)
                },
                pushFollowers: settings.pushFollowers,
                inFlow: inFlow,
                origStyle: {
                    width: pinInlineCSS.width || "",
                    position: pinInlineCSS.position || "",
                    top: pinInlineCSS.top || "",
                    left: pinInlineCSS.left || "",
                    bottom: pinInlineCSS.bottom || "",
                    right: pinInlineCSS.right || "",
                    "box-sizing": pinInlineCSS["box-sizing"] || "",
                    "-moz-box-sizing": pinInlineCSS["-moz-box-sizing"] || "",
                    "-webkit-box-sizing": pinInlineCSS["-webkit-box-sizing"] || ""
                },
                pinnedClass: settings.pinnedClass
            };
            if (_pinOptions.relSize.width) {
                spacer.css("width", sizeCSS.width)
            }
            if (_pinOptions.relSize.height) {
                spacer.css("height", sizeCSS.height)
            }
            _pin.before(spacer).appendTo(spacer).css({
                position: inFlow ? "relative" : "absolute",
                top: "auto",
                left: "auto",
                bottom: "auto",
                right: "auto"
            });
            if (_pinOptions.relSize.width || _pinOptions.relSize.autoFullWidth) {
                _pin.css("box-sizing", "border-box")
            }
            $(window).on("scroll." + NAMESPACE + "_pin resize." + NAMESPACE + "_pin", updatePinInContainer);
            _pin.on("mousewheel DOMMouseScroll", onMousewheelOverPin);
            log(3, "added pin");
            updatePinState();
            return ScrollScene
        };
        this.removePin = function(reset) {
            if (_pin) {
                if (reset || !_parent) {
                    _pin.insertBefore(_pinOptions.spacer).css(_pinOptions.origStyle);
                    _pinOptions.spacer.remove()
                } else {
                    if (_state === "DURING") {
                        updatePinState(!0)
                    }
                }
                $(window).off("scroll." + NAMESPACE + "_pin resize." + NAMESPACE + "_pin");
                _pin.off("mousewheel DOMMouseScroll", onMousewheelOverPin);
                _pin = undefined;
                log(3, "removed pin (reset: " + (reset ? "true" : "false") + ")")
            }
            return ScrollScene
        };
        this.setClassToggle = function(element, classes) {
            var $elm = $(element);
            if ($elm.length === 0 || $.type(classes) !== "string") {
                log(1, "ERROR calling method 'setClassToggle()': Invalid " + ($elm.length === 0 ? "element" : "classes") + " supplied.");
                return ScrollScene
            }
            _cssClasses = classes;
            _cssClassElm = $elm;
            ScrollScene.on("enter.internal_class leave.internal_class", function(e) {
                _cssClassElm.toggleClass(_cssClasses, e.type === "enter")
            });
            return ScrollScene
        };
        this.removeClassToggle = function(reset) {
            if (_cssClassElm && reset) {
                _cssClassElm.removeClass(_cssClasses)
            }
            ScrollScene.off("start.internal_class end.internal_class");
            _cssClasses = undefined;
            _cssClassElm = undefined;
            return ScrollScene
        };
        this.addTo = function(controller) {
            if (!(controller instanceof ScrollMagic)) {
                log(1, "ERROR: supplied argument of 'addTo()' is not a valid ScrollMagic controller")
            } else if (_parent != controller) {
                if (_parent) {
                    _parent.removeScene(ScrollScene)
                }
                _parent = controller;
                validateOption();
                updateDuration(!0);
                updateTriggerElementPosition(!0);
                updateScrollOffset();
                updatePinSpacerSize();
                _parent.info("container").on("resize." + NAMESPACE, function() {
                    updateRelativePinSpacer();
                    if (ScrollScene.triggerHook() > 0) {
                        ScrollScene.trigger("shift", {
                            reason: "containerSize"
                        })
                    }
                });
                log(3, "added " + NAMESPACE + " to controller");
                controller.addScene(ScrollScene);
                ScrollScene.update()
            }
            return ScrollScene
        };
        this.enabled = function(newState) {
            if (!arguments.length) {
                return _enabled
            } else if (_enabled != newState) {
                _enabled = !!newState;
                ScrollScene.update(!0)
            }
            return ScrollScene
        };
        this.remove = function() {
            if (_parent) {
                _parent.info("container").off("resize." + NAMESPACE);
                var tmpParent = _parent;
                _parent = undefined;
                log(3, "removed " + NAMESPACE + " from controller");
                tmpParent.removeScene(ScrollScene)
            }
            return ScrollScene
        };
        this.destroy = function(reset) {
            ScrollScene.removeTween(reset);
            ScrollScene.removePin(reset);
            ScrollScene.removeClassToggle(reset);
            ScrollScene.trigger("destroy", {
                reset: reset
            });
            ScrollScene.remove();
            ScrollScene.off("start end enter leave progress change update shift destroy shift.internal change.internal progress.internal");
            log(3, "destroyed " + NAMESPACE + " (reset: " + (reset ? "true" : "false") + ")");
            return null
        };
        this.on = function(name, callback) {
            if ($.isFunction(callback)) {
                var names = $.trim(name).toLowerCase().replace(/(\w+)\.(\w+)/g, '$1.' + NAMESPACE + '_$2').replace(/( |^)(\w+)(?= |$)/g, '$1$2.' + NAMESPACE);
                $(ScrollScene).on(names, callback)
            } else {
                log(1, "ERROR calling method 'on()': Supplied argument is not a valid callback!")
            }
            return ScrollScene
        };
        this.off = function(name, callback) {
            var names = $.trim(name).toLowerCase().replace(/(\w+)\.(\w+)/g, '$1.' + NAMESPACE + '_$2').replace(/( |^)(\w+)(?= |$)/g, '$1$2.' + NAMESPACE + '$3');
            $(ScrollScene).off(names, callback);
            return ScrollScene
        };
        this.trigger = function(name, vars) {
            log(3, 'event fired:', name, "->", vars);
            var event = $.Event($.trim(name).toLowerCase(), vars);
            $(ScrollScene).trigger(event);
            return ScrollScene
        };
        construct();
        return ScrollScene
    };
    var debug = (function(console) {
        var loglevels = ["error", "warn", "log"];
        if (!console.log) {
            console.log = function() {}
        }
        for (var i = 0, method; i < loglevels.length; i++) {
            method = loglevels[i];
            if (!console[method]) {
                console[method] = console.log
            }
        }
        return function(loglevel) {
            if (loglevel > loglevels.length || loglevel <= 0) loglevel = loglevels.length;
            var now = new Date(),
                time = ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2) + ":" + ("0" + now.getSeconds()).slice(-2) + ":" + ("00" + now.getMilliseconds()).slice(-3),
                method = loglevels[loglevel - 1],
                args = Array.prototype.splice.call(arguments, 1),
                func = Function.prototype.bind.call(console[method], console);
            args.unshift(time);
            func.apply(console, args)
        }
    }(window.console = window.console || {}));
    var getOffset = function(elem, relativeToViewport) {
        var offset = {
            top: 0,
            left: 0
        };
        elem = elem[0];
        if (elem && elem.getBoundingClientRect) {
            var rect = elem.getBoundingClientRect();
            offset.top = rect.top;
            offset.left = rect.left;
            if (!relativeToViewport) {
                offset.top += (window.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0);
                offset.left += (window.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)
            }
        }
        return offset
    };
    var isDomElement = function(o) {
        return (typeof HTMLElement === "object" ? o instanceof HTMLElement : o && typeof o === "object" && o !== null && o.nodeType === 1 && typeof o.nodeName === "string")
    };
    var isMarginCollapseType = function(str) {
        return ["block", "flex", "list-item", "table", "-webkit-box"].indexOf(str) > -1
    };
    var animationFrameCallback = window.requestAnimationFrame;
    var animationFrameCancelCallback = window.cancelAnimationFrame;
    (function(window) {
        var
            lastTime = 0,
            vendors = ['ms', 'moz', 'webkit', 'o'],
            i;
        for (i = 0; !animationFrameCallback && i < vendors.length; ++i) {
            animationFrameCallback = window[vendors[i] + 'RequestAnimationFrame'];
            animationFrameCancelCallback = window[vendors[i] + 'CancelAnimationFrame'] || window[vendors[i] + 'CancelRequestAnimationFrame']
        }
        if (!animationFrameCallback) {
            animationFrameCallback = function(callback) {
                var
                    currTime = new Date().getTime(),
                    timeToCall = Math.max(0, 16 - (currTime - lastTime)),
                    id = window.setTimeout(function() {
                        callback(currTime + timeToCall)
                    }, timeToCall);
                lastTime = currTime + timeToCall;
                return id
            }
        }
        if (!animationFrameCancelCallback) {
            animationFrameCancelCallback = function(id) {
                window.clearTimeout(id)
            }
        }
    }(window));
    return {
        Controller: ScrollMagic,
        Scene: ScrollScene,
    }
}));
