<!-- resources/views/home.blade.php -->
@extends('UserPage.layouts.app')

@section('title', 'Tìm kiếm')

@section('content')
    <section class="search-page">

        <div class="search-container">

            <!-- LEFT -->
            <div class="search-content">

                <div class="search-toolbar">

                    <div class="category-title">
                        Dụng cụ cơ khí, bình nén khí, máy xoa vữa, máy bơm hơi...
                    </div>

                    <select class="sort-select">
                        <option>Sắp xếp theo mức độ phổ biến</option>
                        <option>Mới nhất</option>
                        <option>Giá tăng dần</option>
                        <option>Giá giảm dần</option>
                    </select>

                </div>

                <div class="product-grid">

                    @for($i = 1; $i <= 10; $i++)
                        <div class="product-card">

                            <div class="product-image">

                                <img src="{{ asset('image/a.webp') }}">

                                <span class="discount">-38%</span>

                                <button class="quick-view-btn">
                                    XEM NHANH
                                </button>

                            </div>

                            <div class="product-name">
                                Máy hút bụi công nghiệp Workfix WF-HBCN15L...
                            </div>

                            <div class="price">
                                <span class="old-price">1.690.000đ</span>
                                <span class="new-price">1.260.100đ</span>
                            </div>

                        </div>

                        <div class="quick-modal" id="quickModal">

                            <div class="modal-content">

                                <span class="close-modal">&times;</span>

                                <div class="modal-left">

                                    <img id="modalImage" style="width: 350px; height: 350px"
                                         src="{{ asset('image/a.webp') }}">

                                </div>

                                <div class="modal-right">

                                    <h2 id="modalTitle">
                                        Máy Bơm Chìm Chạy Pin Bossun BS-BCP03BL – 80L/phút – Cột áp cao 5-8m
                                    </h2>

                                    <div class="product-option">
                                        <button class="option-btn active">Thân máy</button>
                                        <button class="option-btn">Bộ 1 Pin</button>
                                    </div>

                                    <div class="product-price">
                                        <span class="old-price">1.650.000đ</span>
                                        <span class="new-price">1.040.500đ</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endfor

                </div>

            </div>

            <!-- RIGHT -->

            <aside class="filter-sidebar">

                <div class="filter-header">
                    Bộ lọc
                </div>

                <div class="filter-group">

                    <h4>MỨC GIÁ</h4>

                    <label><input type="radio"> 0đ - 500.000đ</label>

                    <label><input type="radio"> 500.000đ - 1.000.000đ</label>

                    <label><input type="radio"> 1.000.000đ - 2.000.000đ</label>

                    <label><input type="radio"> 2.000.000đ - ∞</label>

                </div>

                <div class="filter-group">

                    <h4>THƯƠNG HIỆU</h4>

                    <label><input type="checkbox"> Bossun</label>

                    <label><input type="checkbox"> Workfix</label>

                </div>

                <div class="filter-group">

                    <h4>SẢN PHẨM DUNG LƯỢNG PIN</h4>

                    <label><input type="checkbox"> 2.0Ah</label>

                    <label><input type="checkbox"> 4.0Ah</label>

                    <label><input type="checkbox"> 6.0Ah</label>

                    <label><input type="checkbox"> 8.0Ah</label>

                </div>

            </aside>

        </div>


    </section>

{{--    <section class="product-section">--}}

{{--        <div class="section-header">--}}
{{--            <div class="section-title">--}}
{{--                MÁY HÚT THỔI BỤI--}}
{{--            </div>--}}

{{--            <a href="#" class="view-all-top">--}}
{{--                >>Xem tất cả--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="product-grid">--}}

{{--            @for($i = 1; $i <= 10; $i++)--}}
{{--                <div class="product-card">--}}

{{--                    <div class="product-image">--}}

{{--                        <img src="{{ asset('image/a.webp') }}">--}}

{{--                        <span class="discount">-38%</span>--}}

{{--                        <button class="quick-view-btn">--}}
{{--                            XEM NHANH--}}
{{--                        </button>--}}

{{--                    </div>--}}

{{--                    <div class="product-name">--}}
{{--                        Máy hút bụi công nghiệp Workfix WF-HBCN15L...--}}
{{--                    </div>--}}

{{--                    <div class="price">--}}
{{--                        <span class="old-price">1.690.000đ</span>--}}
{{--                        <span class="new-price">1.260.100đ</span>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="quick-modal" id="quickModal">--}}

{{--                    <div class="modal-content">--}}

{{--                        <span class="close-modal">&times;</span>--}}

{{--                        <div class="modal-left">--}}

{{--                            <img id="modalImage" style="width: 350px; height: 350px"--}}
{{--                                 src="{{ asset('image/a.webp') }}">--}}

{{--                        </div>--}}

{{--                        <div class="modal-right">--}}

{{--                            <h2 id="modalTitle">--}}
{{--                                Máy Bơm Chìm Chạy Pin Bossun BS-BCP03BL – 80L/phút – Cột áp cao 5-8m--}}
{{--                            </h2>--}}

{{--                            <div class="product-option">--}}
{{--                                <button class="option-btn active">Thân máy</button>--}}
{{--                                <button class="option-btn">Bộ 1 Pin</button>--}}
{{--                            </div>--}}

{{--                            <div class="product-price">--}}
{{--                                <span class="old-price">1.650.000đ</span>--}}
{{--                                <span class="new-price">1.040.500đ</span>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            @endfor--}}

{{--        </div>--}}

{{--        <div class="section-footer">--}}
{{--            <a href="#" class="view-all-btn">--}}
{{--                Xem tất cả Máy Hút - Thổi Bụi--}}
{{--            </a>--}}
{{--        </div>--}}

{{--    </section>--}}
@endsection
