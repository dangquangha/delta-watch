const CART = {
    init() {
        this.addToCart();
        this.removeFromCart();
    },

    addToCart() {
        $('.content').on('click', '.js-add-to-cart', function () {
            var url = $(this).data('route');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'POST',
                success: function(res) {
                    alert('Thêm vào giỏ hàng thành công!');
                    $('#cart').html(res);
                }
            });
        })
    },

    removeFromCart() {
        $('.header').on('click', '.js-delete-from-cart', function () {
            let url = $(this).data('route');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'POST',
                dataType: 'html',
            }).done(function(res) {
                alert('Đã xóa khỏi giỏ hàng!');
                $('#cart').html(res);
            });
        })
    }
}

export default CART