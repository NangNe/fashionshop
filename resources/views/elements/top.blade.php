<style type="text/css">
    .box {
        width: 400px;
        margin-left: 10px;
    }

    .container-2 {
        width: 400px;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
    }

    .container-2 input#search {
        width: 50px;
        height: 50px;

        background: #ffffff;
        border: 1px solid #000000;
        font-size: 11pt;
        float: left;
        color: #000000;
        padding-left: 50px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        color: rgb(0, 0, 0);

        -webkit-transition: width .55s ease;
        -moz-transition: width .55s ease;
        -ms-transition: width .55s ease;
        -o-transition: width .55s ease;
        transition: width .55s ease;

    }

    .container-2 input#search::-webkit-input-placeholder {
        color: #65737e;
    }

    .container-2 input#search:-moz-placeholder {
        /* Firefox 18- */
        color: #65737e;
    }

    .container-2 input#search::-moz-placeholder {
        /* Firefox 19+ */
        color: #65737e;
    }

    .container-2 input#search:-ms-input-placeholder {
        color: #65737e;
    }

    .container-2 .icon {
        position: absolute;
        top: 50%;
        margin-left: 12px;
        margin-top: 12px;
        z-index: 1;
        color: #494949;

    }

    /* ANIMATION EFFECTS */
    .container-2 input#search:focus,
    .container-2 input#search:active {
        outline: none;

    }

    .container-2:hover input#search {
        outline: none;
        width: 300px;
        height: 50px;
    }

    .container-2:hover .icon {
        color: #000000;
    }

</style>


<marquee width="87%" direction="left" height="20px">
    <p style="color: black"><b>----- Gucci brand - The power symbol of the world fashion village ----- Complimentary
            Premium Express Shipping Within 2-3 Business Days ----- Gucci brand - The power symbol of the world fashion
            village ----- Complimentary Premium Express Shipping Within 2-3 Business Days ----- </b></p>
</marquee>
<header id="header">
    <!--header-->
    <div class="header_top" data-aos="fade-right">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +0352893091</a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i>
                                    nvnang.20it1@vku.udn.vn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/hinangne.3091"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/nang.nkv/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle" data-aos="fade-left">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="btn-group">
                        <div class="logo pull-left" style="margin-top: 3px">
                            <a href="{{ URL::to('/') }}"><img src="{{ asset('public/frontend') }}/images/gucci1.png"
                                    alt="" style="width:160px;height:40px;"></a>
                        </div>
                        {{-- <div class="btn-group" style="margin-left: 10px">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div> --}}


                    </div>
                </div>
                <div class="col-sm-4">
                    <form action="{{ URL::to('/tim-kiem') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="box">
                            <div class="container-2">
                                <span class="icon"><i class="fa fa-search fa-2x" style="height: 40px;
                                    width: 40px;"></i></span>
                                <input type="search" id="search" name="keywords_submit"
                                    placeholder="  Type to search..." />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-6">

                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav" style="margin-top: 5px; margin-right: 10px">

                            <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                            <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-cc-visa fa-lg"></i> Thanh
                                    to??n</a>
                            </li>

                            <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                            <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs fa-lg"></i> Thanh
                                    to??n</a></li>
                            <?php 
                                }else{
                                ?>
                            <li><a href="{{ URL::to('/login-checkout') }}"><i class="fa fa-cc-visa fa-lg"></i>
                                    Thanh
                                    to??n</a></li>
                            <?php
                                 }
                                ?>


                            <li><a href="{{ URL::to('/gio-hang') }}"><i
                                        class="fa fa-shopping-cart fa-lg"></i>{{-- Gi??? h??ng --}}</a>
                            </li>
                            <?php
                                   $customer_id = Session::get('customer_id');
                                   //$customer_name = Session::get('customer_name');
                                   if($customer_id!=NULL){ 
                                 ?>
                            <li><a href="{{ URL::to('/logout-checkout') }}"><i class=" fa fa-sign-in fa-lg"></i> ????ng xu???t
                                </a></li>
                            <li><a href="{{ URL::to('/taikhoan') }}"><i class=" fa fa-user fa-lg"></i>Profile
                                {{--     {{ Session::get('customer_name') }}  --}}</a></li>
                                    


                            <?php
                            }else{
                                 ?>
                            <li><a href="{{ URL::to('/login-checkout') }}"><i
                                        class="fa fa-lock fa-lg"></i>{{-- ????ng nh???p --}}</a>
                            </li>
                            <?php 
                             }
                                 ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom" id="myHeader">
        <!--header-bottom-->
        <div class="container ">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div> --}}
                    <div class="mainmenu pull-left" style="margin-left: 20%;">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li style="padding-top:15px"><a href="{{ URL::to('/trang-chu') }}"
                                    class="active">Home</a></li>
                            {{-- <li class="dropdown" style="padding-top:15px"><a
                                    href="{{ URL::to('/product') }}">C???a h??ng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/product') }}">S???n ph???m</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/C???p%20????i') }}">????? ????i</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Women') }}">????? N???</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/MEN') }}">????? Nam</a></li>
                                    <li><a href="{{ URL::to('/show-cart') }}">Cart</a></li>
                                    <li><a href="{{ URL::to('/login-checkout') }}">Login</a></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">????? Nam<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/??o%20Nam') }}">??o</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Qu???n') }}">Qu???n </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/T??i%20X??ch') }}">T??i X??ch</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Gi??y%20Nam') }}">Gi??y</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Ph???%20ki???n%20Nam') }}">Ph??? Ki???n</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">????? N???<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/??o%20N???') }}">??o</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/V??y') }}">Dress </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/T??i%20X??ch') }}">T??i X??ch</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Gi??y%20n???') }}">Gi??y</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Ph???%20ki???n') }}">Ph??? Ki???n</a></li>
                                </ul>
                            </li>
                            <div class="logo pull-left">
                                <a href="{{ URL::to('/') }}"><img
                                        src="{{ asset('public/frontend') }}/images/logo3.png" alt=""
                                        style="width:160px;height:50px;"></a>
                            </div>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="{{ URL::to('/thuong-hieu-san-pham/Trang%20S???c') }}">Trang S???c<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Nh???n') }}">Nh???n</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/D??y%20chuy???n') }}">D??y Chuy???n </a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/V??ng%20Tay') }}">V??ng Tay</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/B??ng%20Tai') }}">Hoa Tai</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" style="padding-top:15px"><a
                                    href="#">S???c ?????p<i
                                        class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/N?????c%20Hoa%20Nam') }}">N?????c Hoa Nam</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/N?????c%20Hoa') }}">N?????c Hoa N???</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/Son') }}">Son M??i</a></li>
                                    <li><a href="{{ URL::to('/danh-muc-san-pham/?????%20????i') }}">????? ????i</a></li>
                                </ul>
                            </li>
                            <li style="padding-top:15px"><a href="{{ URL::to('/contact') }}">Li??n h???</a></li>
                            {{-- <li style="padding-top:15px"><a href="{{ URL::to('/contact') }}">Gi???i thi???u</a></li> --}}

                        </ul>
                    </div>
                </div>
                {{-- <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div> --}}

            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>
<!--/header-->
