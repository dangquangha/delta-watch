const HEADER_PC = {
    init() {
        this.increaseQuantityProductInCart();
        this.decreaseQuantityProductInCart();
    },

    increaseQuantityProductInCart() {
        $('.header').on('click', '.cart_item .btn-increase', function () {
            let $this = $(this);
            let item = $this.parents('.cart_item_info');
            let itemId = item.data('id');
            let itemPrice = item.data('price');
            let itemQuantity = item.find('.quantity' + itemId).val();
            if (parseInt(itemQuantity) < 100) {
                let newQuantity = parseInt(itemQuantity) + 1;
                item.find('.quantity' + itemId).val(newQuantity);
            }
        })
    },

    decreaseQuantityProductInCart() {
        $('.header').on('click', '.cart_item .btn-decrease', function () {
            let $this = $(this);
            let item = $this.parents('.cart_item_info');
            let itemId = item.data('id');
            let itemPrice = item.data('price');
            let itemQuantity = item.find('.quantity' + itemId).val();

            if (parseInt(itemQuantity) > 1) {
                let newQuantity = parseInt(itemQuantity) - 1;
                item.find('.quantity' + itemId).val(newQuantity);
            }
        })
    }
}

export default HEADER_PC;