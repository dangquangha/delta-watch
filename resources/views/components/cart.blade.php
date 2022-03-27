<span><i class="fas fa-shopping-basket"></i> {{ "Giỏ hàng (" . count($cart ?? []) . ")" }}</span>
@if ( !empty($cart) )
<ul class="cart header_sub-menu">
    @foreach ($cart as $key => $product)
        <li class="cart_item">
            <div class="cart_item_image">
                <img src="{{ asset('storage/' . $product['image']) }}" alt="" width="100%">
            </div>
            <div class="cart_item_info" data-id="{{ $key }}" data-price="{{ $product['price'] }}">
                <a href="{{ route('get.slug', [$product['slug']]) }}" class="name">{{ $product['name'] }}</a>
                <p class="price {{ "price" . $key }}">{{ number_format($product['price'], 0, '', '.') . 'đ' }}</p>
                <div class="quantity">
                    <button type="button" class="btn-increase"> + </button>
                    <input type="number" value="{{ $product['quantity'] }}" class="{{ "quantity" . $key }}" readonly>
                    <button type="button" class="btn-decrease"> - </button>
                </div>
            </div>
            <i class="fas fa-times js-delete-from-cart" data-route="{{ route('post.cart.remove', $key) }}"></i>
        </li>
    @endforeach
    <a href="{{ route('get.cart') }}">
        <i class="fas fa-shopping-basket"></i>Tới giỏ hàng và thanh toán
    </a>
</ul>
@endif
