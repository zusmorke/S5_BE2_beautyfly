@extends('layout')

@section('main')
<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="css/library.css">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlCarousel/assets/owl.theme.default.min.css')}}">
    <!-- Layout -->
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="{{asset('owlCarousel/owl.carousel.min.js')}}"></script>
</head>

<<<<<<< HEAD
=======
<body>
    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="{{ url('index')}}" class="header__logo">
                    <img src="img/logomoi.png" alt="">
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                        <a class="header__search-icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                @auth
                <p style="font-size: 18px;">Xin chào ,{{ auth()->user()->name }}  </p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="font-size: 14px;">Đăng xuất</button>
                </form>
                @else
                
                <a href="{{ route('login') }}" style="font-size: 18px;">Đăng nhập |</a>
                <a href="{{ route('register')}}" style="font-size: 18px;">Đăng ký</a>
                @endauth
                <!-- Cart -->
                <div class="header__cart have" href="#">
                    <i class="fas fa-shopping-basket"></i>
                    <div class="header__cart-amount">
                        3
                    </div>
                    <div class="header__cart-wrap">
                        <ul class="order__list">
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ url('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ url('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ url('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ url('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ url('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ url('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="{{ url('product')}}" class="order-img">
                                        <img src="img/product/product1.jpg" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="{{ url('product')}}" class="order-main-name">Áo sơ mi caro kèm belt caro kèm belt Áo sơ mi caro kèm belt</a>
                                        <div class="order-main-price">2 x 45,000 ₫</div>
                                    </div>
                                    <a href="{{ url('product')}}" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="total-money">Tổng cộng: 120.000đ</div>
                        <a href="{{ url('cart')}}" class="btn btn--default cart-btn">Xem giỏ hàng</a>
                        <a href="{{ url('pay')}}" class="btn btn--default cart-btn orange">Thanh toán</a>
                        <!-- norcart -->
                        <!-- <img class="header__cart-img-nocart" src="http://www.giaybinhduong.com/images/empty-cart.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item nav__search">
                    <div class="nav__search-wrap">
                        <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
                    </div>
                    <div class="nav__search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="header__nav-item authen-form">
                    <a href="#" class="header__nav-link">Tài Khoản</a>
                    <ul class="sub-nav">
                        <li class="sub-nav__item">
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
                        </li>
                        <li class="sub-nav__item">
                            <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item index">
                    <a href="{{route('index')}}" class="header__nav-link">Trang chủ</a>
                </li>
                
                <li class="header__nav-item">
                <a href="{{url('listProduct')}}" class="header__nav-link">Sản Phẩm</a>
                    <div class="sub-nav-wrap grid wide">
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Nước hoa</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct')}}" class="sub-nav__link">Chăm sóc toàn thân vvv</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct')}}" class="sub-nav__link">Khuyến mãi</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct')}}" class="sub-nav__link">Chăm sóc cơ thể</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct')}}" class="sub-nav__link">Nước hoa</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="{{ url('listProduct')}}" class="sub-nav__link">Chăm sóc miệng</a>
                            </li>
                        </ul>
                       
                    </div>
                </li>
                <li class="header__nav-item">
                    <a href="{{route('news')}}" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="{{route('contact')}}" class="header__nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
    <div class="main">
        <div class="grid wide">
            <div class="main__breadcrumb">
                <div class="breadcrumb__item">
<<<<<<< HEAD
                    <a href="{{ route('index') }}" class="breadcrumb__link">Trang chủ</a>
=======
                    <a href="{{route('index')}}" class="breadcrumb__link">Trang chủ</a>
>>>>>>> 0a1083de38872e07658b2ed8ee7bf9013b57a239
                </div>
                <div class="breadcrumb__item">
                    <a href="#" class="breadcrumb__link">Liên hệ</a>
                </div>
            </div>
            <div class="row">
                <div class="col l-6 m-12 s-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4749789206066!2d106.75548917471203!3d10.851432489301928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1711348810647!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </iframe>
                </div>
                <div class="col l-6 m-12 s-12">
                    <div class="contact__wrap">
                        <div class="contact__img">
                            <img src="http://mauweb.monamedia.net/vanihome/wp-content/uploads/2018/04/logo-mona.png" alt="">
                        </div>
                        <ul class="contact__info">
                            <li class="contact__text">
                                <i class="fas fa-map-marked-alt"></i> 22/3 Võ Văn Ngân,Linh Chiểu,TP Thủ Đức
                            </li>
                            <li>
                                <a href="tel:076 922 0162" class="contact__link">
                                    <i class="fas fa-phone"></i> 012 345 6789
                                </a>
                                <a href="tel:076 922 0162" class="contact__link">
                                    &#8212; 023 567 8912
                                </a>
                            </li>

                            <li>
                                <a href="#" class="contact__link">
                                    <i class="fas fa-envelope"></i> nhom2@mail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="about-us">
                        <div class="about-us__heading">Liên hệ với chúng tôi</div>
                        <div class="form__group">
                            <div>
                                <input type="text" name="hoTen"  placeholder="Họ Và Tên">
                            </div>
                            <div>
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div>
                                <input type="text" name="diaChi" placeholder="Địa chỉ">
                            </div>
                            <div>
                                <input type="text" name="soDienThoai"  placeholder="Số điện thoại">
                            </div>
                        </div>
                        <textarea name="loiNhan" id="" cols="30" rows="5" placeholder="Lời nhắn"></textarea>
                        <button type="submit" class="btn btn--default">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
    <h2 style="font-size: 34px; text-align: center; color: red;">Thông tin liên hệ</h2>
    <div class="contact-wrapper">
        @foreach ($contact as $row)
        <ul class="contact-list">
            <li class="contact-item">
                <label>Họ và tên:</label>
                <span>{{ $row->hovaten }}</span>
            </li>
            <li class="contact-item">
                <label>Email:</label>
                <span>{{ $row->email }}</span>
            </li>
            <li class="contact-item">
                <label>Địa chỉ:</label>
                <span>{{ $row->diachi }}</span>
            </li>
            <li class="contact-item">
                <label>Số điện thoại:</label>
                <span>{{ $row->sdt }}</span>
            </li>
            <li class="contact-item">
                <label>Lời nhắn:</label>
                <span>{{ $row->loinhan }}</span>
            </li>
            <li class="contact-item">
                <label>Ngày tạo:</label>
                <span>{{ $row->created_at}}</span>
            </li>
        </ul>
        @endforeach
    </div>
</div>
@endsection