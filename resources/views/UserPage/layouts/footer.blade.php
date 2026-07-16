<footer class="footer">

    <div class="footer-top">

        <!-- Công ty -->
        <div class="footer-col">

            <h3>{{$shop->shop_name}}</h3>

            <p>
                <strong>Địa chỉ:</strong>
                {{$shop->address}}
            </p>

            <p>
                <strong>Hotline:</strong>
                {{$shop->hotline}}
            </p>

            <p>
                <strong>Email:</strong>
                {{$shop->email}}
            </p>

        </div>

        <!-- Hỗ trợ -->
        <div class="footer-col footer-2">

            <h3>HỖ TRỢ KHÁCH HÀNG</h3>

            <ul>

                <li><a href="#">Phương Thức Thanh Toán</a></li>

                <li><a href="#">Chính Sách Vận Chuyển</a></li>

                <li><a href="#">Chính Sách Quyền Riêng Tư</a></li>

                <li><a href="#">Chính Sách Bảo Hành</a></li>

                <li><a href="#">Điều Khoản Và Điều Kiện</a></li>

                <li><a href="#">Câu Hỏi Thường Gặp</a></li>

                <li><a href="#">Trung Tâm Trợ Giúp</a></li>

            </ul>

        </div>

        <!-- Fanpage -->
        <div class="footer-col">

            <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>

            <div class="fanpage">
                <div class="fb-page"
                     data-href="{{$shop->fanpage}}"
                     data-width="340"
                     data-height="130"
                     data-hide-cover="false"
                     data-show-facepile="false"></div>
            </div>

            <div class="socials">

                @if($shop->fanpage)
                    <a href="{{$shop->fanpage}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                @endif


                @if($shop->email)
                    <a href="{{'mailto:' . $shop->email}}">
                        <i class="fas fa-envelope"></i>
                    </a>
                @endif

                @if($shop->hotline)
                    <a href="{{'tel:' . $shop->hotline}}">
                        <i class="fas fa-phone"></i>
                    </a>
                @endif


            </div>

        </div>

    </div>

    <div class="footer-bottom">

        <h4>
            © {{date('Y')  . ' ' . $shop->shop_name}}
        </h4>

    </div>

</footer>

<div class="floating-contact">
    <a
        href="{{'https://zalo.me/' . $shop->hotline}}"
        target="_blank"
        class="contact-btn zalo">

        <img src="{{asset('image/logo/zalo.svg')}}" alt="Zalo">

    </a>

    <a
        href="{{'tel:' . $shop->hotline}}"
        class="contact-btn phone">
        <i class="fa-solid fa-phone"></i>
    </a>
</div>
