<div class="open-main-left-mobile" style="display: none;">
    <i class="fa fa-align-right"></i>
</div>

<div class="content_main-left col-xl-3 col-lg-3 col-sm-4">
    <div class="list-category">
        <div class="title">
            Danh mục sản phẩm
        </div>
        <ul class="">
            <li class="menu-item">
                <a href="{{ route('get.home') }}">Trang chủ</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('get.product') }}">Sản phẩm</a>
            </li>
            <li class="menu-item">
                <a href="#">Tin tức</a>
            </li>
            <li class="menu-item">
                <a href="#">Về chúng tôi</a>
            </li>
            <li class="menu-item">
                <a href="#">Địa chỉ cửa hàng</a>
            </li>
        </ul>
    </div>

    <div class="filter-brand">
        <div class="title">
            Thương hiệu
        </div>
        <ul>
            <input type="hidden" name="brand_id">
            @for($i=1; $i <= 5; $i++)
                <li>
                    <div class="fake-checkbox"></div>
                    <label class="brand-name" data-id="{{ $i }}">
                        {{ 'Brand ' . $i }}
                    </label>
                </li>
            @endfor
        </ul>
    </div>

    <div class="filter-color">
        <div class="title">
            Màu sắc
        </div>
        <ul>
            <li>
                <div class="filter-color-yeallow" style="background-color: #F1C40F;"></div>
            </li>

            <li>
                <div class="filter-color-purple" style="background-color: #9B59B6;"></div>
            </li>

            <li>
                <div class="filter-color-red" style="background-color: #E74C3C;"></div>
            </li>

            <li>
                <div class="filter-color-green" style="background-color: #2ECC71;"></div>
            </li>

            <li>
                <div class="filter-color-pink" style="background-color: #FF00CC;"></div>
            </li>

            <li>
                <div class="filter-color-orange" style="background-color: #E67E22;"></div>
            </li>
        </ul>
    </div>

    <div class="filter-size">
        <div class="title">
            Kích thước
        </div>
        <ul>
            @for($i=1; $i <= 5; $i++)
                <li>
                    <div class="fake-checkbox"></div>
                    <label class="" data-id="{{ $i }}">
                        {{ 'Size ' . $i }}
                    </label>
                </li>
            @endfor
        </ul>
    </div>

    <div class="filter-price">
        <div class="title">
            Giá sản phẩm
        </div>
        <ul>
            @for($i=1; $i <= 5; $i++)
                <li>
                    <div class="fake-checkbox"></div>
                    <label class="" data-id="{{ $i }}">
                        {{ 'Price ' . $i }}
                    </label>
                </li>
            @endfor
        </ul>
    </div>
</div>