@extends('UserPage.layouts.app')

@section('title', 'product detail')

@section('content')
    <section class="product-detail">
        <input type="hidden" id="productId" value="{{$product['id']}}">

        <input type="hidden" id="sku" value="{{$product['sku']}}">
        <div class="container">

            <div class="product-wrapper">

                <!-- LEFT -->
                <div class="product-gallery">
                    <div class="main-image">
                        <img id="mainImage" src="">
                    </div>

                    <div class="thumb-list"></div>

                </div>

                <!-- CENTER -->

                <div class="product-info">

                    <h1 id="productName">
                        {{$product['name']}}
                    </h1>

                    <div class="rating">

                        ⭐⭐⭐⭐⭐

                        <span>Đã bán 8666</span>

                    </div>


                    <div class="variant">

                        <button class="variant-btn active" data-type="body">
                            Thân máy
                        </button>

{{--                        <button class="variant-btn" data-type="full">--}}
{{--                            Cả bộ--}}
{{--                        </button>--}}

                    </div>

                    <div class="price">

                        <div class="old-price"></div>

                        <div class="new-price" id="unitPrice"></div>

                    </div>
                    <div class="quantity-wrapper">
                        <span class="label">Số lượng</span>

                        <div class="quantity-box">
                            <button type="button" class="qty-btn" id="minus">-</button>

                            <input type="number"
                                   id="quantity"
                                   value="1"
                                   min="1"
                                   readonly>

                            <button type="button" class="qty-btn" id="plus">+</button>
                        </div>
                    </div>

                    <h3 class="totalPrice">
                        Thành tiền:
                        <span id="totalPrice"></span>
                    </h3>


                    <div style="display: flex; gap: 10px">
                        <button class=" buy-now add-card" id="btnAddCart">

                            Thêm Giỏ Hàng

                        </button>
                        <button class="buy-now checkout-detail" id="checkout">

                            MUA NGAY

                            <small>Miễn phí vận chuyển</small>

                        </button>
                    </div>




                    <div class="policy">

                        <div class="policy-item">

                            🚚

                            <div>

                                <b>Miễn phí vận chuyển</b>

                                <p>Kiểm tra hàng trước khi thanh toán</p>

                            </div>

                        </div>


                        <div class="policy-item">

                            🛡

                            <div>

                                <b>Chính hãng 100%</b>

                                <p>Bảo hành 6 tháng</p>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('UserPage.layouts.modal')
        @include('UserPage.layouts.orderModal')
    </section>

    <script>
        window.product = @json($product);
    </script>


@endsection
@push('scripts')
    @vite([
        'resources/js/UserPage/thumb.js',
        'resources/js/UserPage/modal.js',
        ])
@endpush
