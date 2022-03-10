<div class="header">
    <div class="container">
        <div class="row justify-content-between">

            <div class="header_contact">
                <div class="account">
                    <span><i class="far fa-user-circle"></i>&nbsp;Tài khoản</span>
                    <ul class="header_sub-menu">
                        <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
                        <li><a href="{{ route('get.register') }}">Đăng ký</a></li>
                    </ul>
                </div>
                <div class="call">
                    <a href="#"><i class="fas fa-sms"></i>&nbsp;Chat</a>
                    <span>or</span>
                    <a class="fone" href="#">Call 0388287614</a>
                </div>
            </div>

            <div class="header_logo">
                <a href="#">
                    <img src="{{ asset('images/logos/logo.png') }}" alt="" width="100%">
                </a>
            </div>

            <div class="header_search">
                <ul>
                    <li>
                        <form>
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <span style="font-weight: normal; color: #ebebeb; font-size: 18px; margin-top: -5px;">|</span>
                    <li>
                        <span><i class="fas fa-shopping-basket"></i> Giỏ hàng (0)</span>
                        <ul class="cart header_sub-menu">
                            @for ($i=1; $i <= 3; $i++)
                                <li class="cart_item">
                                    <div class="cart_item_image">
                                        <img src="{{ asset('images/products/product1.jpg') }}" alt="" width="100%">
                                    </div>
                                    <div class="cart_item_info" data-id="{{$i}}" data-price="4500000">
                                        <a href="#" class="name">Samsung Gear Pro</a>
                                        <p class="price {{ "price" . $i }}">4.500.000₫</p>
                                        <div class="quantity">
                                            <button type="button" class="btn-increase"> + </button>
                                            <input type="number" value="1" class="{{ "quantity" . $i }}">
                                            <button type="button" class="btn-decrease"> - </button>
                                        </div>
                                    </div>
                                    <i class="fas fa-times"></i>
                                </li>
                            @endfor
                            <a href="#">
                                <i class="fas fa-shopping-basket"></i>Tới giỏ hàng và thanh toán
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
