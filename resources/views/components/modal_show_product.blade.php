<!-- MODAL -->
<div class="modal-show-product" id="modal-show-product">
    <div class="modal-main row">
        <div class="modal_big-pic">
            <img src="{{ asset('storage/' . $product->po_image) }}" alt="" width="100%">
        </div>
        <div class="modal_thumbnail swiper-container">
            <div class="swiper-wrapper">
                @foreach ($relatedProducts as $relateProduct)
                    <div class="swiper-slide modal_thumbnail_item">
                        <img src="{{ asset('storage/' . $relateProduct->po_image) }}" alt="" width="100%">
                    </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next modal_thumbnail_slide-next">
                <img src="{{ asset('images/icons/arrow.png') }}" alt="">
            </div>
            <div class="swiper-button-prev modal_thumbnail_slide-prev">
                <img src="{{ asset('images/icons/arrow.png') }}" alt="">
            </div>
        </div>
        <div class="modal_option">
            <form method="post">
                <h1 class="title-product">{{ $product->po_name }}</h1>
                <p class="price-product">{{ number_format($product->po_price, 0, '', '.') . 'đ' }}</p>
                <div class="option-quantity">
                    <div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-basket"></i> Thêm vào giỏ hàng
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <i class="close-modal-product fa fa-times"></i>
    </div>
</div>
