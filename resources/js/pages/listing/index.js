import HEADER from "../../components/header";
import CART from "../../components/cart";
import BACK_TO_TOP from "../../components/backtotop";

const LISTING = {
    init() {
        HEADER.init();
        CART.init();
        BACK_TO_TOP.init();

        this.toggleCheckBoxSidebar();
        this.openAndCloseDropDownMenuMobile();
    },

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