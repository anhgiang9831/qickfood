@extends("frontend.master")
{{--            <div class="col-sm-3">--}}
{{--                @include('frontend.layouts.sidebar')--}}

{{--            </div>--}}

@section("content")
    <!DOCTYPE html>
<html lang="vi-VN">

<!-- Mirrored from quickfood.weba.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 00:00:35 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content='Web design | Trang chủ'/>
    <meta property="og:site_name" content="quickfood"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <base href="{{ asset('/') }}">


    <title>Web design | Trang chủ</title>
    <!-- keywords -->
    <!-- current url -->
    <link rel="canonical" href="/"/>
    <!-- published_time -->
    <!-- modified_time -->
    <!-- product name -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/modules/gg_translate/gg_translate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/modules/filter_product/filter_product.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/Hover-master/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/mmenu/dist/css/jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/bootstrap-notify/bootstrap-notify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/modules/images/image.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/modules/menu/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/modules/slider/slider.css') }}">
    <style>@import url('public/css/globalfontface.css');</style>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('public/plugins/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/plugins/Semantic-UI/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/default/1993/style.css') }}">
    <script src="{{ asset('public/js/lib/jquery.1.11.2.min.js') }}"></script>


</head>

<?php $slides = DB::table('slides')->get(); ?>

<div class="slider-bar ui padded grid">
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <div class="wm-module wm-slider">
            <div class="owl-carousel" id="owl_carousel_526">
                @foreach($slides as $index=>$item)
                <a href="javascript:void(0);">
                    <img src="{{ asset('uploads/slides/'.$item->image) }}" alt="Slider chính"/>


                </a>
                @endforeach

            </div>
        </div>

        <script type="text/javascript">
            if ((typeof config_slider) === 'undefined') {
                config_slider = [];
            }
            var config = {};
            var str_custom = "";
            if (str_custom !== '') {
                config = eval('()');
            } else {
                var animateOut = "default";
                var animateIn = "default";
                var animateOut_final, animateIn_final;
                if (animateOut == 'default') {
                    animateOut_final = false;
                } else {
                    animateOut_final = animateOut;
                }
                if (animateIn == 'default') {
                    animateIn_final = false;
                } else {
                    animateIn_final = animateIn;
                }
                config = {
                    animateOut: animateOut_final,
                    animateIn: animateIn_final,
                    smartSpeed: "1000",
                    onInitialized: function () {
                        text_animate(this.$element, "Initialized");
                    },
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            dots: false,
                            loop: true,
                            autoplay: false
                        },
                        768: {
                            items: 1,
                            nav: false,
                            dots: true,
                            loop: true,
                            autoplay: false
                        },
                        993: {
                            items: 1,
                            nav: false,
                            dots: true,
                            loop: true,
                            autoplay: false
                        },
                        1200: {
                            items: 1,
                            nav: false,
                            dots: true,
                            loop: false,
                            autoplay: true
                        }
                    }
                }
            }
            var config_slider_tmp = {
                id: "owl_carousel_526",
                config: config
            };
            config_slider.push(config_slider_tmp);
            // console.log(config_slider_tmp);
        </script>

    </div>
</div>
<div class="ui padded grid">
    <div class="row-one  wm-mobile column">
        <div id='row-one' class="ui wm equal width pc grid  wm-mobile container">
            <div
                class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
                <style>.wm-module.wm-image .image-93:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-93 {
                        cursor: auto;</style>
                <div class="wm-module wm-image img-home">
                    <div class="image-93">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-01-566x401.jpg"
                             alt="Đối với người ăn chay">
                        <div class="content" style='text-align:center;top:20%;colordefault;'>
                            <div class="ui large header">
                                <div class="animated ">
                                    NGƯỜI ĂN CHAY <br/>
                                    <span>Burger + Pháp Fries + Drin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wm-module wm-free-text detail-img">
                    <h2 class="ui header"></h2>
                </div>
            </div>
            <div
                class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
                <style>.wm-module.wm-image .image-97:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-97 {
                        cursor: auto;</style>
                <div class="wm-module wm-image img-home">
                    <div class="image-97">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-02-566x401.jpg"
                             alt="Đặt hàng trực tuyến">
                        <div class="content" style='text-align:center;top:20%;colordefault;'>
                            <div class="ui medium header">
                                <div class="animated ">
                                    ĐẶT HÀNG TRỰC TUYẾN<br/>
                                    <span>Có sẵn Mỗi Ngày 9: 00-23: 00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wm-module wm-free-text detail-img">
                    <h2 class="ui header"></h2>
                </div>
            </div>
            <div
                class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
                <style>.wm-module.wm-image .image-58:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-58 {
                        cursor: auto;</style>
                <div class="wm-module wm-image img-home">
                    <div class="image-58">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-03-566x401.jpg"
                             alt="Bánh đặc biệt">
                        <div class="content" style='text-align:center;top:20%;colordefault;'>
                            <div class="ui default header">
                                <div class="animated ">
                                    BÁNH ĐẶT BIỆT<br/>
                                    <span>Mỗi Thứ Sáu chỉ có $ 0,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wm-module wm-free-text detail-img">
                    <h2 class="ui header"></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui padded grid">
    <div class="products row-two  wm-mobile column">
        <div id='products' class="ui grid  wm-mobile container">
            <div
                class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
                <div class="wm-module wm-free-text">
                    <h2 class="ui header">Menu mới của chúng tôi</h2>
                </div>
                <?php $product_news = DB::table('products')->orderBy('id', 'DESC')->limit('9')->get() ?>

                <div class='wm-tab-ct-product-254'>

                    <div class="wm-module wm-product products-h dele-header ui active tab"
                         data-tab="product-25424468">
                        <div class="ui dividing header">Bánh pizza</div>
                        <div class="ui stackable link cards three pro-code-product-254"> <!-- items / cards -->
                            @foreach($product_news as $item)

                            <div class="card">
                                <div class="ui image wm-dimmer blurring dimmable"
                                     onclick="location.href='{{ route('products.get_detail', $item->id) }}">
                                    <div class="ui dimmer transition hidden"></div>
                                    <img
                                        src="{{ asset('uploads/products/'.$item->image) }}"
                                        class="visible content" alt="burger-co-dien"></div>
                                <div class="content">
                                    <a href="{{ route('products.get_detail', $item->id) }}" class="header"><h2>{{$item->name}}</h2></a>
                                    <div class="left floated meta">
                                        <p class="ui red header"><small class="current-price" price="{{ number_format($item->price,0,'.','.') }}"> {{ number_format($item->price,0,'.','.') }}
                                                Đ</small></p>
                                    </div>

                                </div>
                                <div class="button-group ui buttons bottom two attached" data-p="39731">
                                    <div class="ui button" >
                                        <a style="color: #ffffff" href="{{ route('products.get_detail', $item->id) }}">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div> <!-- end cards -->
                    </div> <!-- end wm-module || tab -->

                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui padded grid">
    <div class="row-four  wm-mobile column">
        <div id='row-four' class="ui wm equal width pc grid  wm-mobile container">
            <div
                class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column tt-co-ban wow fadeInUp">
                <style>.wm-module.wm-image .image-11:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-11 {
                        cursor: auto;</style>
                <div class="wm-module wm-image icon-tt">
                    <div class="image-11">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/1.png"
                             alt="CHUYỂN PHÁT NHANH">
                    </div>
                </div>
                <div class="wm-module wm-free-text tt-auto">
                    <h2 class="ui header">GIAO HÀNG NHANH</h2>
                    <div class="content">
                        <p><span style="font-size: 12pt;"><span>Mọi thứ bạn đặt hàng tại QuickFood sẽ nhanh chóng được gửi đến cửa nhà bạn.</span></span>
                        </p></div>
                </div>
            </div>
            <div
                class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column tt-co-ban wow fadeInUp">
                <style>.wm-module.wm-image .image-22:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-22 {
                        cursor: auto;</style>
                <div class="wm-module wm-image icon-tt">
                    <div class="image-22">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/2.png" alt="THỨC ĂN SẠCH">
                    </div>
                </div>
                <div class="wm-module wm-free-text tt-auto">
                    <h2 class="ui header">THỨC ĂN SẠCH</h2>
                    <div class="content">
                        <p>
                            <span>Chúng tôi chỉ sử dụng các thành phần tốt nhất để nấu món ăn tươi ngon cho bạn.</span>
                        </p></div>
                </div>
            </div>
            <div
                class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column tt-co-ban wow fadeInUp">
                <style>.wm-module.wm-image .image-8:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-8 {
                        cursor: auto;</style>
                <div class="wm-module wm-image icon-tt">
                    <div class="image-8">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/3.png"
                             alt="ĐẦU BẾP GIÀU KINH NGHIỆM">
                    </div>
                </div>
                <div class="wm-module wm-free-text tt-auto">
                    <h2 class="ui header">ĐẦU BẾP GIÀU KINH NGHIỆM</h2>
                    <div class="content">
                        <p><span style="font-size: 12pt;"><span>Nhân viên của chúng tôi bao gồm đầu bếp và đầu bếp với nhiều năm kinh nghiệm.</span></span>
                        </p></div>
                </div>
            </div>
            <div
                class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column tt-co-ban wow fadeInUp">
                <style>.wm-module.wm-image .image-73:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-73 {
                        cursor: auto;</style>
                <div class="wm-module wm-image icon-tt">
                    <div class="image-73">
                        <img class="ui fluid image" src="shop/images/quickfood/hinhanh/4.png"
                             alt="MỘT LOẠT CÁC MÓN ĂN">
                    </div>
                </div>
                <div class="wm-module wm-free-text tt-auto">
                    <h2 class="ui header">THỰC ĐƠN PHONG PHÚ</h2>
                    <div class="content">
                        <p><span style="font-size: 12pt;"><span>Trong thực đơn của chúng tôi, bạn sẽ tìm thấy rất nhiều món ăn, món tráng miệng và đồ uống.</span></span>
                        </p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='row-five' class="row-five ui padded wm equal width pc grid">
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <style>.wm-module.wm-image .image-96:before {
                z-index: 2;
                background: rgba(0, 0, 0, 0.51);
            }

            .wm-module.wm-image .image-96 {
                cursor: auto;</style>
        <div class="wm-module wm-image">
            <div class="image-96">
                <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-gallery-1-480x394.jpg"
                     alt="hình 1">
            </div>
        </div>
    </div>
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <style>.wm-module.wm-image .image-61:before {
                z-index: 2;
                background: rgba(0, 0, 0, 0.51);
            }

            .wm-module.wm-image .image-61 {
                cursor: auto;</style>
        <div class="wm-module wm-image">
            <div class="image-61">
                <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-gallery-2-480x394.jpg"
                     alt="hình 2 \" trên bản đồ \"">
            </div>
        </div>
    </div>
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <style>.wm-module.wm-image .image-43:before {
                z-index: 2;
                background: rgba(0, 0, 0, 0.51);
            }

            .wm-module.wm-image .image-43 {
                cursor: auto;</style>
        <div class="wm-module wm-image">
            <div class="image-43">
                <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-gallery-3-480x394.jpg"
                     alt="hình 3 \">
            </div>
        </div>
    </div>
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <style>.wm-module.wm-image .image-82:before {
                z-index: 2;
                background: rgba(0, 0, 0, 0.51);
            }

            .wm-module.wm-image .image-82 {
                cursor: auto;</style>
        <div class="wm-module wm-image">
            <div class="image-82">
                <img class="ui fluid image" src="shop/images/quickfood/hinhanh/index-gallery-4-480x394.jpg"
                     alt="hình 4 \">
            </div>
        </div>
    </div>
</div>
<div id='row-six' class="row-six ui padded grid">
    <div
        class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column wow fadeInUp">
        <div class="wm-module wm-map">
            <iframe width="100%" height="200" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBRHhKXiFa6Y8wEi79KjySDKyyB0EYLd7o&amp;q=Weba.vn%20T%e1%ba%a7ng%207%20%c4%90o%c3%a0n%20H%e1%ba%a3i%20Plaza,%20S%e1%bb%91%20756%20Tr%c6%b0%e1%bb%9dng%20Chinh,%20T%c3%a2n%20B%c3%acnh,%20H%e1%bb%93%20Ch%c3%ad%20Minh&amp;zoom=15"
                    allowfullscreen></iframe>
        </div>


    </div>
</div>


@endsection
