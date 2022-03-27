import HEADER from "../../components/header";
import BACK_TO_TOP from "../../components/backtotop";
import '@zeitiger/elevatezoom';

const DETAIL = {
    init() {
        HEADER.init();
        BACK_TO_TOP.init();

        this.zoomImage();
        this.buildSlider();
        this.clickThumnailImage();
    },

    zoomImage() {
        if (window.screen.width > 992) {
            $(".big-pic-active").elevateZoom({
                zoomWindowWidth: 250,
                zoomWindowHeight: 250
            });
        }
    },

    clickThumnailImage() {
        var bigPics = document.querySelectorAll(".big-pic img");
        var thumbnails = document.querySelectorAll(
            ".thumbnail img"
        );
        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[i].index = i;
            thumbnails[i].addEventListener("click", function() {
                for (var i = 0; i < thumbnails.length; i++) {
                    thumbnails[i].classList.remove(
                        "thumbnail-active"
                    );
                    bigPics[i].classList.remove("big-pic-active");
                }
                bigPics[this.index].classList.add("big-pic-active");
                if (window.screen.width > 992) {
                    $(".big-pic-active").elevateZoom({
                        zoomWindowWidth: 250,
                        zoomWindowHeight: 250
                    });
                }
                this.classList.add("thumbnail-active");
            });
        }
    },
    buildSlider() {
        var newProductList = new Swiper(".relate-product_list", {
            slidesPerView: 2,
            spaceBetween: 10,
            slidesPerGroup: 2,
            navigation: {
                nextEl: ".relate-product_slide-next",
                prevEl: ".relate-product_slide-prev"
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },

                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        });
    }
}

$(window).on('load', function () {
    DETAIL.init();
});