import HEADER from "../../components/header";
import BACKTOTOP from "../../components/backtotop";

const LISTING = {
    init() {
        HEADER.init();
        BACKTOTOP.init();

        // this.showModalProduct();
        // this.closeModalProduct();
        this.toggleCheckBoxSidebar();
        this.openAndCloseDropDownMenuMobile();
    },

    buildSliderModal() {
        var swiper = new Swiper('.modal_thumbnail', {
            direction: 'vertical',
            slidesPerView: 4,
            spaceBetween: 5,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.modal_thumbnail_slide-next',
                prevEl: '.modal_thumbnail_slide-prev',
            },
        })
    },

    // showModalProduct() {
    //     $('.animation3d i.fa-search-plus').click(function () {
    //         $.ajax({
    //             url: $(this).data('route'),
    //             error: function () {
    //                 console.log('error');
    //             },
    //             success: function (data) {
    //                 let dataMain = $(data).find('.modal-main');
    //                 $(".modal-show-product").html(dataMain);
    //                 PRODUCT.buildSliderModal();
    //             },
    //             type: 'GET'
    //         });
    //         $('.modal-show-product').on('click', '.modal-main', function (event) {
    //             event.stopPropagation();
    //         });
    //         $('.modal-show-product').addClass('modal-show-product-active');
    //     });
    // },

    // closeModalProduct() {
    //     document.querySelector('.modal-show-product').addEventListener('click', function () {
    //         this.classList.remove('modal-show-product-active');
    //     });
    //
    //     $('.close-modal-product').click(function () {
    //         document.querySelector('.modal-show-product').classList.remove('modal-show-product-active');
    //     });
    // },

    toggleCheckBoxSidebar() {
        $('.fake-checkbox').click(function () {
           $(this).toggleClass('fake-checkbox-active');
        });
        $('.fake-checkbox + label').click(function () {
            $(this).parent('li').find('.fake-checkbox').toggleClass('fake-checkbox-active');
        });
    },

    openAndCloseDropDownMenuMobile() {
        // Menu filter side bar
        var buttonOpenContentMainLeft = document.querySelector('.open-main-left-mobile');
        buttonOpenContentMainLeft.addEventListener('click', function () {
            this.classList.toggle('open-main-left-mobile-active');
            document.querySelector('.content_main-left').classList.toggle('content_main-left-active');
        })
    },
}

$(window).on('load', function () {
    LISTING.init();
});