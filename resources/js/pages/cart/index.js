import HEADER from "../../components/header";
import BACK_TO_TOP from "../../components/backtotop";

const PAGE_CART = {
    init() {
        HEADER.init();
        BACK_TO_TOP.init();

        this.updateCart();
        this.deleteProductFromCart();
    },

    updateCart()
    {
        $('.item_quantity').on('click', '.more-product', function () {
            let id = $(this).data('item');
            let route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'GET',
                dataType: 'html',
                data: {
                    id: id,
                }
            })
            var price = $(this).parents('.cart_item').data('price');
            var old_quantity = $(this).parents('.quantity').find('.product-quantity').val();
            $(this).parents('.quantity').find('.product-quantity').val( parseInt(old_quantity) + 1);
            var total_money = price * (parseInt(old_quantity) + 1);
            $(this).parents('.cart_item').find('.item_total-price > .price').text( Intl.NumberFormat('de-DE').format(total_money) );
            CART.updateTotalMoneyCart();
        });

        $('.item_quantity').on('click', '.reduce-product', function () {
            let id = $(this).data('item');
            let route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'GET',
                dataType: 'html',
                data: {
                    id: id,
                }
            })
            var price = $(this).parents('.cart_item').data('price');
            var old_quantity = $(this).parents('.quantity').find('.product-quantity').val();
            if (old_quantity == 1) {
                $(this).parents('.cart_item').remove();
            } else {
                $(this).parents('.quantity').find('.product-quantity').val( parseInt(old_quantity) - 1);
                var total_money = price * (parseInt(old_quantity) - 1);
                $(this).parents('.cart_item').find('.item_total-price > .price').text( Intl.NumberFormat('de-DE').format(total_money) );
            }
            CART.updateTotalMoneyCart();
        });
    },

    updateTotalMoneyCart()
    {
        var totalMoney = 0;
        $('.cart_list .cart_item').each(function () {
            console.log( parseInt( $(this).data('price') ) );
            totalMoney+= parseInt( $(this).data('price') ) * parseInt( $(this).find('.product-quantity').val() );
        });
        $('#total-money-cart').text(Intl.NumberFormat('de-DE').format(totalMoney))
    },

    deleteProductFromCart()
    {
        $('.cart_item').on('click', '.item_cancel', function () {
            $(this).parents('.cart_item').remove();
            CART.updateTotalMoneyCart();
            let route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'GET',
                dataType: 'html',
            });
        })
    },

};

$(window).on("load", function() {
    PAGE_CART.init();
});
