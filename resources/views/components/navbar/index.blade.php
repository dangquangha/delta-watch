@inject('navbar', 'App\Http\Controllers\NavbarController')

@php
    $categories = $navbar->getCategories();
    $brands = $navbar->getBrands();
@endphp

<div class="nav-bar">
    <div class="container">
        <div class="row justify-content-center">
            <ul class="mb-0">
                <li>
                    <a href="{{ route('get.home') }}">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <a href="{{ route('get.product') }}">
                        Sản phẩm
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="menu-product-drop-down">
                        <div class="container">
                            <div class="row">
                                @foreach($categories as $category)
                                    <div class="col-xl-3 col-lg-3">
                                        <ul class="pl-0">
                                            <h3>
                                                <a href="{{ route('get.slug', $category->cat_slug) }}" title="{{ $category->cat_name }}">
                                                    {{ $category->cat_name }}
                                                </a>
                                            </h3>
                                            @foreach($category->childrens as $child)
                                                <li>
                                                    <i class="fa fa-angle-right"></i>
                                                    <a href="{{ route('get.slug', $child->cat_slug) }}" title="{{ $child->cat_name }}">
                                                        {{ $child->cat_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
                <li style="position: relative;">
                    <a href="#"> Smartwatch <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        @foreach($brands as $brand)
                            <li>
                                <a href="{{ route('get.slug', $brand->br_slug) }}" title="{{ $brand->br_name }}">
                                    {{ $brand->br_name . ' Watch' }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#">Tin tức</a>
                </li>
                <li>
                    <a href="#">Về chúng tôi</a>
                </li>
                <li>
                    <a href="#">Địa chỉ cửa hàng</a>
                </li>
            </ul>
        </div>
    </div>
</div>