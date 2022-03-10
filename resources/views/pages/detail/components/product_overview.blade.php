<div class="content_main container">
    <div class="row justify-content-between">
        <div class="content_main-left col-xl-5 col-lg-5 col-sm-12">
            <div class="row">
                <div class="big-pic">
                    <img class="big-pic-active" src="{{ asset('images/products/product1.jpg') }}" alt="" width="100%">
                    @for ($i=1; $i <= 3; $i++)
                        <img src="{{ asset('images/products/product1.jpg') }}" alt="" width="100%">
                    @endfor
                </div>
                <div class="thumbnail">
                    <img class="thumbnail-active" src="{{ asset('images/products/product1.jpg') }}" alt="" width="100%">
                    @for ($i=1; $i <= 3; $i++)
                        <img src="{{ asset('images/products/product1.jpg') }}" alt="" width="100%">
                    @endfor
                </div>
            </div>
        </div>
        <div class="content_main-right col-xl-6 col-lg-6 col-sm-12 pr-0">
            <form method="post">
                <h1 class="title-product">Gear Pro Series 5</h1>
                <p class="price-product">@php echo number_format(5000000, 0, '', '.') . 'đ'; @endphp</p>
                <p class="des-product">
                    Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ, Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại
                <div class="option-quantity">
                    <div>
                        <button class="js-add-to-cart add-to-cart" style="margin-left: 0" data-item="" data-route="#" type="button">
                            <i class="fas fa-shopping-basket"></i> Thêm vào giỏ hàng
                        </button>
                        <button class="buy-now">
                            <i class="fas fa-check"></i>
                            Mua ngay
                        </button>
                    </div>
                </div>
                <div class="free-discuss">
                    <h4>
                        <i class="fas fa-paper-plane"></i>&nbsp;Tư vấn miễn phí
                    </h4>
                    <div class="">
                        <input placeholder="Số điện thoại" type="text" class="form-control form-control-lg">
                        <button class="btn">Gửi ngay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
