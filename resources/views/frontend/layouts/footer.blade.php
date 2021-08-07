<div class="ui padded grid">
    <div class="footer-top  wm-mobile column">
        <div id='row-fotter-one' class="ui wm equal width pc grid  wm-mobile container">
            <div class="sixteen wide large four wide computer sixteen wide tablet sixteen wide mobile column">
                <style>.wm-module.wm-image .image-47:before {
                        z-index: 2;
                        background: rgba(0, 0, 0, 0.51);
                    }

                    .wm-module.wm-image .image-47 {
                        cursor: auto;</style>
                <div class="wm-module wm-image">
                    <div class="image-47">
                        <style>
                            .text_avatar {
                                font-size: 36px !important;
                                font-family: 'Pacifico' !important;
                                color: #383838 !important;
                                line-height: 54px !important;
                            }
                        </style>
                        <div class="text_avatar ui fluid image">Quick Food</div>
                    </div>
                </div>
                <div class="wm-module wm-free-text detail-f">
                    <div class="content">

                    </div>
                </div>
            </div>
            <div class="sixteen wide large three wide computer sixteen wide tablet sixteen wide mobile column">
                <div class="wm-module wm-free-text title-footer">
                    <h2 class="ui header">Menu của chúng tôi</h2>
                </div>
                <nav
                    class="wm-module wm-menu ui inverted red vertical  fluid borderless menu detail-f computer tablet mobile only wm-men-484">
                    <a class="item" href="pro-category/banh-pizza/index.html">Bánh pizza</a><a class="item"
                                                                                               href="pro-category/xa-lach-1/index.html">Xà
                        lách</a><a class="item" href="pro-category/burgers/index.html">Burgers</a><a class="item"
                                                                                                     href="pro-category/mon-trang-mieng/index.html">Món
                        tráng miệng</a><a class="item" href="pro-category/tosts/index.html">Tosts</a>
                    <div class="menu right"></div>
                </nav>
            </div>
            <div class="sixteen wide large six wide computer sixteen wide tablet sixteen wide mobile column">

            </div>
        </div>
    </div>
</div>
<div class="ui padded grid">
    <div class="black  wm-mobile column">
        <div id='end-row' class="ui grid  wm-mobile container">
            <div class="column">
                <div class="wm-module wm-free-text">
                    <h2 class="ui header"></h2>
                    <div class="content">
                        <div style="text-align: center;">Thiết Kế Web Bởi Gnaig.Ng ( Giang Nguyễn ) <a
                                href=""></a></div>
                    </div>
                </div>
                <nav
                    class="wm-module wm-menu ui inverted blue bottom fixed mini borderless menu computer tablet mobile only wm-men-501">
                    <div class="ui wm-menu container"><a class="item" href="javascript:void(0)">Hỗ Trợ</a><a
                            class="item" href=""><i class="icon phone"></i>0965 699 154</a>
                            <a class="item" target="_blank" href="https://www.facebook.com/GiangNguyen6998">
                                <i  class="icon  facebook "></i>Facebook</a>
                            <a class="item" target="_blank" href="https://www.facebook.com/GiangNguyen6998">
                                <i class="icon  yahoo "></i>Yahoo</a>
                        <div class="menu right"></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>


<div id="back-to-top"
     style="position: fixed; width: 45px; height: 45px; border-radius: 50%; line-height: 45px; background: #000; color: #fff; bottom: 50px; right: 40px; text-align: center; cursor: pointer;display: none;"
     title="quay về đầu trang" data-inverted data-position="top center"><i style="margin: 0" class="icon angle up"></i>
</div>
<script>
    $(window).scroll(function () {
        var win_top = $(window).scrollTop() || 0,
            doc_height = $(document).height(),
            win_height = $(window).height(),
            show_height = '';
        if ((win_top + win_height) === doc_height || (show_height && win_top >= show_height)) $("#back-to-top").fadeIn();
        else $("#back-to-top").fadeOut();
    });

    $("#back-to-top").on("click", function () {
        $("html, body").animate({scrollTop: 0}, "slow");
    });
</script>


<!-- modal-custom -->
<div id="modal-small-custom" class="ui small modal"></div>


<script src="{{ asset('public/plugins/Semantic-UI/semantic.min.js') }}"></script>
<script src="{{ asset('public/js/app/app.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/mmenu/dist/js/jquery.mmenu.all.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/facebook/fb.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/googleApi/platform.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/modules/images/image.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/modules/menu/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/modules/slider/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/modules/products/product.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/default/1993/app.js') }}"></script>
</body>

<!-- Mirrored from quickfood.weba.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 00:00:55 GMT -->
</html>
