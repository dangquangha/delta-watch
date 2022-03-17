<div class="product-by-brand">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Sản phẩm theo hãng</span>
                <span class="mini"> Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
        <div class="list-brand row">
            @foreach ($brands as $key => $brand)
                <div class="brand_item {{ $key == 0 ? 'active' : '' }}" data-route="{{ route('get.products-by-brand', $brand->br_slug) }}">
                    <div class="brand_item_image">
                        <img src="{{ asset('storage/' . $brand->br_logo) }}" alt="" class="animation3d">
                    </div>
                    <div class="brand_item_name">
                        <p>{{ $brand->br_name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="list-product-by-brand row" id="list-product-by-brand">

        </div>
    </div>
</div>
