<div class="best-brand">
    <div class="container">
        <div class="row">
            <h2 class="title">
                <span class="big">Thương hiệu nổi bật</span>
                <span class="mini">
                                Bộ sưu tập những thương hiệu nổi tiếng về smartwatch trên thế giới
                            </span>
            </h2>
            <div class="list-brand">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="item-brand">
                        <a href="">
                            <img src="{{ asset('images/logos/brands/brand'. $i .'.jpg') }}" alt="" width="100%">
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
