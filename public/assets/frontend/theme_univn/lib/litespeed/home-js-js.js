jQuery(function() {
    if (jQuery(window).width() > 1200) {
        var scrollMagicController = new ScrollMagic();
        var item_service = TweenMax.staggerFrom('.item-service', 1, {
            y: 100,
            opacity: 0,
            ease: Expo.easeInOut,
        }, 0.1);
        var tl_services = new TimelineMax().add([item_service]);
        var home_services = new ScrollScene({
            triggerElement: '#home-services',
            triggerHook: 0.8
        }).setTween(tl_services).addTo(scrollMagicController);
        var item_feature = TweenMax.staggerFrom('.item-feature', 1.5, {
            x: -100,
            opacity: 0,
            ease: Power3.easeInOut,
        }, 0.1);
        var item_feature2 = TweenMax.from('.surface', 2, {
            x: 100,
            opacity: 0,
            ease: Expo.easeInOut,
        }, 0.1);
        var tl_feature = new TimelineMax().add([item_feature, item_feature2]);
        var home_feature = new ScrollScene({
            triggerElement: '#home-feature',
            triggerHook: 0.8
        }).setTween(tl_feature).addTo(scrollMagicController);
        var item_package = TweenMax.from('.list-package', 1, {
            y: 50,
            opacity: 0,
            ease: Power3.easeInOut,
        }, 0.1);
        var tl_package = new TimelineMax().add([item_package]);
        var home_package = new ScrollScene({
            triggerElement: '#home-package',
            triggerHook: 0.8
        }).setTween(tl_package).addTo(scrollMagicController);
        var item_reason = TweenMax.staggerFrom('.box-reasonl .item-reason', 1.5, {
            x: -200,
            opacity: 0,
            ease: Power3.easeInOut,
        }, 0.1);
        var item_reason2 = TweenMax.staggerFrom('.box-reasonr .item-reason', 1.5, {
            x: 200,
            opacity: 0,
            ease: Power3.easeInOut,
        }, 0.1);
        var item_reason3 = TweenMax.from('.iphone', 2, {
            y: 200,
            opacity: 0,
            ease: Back.easeOut.config(1.7),
        }, 0.1);
        var tl_reason = new TimelineMax().add([item_reason, item_reason2, item_reason3]);
        var home_reason = new ScrollScene({
            triggerElement: '#home-reason',
            triggerHook: 0.8
        }).setTween(tl_reason).addTo(scrollMagicController);
        var item_theme = TweenMax.from('.product-tab .nav-item', 2, {
            scale: .5,
            opacity: .5,
            ease: Power3.easeOut
        }, 0.1);
        var tl_theme = new TimelineMax().add([item_theme]);
        var home_theme = new ScrollScene({
            triggerElement: '#home-themes',
            triggerHook: 0.8
        }).setTween(tl_theme).addTo(scrollMagicController);
        var item_post = TweenMax.from('.tab-post .tab-content', 2, {
            y: 200,
            opacity: 0,
            delay: .3,
            ease: Power3.easeOut
        }, 0.1);
        var tl_post = new TimelineMax().add([item_post]);
        var home_post = new ScrollScene({
            triggerElement: '#home-news',
            triggerHook: 0.8
        }).setTween(tl_post).addTo(scrollMagicController)
    }
});
