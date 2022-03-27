@foreach ($products as $product)
    <div class="new-product_item">
        <div class="item_image">
            <img src="{{ asset('storage/' . $product->po_image) }}" width="90%" alt="">
            <div class="item_image_mask">
                <div class="animation3d">
                    <div class="js-show-modal-product" data-route="{{ route('post.product.show-modal', $product->id) }}">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <div class="js-add-to-cart" data-route="{{ route('post.cart.add', $product->id) }}">
                        <i class="fas fa-shopping-basket iconcart"></i>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
        </div>
        <div class="item_info">
            <a href="{{ route('get.slug', [$product->po_slug]) }}" class="item_info_name">
                {{ $product->po_name }}
            </a>
            <p class="item_info_price">{{ number_format($product->po_price, 0, '', '.') . 'đ' }}</p>
        </div>
    </div>
@endforeach