const SHOW_MODAL_PRODUCT = {
    init() {
        this.showModalProduct();
        this.closeModalProduct();
    },

    buildSliderModal() {
        var swiper = new Swiper('#modal-show-product .modal_thumbnail', {
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

    showModalProduct() {
        $(document).on('click', '.js-show-modal-product', function () {
            var url = $(this).data('route');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'POST',
                success: function (res) {
                    $('#modal-show-product').remove();
                    $('body').append(res);
                    SHOW_MODAL_PRODUCT.buildSliderModal();
                    $('#modal-show-product').addClass('modal-show-product-active');
                },
            });
            $('#modal-show-product').on('click', '.modal-main', function (event) {
                event.stopPropagation();
            });
        });
    },

    closeModalProduct() {
        $(document).on('click', '.close-modal-product', function () {
            $('.modal-show-product').removeClass('modal-show-product-active');
        });
    },
}

export default SHOW_MODAL_PRODUCT