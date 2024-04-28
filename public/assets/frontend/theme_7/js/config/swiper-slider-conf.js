let swiper_flash_sale = new Swiper('.js-flash-sale-swiper',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 4,
    speed: 300,
    spaceBetween: 16,
    touchMove: true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 1.25,
        }
    },
    navigation: {
        nextEl: ".js-flash-sale-swiper .navigation.slider-next",
        prevEl: ".js-flash-sale-swiper .navigation.slider-prev",
    },
});

let swiper_slider_news = new Swiper('.js-swiper-news',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 4,
    speed: 300,
    spaceBetween: 16,
    touchMove: true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 1.25,
        }
    },
    navigation: {
        nextEl: ".js-swiper-news .navigation.slider-next",
        prevEl: ".js-swiper-news .navigation.slider-prev",
    },
});

let swiper_config_category = new Swiper('.section-category .class-config-demo',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 5,
    speed: 300,
    spaceBetween: 16,
    touchMove: true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 1.5,
        }
    },
    navigation: {
        nextEl: ".class-config-demo .navigation.slider-next",
        prevEl: ".class-config-demo .navigation.slider-prev",
    },
});

let swiper_config_category_tab = new Swiper('.section-category-tab .class-config-demo',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 5,
    speed: 300,
    spaceBetween: 16,
    touchMove: true,
    grabCursor: true,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 2.25,
            spaceBetween: 12,
        }
    },
    navigation: {
        nextEl: ".class-config-demo .navigation.slider-next",
        prevEl: ".class-config-demo .navigation.slider-prev",
    },
});

let swiper_config_acc_game = new Swiper('.swiper-acc-game',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 5,
    speed: 300,
    spaceBetween: 16,
    touchMove: false,
    grabCursor: false,
    simulateTouch:false,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            simulateTouch:true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 2.25,
            simulateTouch:true,
            spaceBetween: 12,
        }
    },
});

let swiper_config_related_service = new Swiper('.swiper-related-service',{
    autoplay: false,
    updateOnImagesReady: true,
    watchSlidesVisibility: false,
    lazyLoadingInPrevNext: false,
    lazyLoadingOnTransitionStart: false,
    slidesPerView: 5,
    speed: 300,
    spaceBetween: 16,
    touchMove: false,
    grabCursor: false,
    observer: true,
    observeParents: true,
    breakpoints: {
        992: {
            freeMode: true,
            slidesPerView: 3,
        },
        768: {
            freeMode: true,
            slidesPerView: 2.25,
            spaceBetween: 12,
        }
    },
    navigation: {
        nextEl: ".swiper-related-service .navigation.slider-next",
        prevEl: ".swiper-related-service .navigation.slider-prev",
    },
});

if ($('.gallery-top').length) {
    let galleryTop = new Swiper('.gallery-top', {
        centeredSlides: true,
        spaceBetween: 16,
        touchRatio: 0.2,
        slidesPerView: "auto",
        slideToClickedSlide: true,
        loop: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        direction: "vertical",
        observer: true,
        observeParents: true,
    });
    let galleryThumbs = new Swiper('.gallery-thumbs', {
        loop: true,
        clickable: true,
        slideToClickedSlide: true,
        slidesPerView: "auto",
        navigation: {
            nextEl: ".acc-detail .navigation.slider-next",
            prevEl: ".acc-detail .navigation.slider-prev",
        },
        pagination: {
            el: ".tab-show-acc.count-thumb",
            type: "fraction",
        },
        observer: true,
        observeParents: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
}
