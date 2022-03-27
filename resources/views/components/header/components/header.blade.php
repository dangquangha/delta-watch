<div class="header">
    <div class="container">
        <div class="row justify-content-between">
            <div class="header_contact">
                <div class="account">
                    <span><i class="far fa-user-circle"></i>&nbsp; {{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->name : 'Tài khoản' }}</span>
                    <ul class="header_sub-menu">
                        @if (!Auth::guard('customer')->check())
                            <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('get.register') }}">Đăng ký</a></li>
                        @else
                            <li><a href="{{ route('get.logout') }}">Đăng xuất</a></li>
                        @endif
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
                    <li id="cart">
                        @include('components.cart')
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
