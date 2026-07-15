@extends('UserPage.layouts.app')

@section('title', 'Tìm kiếm')

@section('content')
    <section class="cart-page">

        <div class="cart-title">
            <h2>GIỎ HÀNG CỦA BẠN</h2>
        </div>

        <div class="cart-table">

            <div class="cart-header">

                <div>Ảnh</div>
                <div>Mã SP</div>
                <div>Tên sản phẩm</div>
                <div>Số lượng</div>
                <div>Đơn giá</div>
                <div>Thành tiền</div>
                <div>Xóa</div>

            </div>

            <!-- Item -->

            <div class="cart-item">

                <div>
                    <img src="images/product.jpg">
                </div>

                <div>G1-HN2430</div>

                <div>
                    Máy hàn nhiệt ống nhựa G1-HN2430
                </div>

                <div>

                    <div class="qty">

                        <button>-</button>

                        <input type="number" value="1">

                        <button>+</button>

                    </div>

                </div>

                <div>200.000đ</div>

                <div class="price">
                    200.000đ
                </div>

                <div>
                    <button class="delete">🗑</button>
                </div>

            </div>

        </div>


        <div class="cart-total">

            <div class="line">
                <span>Tạm tính</span>
                <b>200.000đ</b>
            </div>

            <div class="line">
                <span>Phí vận chuyển</span>
                <b>Miễn phí</b>
            </div>

            <div class="line total">
                <span>Tổng cộng</span>
                <b>200.000đ</b>
            </div>

            <div class="cart-btn">

                <a href="/" class="back">
                    Tiếp tục mua
                </a>

                <button class="checkout">
                    Thanh toán
                </button>

            </div>

        </div>

    </section>

@endsection
