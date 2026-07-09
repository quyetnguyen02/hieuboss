<!-- resources/views/home.blade.php -->
@extends('UserPage.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <!-- Main content + Sidebar -->
    <div class="main-wrapper" style="padding: 20px">
        @include('UserPage.layouts.banner')
    </div>

    <section class="product-section">

        <div class="section-header">
            <div class="section-title">
                MÁY HÚT THỔI BỤI
            </div>

            <a href="#" class="view-all-top">
                >>Xem tất cả
            </a>
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

        <div class="section-footer">
            <a href="#" class="view-all-btn">
                Xem tất cả Máy Hút - Thổi Bụi
            </a>
        </div>

    </section>
    <section class="product-section">

        <div class="section-header">
            <div class="section-title">
                MÁY HÚT THỔI BỤI
            </div>

            <a href="#" class="view-all-top">
                >>Xem tất cả
            </a>
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

        <div class="section-footer">
            <a href="#" class="view-all-btn">
                Xem tất cả Máy Hút - Thổi Bụi
            </a>
        </div>

    </section>
    <section class="product-section">

        <div class="section-header">
            <div class="section-title">
                MÁY HÚT THỔI BỤI
            </div>

            <a href="#" class="view-all-top">
                >>Xem tất cả
            </a>
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

        <div class="section-footer">
            <a href="#" class="view-all-btn">
                Xem tất cả Máy Hút - Thổi Bụi
            </a>
        </div>

    </section>
    <section class="product-section">

        <div class="section-header">
            <div class="section-title">
                MÁY HÚT THỔI BỤI
            </div>

            <a href="#" class="view-all-top">
                >>Xem tất cả
            </a>
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

        <div class="section-footer">
            <a href="#" class="view-all-btn">
                Xem tất cả Máy Hút - Thổi Bụi
            </a>
        </div>

    </section>


@endsection
