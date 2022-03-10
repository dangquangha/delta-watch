<div class="content_info container">
    <div class="row">
        <ul class="content_info_option">
            <li class="active">
                <label for="info_detail"
                       onclick="document.querySelector('.content_info_option li.active').classList.remove('active'); this.parentNode.classList.add('active')">
                    <span>Thông tin chi tiết</span>
                </label>
            </li>
            <li>
                <label for="info_guarantee"
                       onclick="document.querySelector('.content_info_option li.active').classList.remove('active'); this.parentNode.classList.add('active')">
                    <span>Chính sách bảo hành</span>
                </label>
            </li>
        </ul>

        <input type="radio" name="info_option" id="info_detail" checked>
        <div class="show_info_option">
            <p>So với các sản phẩm&nbsp;đồng hồ thông minh&nbsp;khác thì dung lượng pin của Huawei Watch GT2 vượt trội
                hơn rất nhiều.</p>
            <p>Thời lượng pin lên đến&nbsp;<strong>14 ngày</strong>&nbsp;với mục đích sử dụng thông thường như xem giờ,
                theo dõi vận động thì, khi bật GPS định vị liên tục đồng hồ của bạn sẽ sử dụng được trong&nbsp;<strong>30
                    giờ</strong>, còn với việc đàm thoại qua bluetooth, gọi điện liên tục trong&nbsp;<strong>10
                    giờ</strong>.</p>
            <p><img src="{{ asset('images/products/content_info1.jpg') }}" alt="" width="100%"></p>
            <h3>Trả lời cuộc gọi trực tiếp trên đồng hồ</h3>
            <p>Đồng hồ thông minh trang bị loa, micro... nghe nhận cuộc gọi trực tiếp không gần điện thoại, bạn có thể
                vừa chạy bộ vừa nghe điện thoại.</p>
            <p>Nếu kết hợp với&nbsp;điên thoại Huawei&nbsp;thì khả năng kết nối của đồng hồ với&nbsp;điện thoại&nbsp;có
                thể lên đến&nbsp;<strong>150m</strong>.</p>
            <p><img src="{{ asset('images/products/content_info2.jpg') }}" alt="" width="100%"></p>
            <h3>Nghe nhạc bằng loa ngoài</h3>
            <p>Bạn có thể dễ dàng điều khiển âm nhạc như trên một chiếc điện thoại thông thường như tua bài, chọn
                bài.</p>
            <p>Hơn nữa có thể chép nhạc vào đồng hồ và nghe, số lượng bài hát có thể lưu được khoảng&nbsp;<strong>500
                    bài hát</strong>.</p>
            <p><img src="{{ asset('images/products/content_info3.jpg') }}" alt="" width="100%"></p>
        </div>

        <input type="radio" name="info_option" id="info_guarantee">
        <div class="show_info_option">
            <p>Nội dung tùy chỉnh viết ở đây</p>
        </div>
    </div>
</div>
