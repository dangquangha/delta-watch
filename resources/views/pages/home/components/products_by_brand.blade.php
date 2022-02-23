<div class="product-by-brand">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Sản phẩm theo hãng</span>
                <span class="mini"> Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
        <div class="list-brand row">
            @for ($i=1; $i<=5; $i++)
                <div class="brand_item {{ $i == 1 ? 'active' : '' }}" data-route="#">
                    <div class="brand_item_image">
                        <img src="{{ asset('images/products/brands/brand' . $i . '.png') }}" alt="" class="animation3d">
                    </div>
                    <div class="brand_item_name">
                        <p>Apple</p>
                    </div>
                </div>
            @endfor
        </div>
        <div class="list-product-by-brand row" >
            @for ($i=1; $i<=10; $i++)
                <div class="new-product_item">
                    <div class="item_image">
                        <img src="{{ asset('images/products/product1.jpg') }}" width="90%" alt="">
                        <div class="item_image_mask">
                            <div class="animation3d">
                                <div>
                                    <i class="fas fa-search-plus" data-route=""></i>
                                </div>
                                <div class="js-add-to-cart" data-item="{{ $i }}" data-route="">
                                    <i class="fas fa-shopping-basket iconcart"></i>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
                    </div>
                    <div class="item_info">
                        <a href="#" class="item_info_name">Samsung Gear Fit</a>
                        <p class="item_info_price">{{ number_format(4900000, 0, '', '.') . 'đ' }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
