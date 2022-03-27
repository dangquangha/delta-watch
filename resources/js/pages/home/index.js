import HEADER from "../../components/header";
import CART from "../../components/cart";
import BACK_TO_TOP from "../../components/backtotop";
import SHOW_MODAL_PRODUCT from "../../components/show_modal_product";

const HOME = {
    init() {
        HEADER.init();
        CART.init();
        BACK_TO_TOP.init();
        SHOW_MODAL_PRODUCT.init();

        this.buildSlideNewProducts();
        this.buildSlideProductsForMan();
        this.buildSlideProductsForWoman();
        this.buildSlideBestEquipments();
        this.loadProductByBrand();
    },

    buildSlideNewProducts() {
        var newProductList = new Swiper('.new-product_list', {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.new-product_slide-next',
                prevEl: '.new-product_slide-prev',
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },

                1365: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
            }

        });
    },

    buildSlideProductsForMan() {
        var watchForMan = new Swiper('.watch-for-man_list', {
            slidesPerView: 2,
            spaceBetween: 0,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.watch-for-man_slide-next',
                prevEl: '.watch-for-man_slide-prev',
            },

            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
            }
        });
    },

    buildSlideProductsForWoman() {
        var watchForWoman = new Swiper('.watch-for-woman_list', {
            slidesPerView: 2,
            spaceBetween: 0,
            slidesPerGroup: 2,
            navigation: {
                nextEl: '.watch-for-woman_slide-next',
                prevEl: '.watch-for-woman_slide-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
            }
        });
    },

    buildSlideBestEquipments() {
        var bestEquipment = new Swiper('.best-equipment_list', {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 5,
            navigation: {
                nextEl: '.best-equipment_slide-next',
                prevEl: '.best-equipment_slide-prev',
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0,
                },
            }
        });
    },

    loadProductByBrand() {
        var url = $('.brand_item.active').data('route');
        $.ajax({
            url: url,
            success: function(view) {
                var el = $('#list-product-by-brand');
                el.html()
                el.html(view);
            }
        });

        $('.brand_item').click(function () {
            $('.brand_item.active').removeClass('active');
            $(this).addClass('active');
            var url = $(this).data('route');
            $.ajax({
                url: url,
                success: function(view) {
                    var el = $('#list-product-by-brand');
                    el.html()
                    el.html(view);
                }
            });
        })
    },
}

$(window).on('load', function () {
    HOME.init();
});