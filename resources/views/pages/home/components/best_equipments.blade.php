<div class="best-equipment">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Sản phẩm nổi bật</span>
                <span class="mini">  Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập </span>
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper-container best-equipment_list">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 10; $i++)
                        <div class="swiper-slide best-equipment_item">
                            <div class="item_image">
                                <img src="{{ asset('images/products/product1.jpg') }}" width="100%" alt="">
                                <div class="item_image_mask">
                                    <div class="animation3d">
                                        <div>
                                            <i class="fas fa-search-plus"></i>
                                        </div>
                                        <div class="js-add-to-cart" data-item="{{ $i }}" data-route="">
                                            <i class="fas fa-shopping-basket iconcart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_info">
                                <a href="" class="item_info_name">Samsung Gear Fit </a>
                                <p class="item_info_price">{{ number_format(4900000, 0, '', '.') . 'đ' }}</p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-next best-equipment_slide-next">
                    <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                </div>
                <div class="swiper-button-prev best-equipment_slide-prev">
                    <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
