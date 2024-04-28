jQuery(document).ready(function() {
    jQuery("#back-top").hide();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#back-top').fadeIn(100)
        } else {
            jQuery('#back-top').fadeOut(100)
        }
    });
    jQuery('#back-top a').click(function() {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
        return !1
    });
    if (jQuery().slick) {
        var slick = jQuery(".slick-carousel");
        slick.each(function() {
            var item = jQuery(this).data('item'),
                item_lg = jQuery(this).data('item_lg'),
                item_md = jQuery(this).data('item_md'),
                item_sm = jQuery(this).data('item_sm'),
                item_mb = jQuery(this).data('item_mb'),
                row = jQuery(this).data('row'),
                arrows = jQuery(this).data('arrows'),
                dots = jQuery(this).data('dots'),
                vertical = jQuery(this).data('vertical');
            jQuery(this).slick({
                autoplay: !0,
                dots: dots,
                arrows: arrows,
                infinite: !0,
                autoplaySpeed: 2000,
                vertical: vertical,
                slidesToShow: item,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                rows: row,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: item_lg,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: item_md,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: item_sm,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: item_mb,
                        slidesToScroll: 1,
                    }
                }]
            })
        })
    }
    jQuery('#showmenu').click(function(e) {
        e.preventDefault();
        jQuery('#mobilenav').toggleClass('opened');
        jQuery('.panel-overlay').toggleClass('active');
        jQuery('.hamburger', this).toggleClass('is-active');
        jQuery('body').toggleClass('is-overflow')
    });
    jQuery('.panel-overlay').click(function() {
        jQuery('#mobilenav').toggleClass('opened');
        jQuery(this).removeClass('active');
        jQuery('#showmenu .hamburger').removeClass('is-active');
        jQuery('body').removeClass('is-overflow')
    });
    jQuery('.menu_close').click(function() {
        jQuery('#mobilenav').toggleClass('opened');
        jQuery('.panel-overlay').removeClass('active');
        jQuery('#showmenu .hamburger').removeClass('is-active');
        jQuery('body').removeClass('is-overflow')
    });
    jQuery("#mobilenav ul.sub-menu").before('<span class="arrow"></span>');
    jQuery("body").on('click', '#mobilenav .arrow', function() {
        jQuery(this).parent('li').toggleClass('open');
        jQuery(this).parent('li').find('ul.sub-menu').first().slideToggle("normal")
    });
    jQuery("body").on('click', '#mobilenav .menu-item-has-children', function() {
        jQuery(this).toggleClass('open');
        jQuery(this).find('ul.sub-menu').first().slideToggle("normal")
    });
    jQuery('input').attr('autocomplete', 'off');

    function create_dropdown_menu_ft() {
        if (jQuery(window).width() < 992) {
            jQuery('.footer-widgets .widget_nav_menu .widget-title').before('<span class="arrow"></span>');
            jQuery('.footer-widgets .widget_nav_menu > div').hide();
            jQuery("body").on('click', '.footer-widgets .widget_nav_menu .widget-title', function() {
                jQuery(this).parent().toggleClass('open');
                jQuery(this).parent().find('>div').first().slideToggle("normal")
            })
        }
    }
    jQuery(window).bind('scroll', function() {
        var navHeight = 200;
        if (jQuery(window).scrollTop() > navHeight) {
            jQuery('.header-main').addClass('nav-sticky')
        } else {
            jQuery('.header-main').removeClass('nav-sticky')
        }
    });
    jQuery('#msgModal').on('show.bs.modal', function(event) {
        var button = jQuery(event.relatedTarget);
        var pack = button.data('pack');
        console.log(pack)
        var modal = jQuery(this);
        modal.find('.modal-body #goi').val(pack)
    });
    // if (jQuery(".tab-product").length) {
    //     var tabpro = jQuery(".tab-product");
    //     tabpro.each(function() {
    //         var loaded_product_tabs = [];
    //         var product_tabs = jQuery(this).find('.product-tab'),
    //             tab_items = product_tabs.find('.nav-item');
    //         if (product_tabs.length > 0) {
    //             loaded_product_tabs.push(parseInt(tab_items[0].firstChild.dataset.cat))
    //         }
    //         tab_items.each(function() {
    //             var tab = jQuery(this);
    //             tab.find('.nav-link').click(function(e) {
    //                 e.preventDefault();
    //                 var link = jQuery(this),
    //                     cat_id = parseInt(jQuery(this).data('cat')),
    //                     tab_content = jQuery(jQuery(this).attr('href'));
    //                 tab_items.find('.nav-link').removeClass('active');
    //                 link.addClass('active');
    //                 product_tabs.next().find('.tab-pane').removeClass('show active');
    //                 tab_content.addClass('show active');
    //                 if (loaded_product_tabs.includes(cat_id)) {
    //                     return
    //                 }
    //                 loaded_product_tabs.push(cat_id);
    //                 jQuery.ajax({
    //                     type: "GET",
    //                     url: ajax.url,
    //                     dataType: 'json',
    //                     data: ({
    //                         action: 'get_data_list_theme',
    //                         idCat: cat_id,
    //                     }),
    //                     beforeSend: function() {
    //                         tab_content.html('<div class="text-center">Äang táº£i dá»¯ liá»‡u ...</div>')
    //                     },
    //                     success: function(data) {
    //                         tab_content.html(data.content)
    //                     }
    //                 })
    //             })
    //         })
    //     })
    // }
    if (jQuery(".tab-post").length) {
        var tabpro = jQuery(".tab-post");
        tabpro.each(function() {
            var loaded_post_tabs = [];
            var post_tabs = jQuery(this).find('.post-tab'),
                tab_items = post_tabs.find('.nav-item');
            if (post_tabs.length > 0) {
                loaded_post_tabs.push(parseInt(tab_items[0].firstChild.dataset.cat))
            }
            tab_items.each(function() {
                var tab = jQuery(this);
                tab.find('.nav-link').click(function(e) {
                    e.preventDefault();
                    var link = jQuery(this),
                        cat_id = parseInt(jQuery(this).data('cat')),
                        tab_content = jQuery(jQuery(this).attr('href'));
                    tab_items.find('.nav-link').removeClass('active');
                    link.addClass('active');
                    post_tabs.next().find('.tab-pane').removeClass('show active');
                    tab_content.addClass('show active');
                    if (loaded_post_tabs.includes(cat_id)) {
                        return
                    }
                    loaded_post_tabs.push(cat_id);
                    jQuery.ajax({
                        type: "GET",
                        url: ajax.url,
                        dataType: 'json',
                        data: ({
                            action: 'get_data_list_post',
                            idCat: cat_id,
                        }),
                        beforeSend: function() {
                            tab_content.html('<div class="text-center mb-5">Äang táº£i dá»¯ liá»‡u ...</div>')
                        },
                        success: function(data) {
                            tab_content.html(data.content)
                        }
                    })
                })
            })
        })
    }
    if (jQuery(".page-title-bar__logo").length) {
        jQuery(".page-title-bar__logo").html(jQuery(".page-title-bar__logo").html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
        TweenMax.staggerFromTo(jQuery(".page-title-bar__logo").find("span"), .4, {
            autoAlpha: 0,
            scale: 0
        }, {
            autoAlpha: 1,
            scale: 1
        }, 0.1)
    }
    if (jQuery(window).width() > 1200) {
        if (typeof ScrollMagic != "undefined") {
            var scrollMagicController2 = new ScrollMagic();
            var item_register = TweenMax.from('.register-phone', 2, {
                y: 100,
                opacity: 0,
                delay: .3,
                ease: Back.easeOut.config(1.7),
            }, 0.1);
            var tl_register = new TimelineMax().add([item_register]);
            var home_register = new ScrollScene({
                triggerElement: '#home-register',
                triggerHook: 1
            }).setTween(tl_register).addTo(scrollMagicController2)
        }
    }
    document.addEventListener('wpcf7invalid', function(event) {
        jQuery('.wpcf7-response-output').addClass('alert alert-danger')
    }, !1);
    document.addEventListener('wpcf7spam', function(event) {
        jQuery('.wpcf7-response-output').addClass('alert alert-warning')
    }, !1);
    document.addEventListener('wpcf7mailfailed', function(event) {
        jQuery('.wpcf7-response-output').addClass('alert alert-warning')
    }, !1);
    document.addEventListener('wpcf7mailsent', function(event) {
        jQuery('.wpcf7-response-output').addClass('alert alert-success');
        location = 'https://univn.vn/cam-on'
    }, !1);
    jQuery('#whoisModal').on('show.bs.modal', function(event) {
        var button = jQuery(event.relatedTarget);
        var domain = button.data('domain');
        var modal = jQuery(this);
        modal.find('.modal-title strong').text(domain);
        jQuery.ajax({
            type: "GET",
            url: ajax.url,
            dataType: 'html',
            data: ({
                action: 'get_whois_domain',
                domain: domain,
            }),
            beforeSend: function() {
                modal.find('.modal-body').html('<p>Äang táº£i <i class="fas fa-spinner fa-xs fa-spin"></i>')
            },
            success: function(data) {
                if (data) {
                    modal.find('.modal-body').html(data)
                }
            }
        })
    });
    jQuery('.open_search').on('click', function() {
        jQuery('.icon-search').addClass('active');
        jQuery('.search-holder').animate({
            opacity: '1',
            width: 'toggle',
        }, 'slow')
    });
    jQuery('.close_search').on('click', function() {
        jQuery('.icon-search').removeClass('active');
        jQuery('.search-holder').animate({
            opacity: '0',
            width: 'toggle',
        }, 'slow')
    });
    jQuery('#partnerModal').on('show.bs.modal', function(event) {
        var idNews = jQuery(event.relatedTarget).data('id');
        jQuery.ajax({
            type: "GET",
            url: ajax.url,
            dataType: 'html',
            data: ({
                action: 'get_content_post',
                idNews: idNews,
            }),
            beforeSend: function() {
                jQuery('#partnerModal .modal-body').html('<p class="text-center">Äang táº£i...</p>')
            },
            success: function(data) {
                if (data) {
                    jQuery('#partnerModal .modal-body').html(data);
                    jQuery('html').addClass('modal-open')
                }
            }
        })
    });
    jQuery('#partnerModal').on('hide.bs.modal', function(event) {
        jQuery(this).find('.modal-body').empty();
        jQuery('html').removeClass('modal-open')
    });
    jQuery(document).on('click', '.btn-change-post', function(event) {
        jQuery('#partnerModal').find('.modal-body').empty();
        var idNews = jQuery(this).data('id');
        jQuery.ajax({
            type: "GET",
            url: ajax.url,
            dataType: 'html',
            data: ({
                action: 'get_content_post',
                idNews: idNews,
            }),
            beforeSend: function() {
                jQuery('#partnerModal .modal-body').html('<p class="text-center">Äang táº£i...</p>')
            },
            success: function(data) {
                if (data) {
                    jQuery('#partnerModal .modal-body').html(data)
                }
            }
        })
    });
    jQuery(".button-scroll").click(function() {
        var offset = jQuery(this).data('offset');
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                jQuery("html,body").animate({
                    scrollTop: target.offset().top - offset,
                }, 1000);
                return !1
            }
        }
    })
});
