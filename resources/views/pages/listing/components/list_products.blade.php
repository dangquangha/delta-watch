<div class="content_main-right col-xl-9 col-lg-9">
    <div class="ads row mb-3">
        <div class="col-xl-6 col-lg-6 col-sm-6">
            <img src="{{ asset('images/banners/banner_product_1.jpg') }}" alt="" width="100%">
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-6">
            <img src="{{ asset('images/banners/banner_product_2.jpg') }}" alt="" width="100%">
        </div>
    </div>

    <div class="sort row justify-content-between">
        <div class="col-xl-8 col-lg-8 col-sm-8 col-12">
            <h4 style="font-weight: normal;">Tất cả sản phẩm</h4>
        </div>
        <div class="col-xl-4 col-lg-4 col-sm-4 col-12">
            <div class="d-flex justify-content-end align-items-baseline">
                <p>Sắp xếp:</p>
                <div class="current-sort-option">
                    Thứ tự
                    <i class="fa fa-angle-down ml-2"></i>
                    <ul>
                        <li>
                            <input type="radio" name="sort-option" id="sort-default">
                            <a for="sort-default">Mặc định</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-AZ">
                            <a for="sort-AZ">A → Z</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-ZA">
                            <a for="sort-ZA">Z → A</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-priceUp">
                            <a for="sort-priceUp">Giá tăng dần</a>
                        </li>
                        <li>
                            <input type="radio" name="sort-option" id="sort-priceDown">
                            <a for="sort-priceDown">Giá giảm dần</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="list-product">
        @foreach ($products as $product)
            <div class="product_item">
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
                    <a href="{{ route('get.slug', [$product->po_slug]) }}"
                       class="item_info_name">{{ $product->po_name }}</a>
                    <p class="item_info_price">{{ number_format($product->po_price, 0, '', '.') . 'đ' }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination">
        <div class="pagination-prev">
            <i class="fa fa-angle-left"></i>
        </div>
        <div class="page page-active">
            1
        </div>
        <div class="page">
            2
        </div>
        <div class="pagination-next">
            <i class="fa fa-angle-right"></i>
        </div>
    </div>
</div>
