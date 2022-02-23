<div class="watch-for-man">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Đồng hồ cho nam</span>
                <span class="mini">
                    Những sản phẩm mới nhất, thông minh nhất đã được Delta Watch cập nhật vào bộ sưu tập
                </span>
            </h2>
        </div>
        <div class="row mt-4">
            <div class="col-xl-8 col-lg-8 col-sm-12 pl-0 pr-0">
                <div class="swiper-container watch-for-man_list">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="swiper-slide watch-for-man_item">
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
                    <div class="swiper-button-next watch-for-man_slide-next">
                        <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                    </div>
                    <div class="swiper-button-prev watch-for-man_slide-prev">
                        <img src="{{ asset('images/icons/arrow.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 pl-0 pr-0" style="overflow: hidden;">
                <img src="{{ asset('images/banners/products_for_man.jpg') }}" alt="" class="watch-for-man_banner">
            </div>
        </div>
    </div>
</div>
