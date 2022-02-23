<div class="new-product">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Hàng mới về</span>
                <span class="mini"> Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
    </div>
    <div class="swiper-container new-product_list">
        <div class="swiper-wrapper">
            @for ($i=1; $i<=10; $i++)
                <div class="swiper-slide new-product_item">
                    <div class="item_image">
                        <img src="{{ asset('images/products/product1.jpg') }}" width="90%" alt="">
                        <div class="item_image_mask">
                            <div class="animation3d">
                                <div>
                                    <i data-route="#" class="fas fa-search-plus"></i>
                                </div>
                                <div class="js-add-to-cart" data-item="{{ $i }}" data-route="">
                                    <i class="fas fa-shopping-basket iconcart"></i>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/icons/options.png') }}" alt="" class="item_image_option">
                    </div>
                    <div class="item_info">
                        <a href="#"
                           class="item_info_name">Samsung Gear Fit</a>
                        <p class="item_info_price">{{ number_format(4900000, 0, '', '.') . 'đ' }}</p>
                    </div>
                </div>
            @endfor
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next new-product_slide-next">
            <img src="{{ asset('images/icons/arrow.png') }}" alt="">
        </div>
        <div class="swiper-button-prev new-product_slide-prev">
            <img src="{{ asset('images/icons/arrow.png') }}" alt="">
        </div>
    </div>
</div>
