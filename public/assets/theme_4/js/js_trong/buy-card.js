let swiper_buy_card = new Swiper(".js--swiper__banner", {
    autoplay: {
        disableOnInteraction: true,
        delay:3000
    },
    pagination: {
        el: ".swiper-pagination.--custom",
        clickable: true
    },
    speed:500,
    loop:true,
});

let service_swiper = new Swiper(".js-swipe-service", {
    autoplay: {
        delay:3000
    },
    freeMode:true,
    spaceBetween: 16,
    slidesPerView:3.75,
    breakpoints: {
        1190: {
            slidesPerView: 1.45,
        }
    },
    speed:500,
    observer: true,
    observeParents: true,
});

let card_other_swiper = new Swiper(".card--other__swipe", {
    autoplay: {
        delay:3000
    },
    navigation: {
        nextEl: ".card-other-next",
        prevEl: ".card-other-prev",
    },
    breakpoints: {
        1190: {
            slidesPerView: 1.5,
        }
    },
    spaceBetween: 16,
    slidesPerView:4,
    speed:500,
    observer: true,
    observeParents: true,
});

let swipe_card = new Swiper(".js--card__swipe", {
    autoplay: {
        delay:3000
    },
    freeMode:true,
    spaceBetween: 16,
    slidesPerView:1.5,
    speed:500,
    observer: true,
    observeParents: true,
});
// $('label[for]').on('click',function () {
//     $('#card-game').fadeOut();
//     $('#card-phone').fadeOut();
//     $('#service-related').fadeOut();
//
//     let input_id = $(this).attr('for');
//
//     // unactive all label nav
//     $('#card--game__nav li').removeClass('active');
//     $('#card--phone__nav li').removeClass('active');
//     //active nav
//     let label_nav = $(`li label[for=${input_id}]`);
//     label_nav.parent().addClass('active');
//
//     let scratch_card = $(`#${input_id}`).next();
//     let path_logo = scratch_card.find('.card--thumb__image').attr('src');
//     let card__name = scratch_card.find('.card--name').text().trim();
//     let card__color = scratch_card.find('.card--name').css('--bg-color')
//
//     let card_value_elm = $('#card--value');
//     let card_other_elm = $('#card--other');
//     card_value_elm.hide();
//     card_other_elm.hide();
//     // set title,logo,color for block
//     card_value_elm.find('.card--title').text(card__name);
//     card_value_elm.find('.card--thumb__image').attr('src',path_logo);
//     card_value_elm.find('.card--name').css('--bg-color',card__color);
//     card_value_elm.fadeIn();
//     card_other_elm.fadeIn();
// });
