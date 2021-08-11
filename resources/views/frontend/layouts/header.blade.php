<body class="index ">

<div id="wm-primary-dimmer" class="ui page dimmer">
    <div class="content">
        <div class="ui text loader">Loading</div>
    </div>
</div>
<div class="pusher">
    <div class="ui padded grid">
        <div class="menu-main  wm-mobile column">
            <div id='menu-main' class="ui grid  wm-mobile container">
                <div
                    class="three wide large three wide computer sixteen wide tablet sixteen wide mobile column center aligned middle aligned">
                    <style>.wm-module.wm-image .image-87:before {
                            z-index: 2;
                            background: rgba(0, 0, 0, 0.51);
                        }

                        .wm-module.wm-image .image-87 {
                            cursor: pointer;</style>
                    <div class="wm-module wm-image logo" onclick="location.href='/'">
                        <div class="image-87">
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
                </div>
                <div
                    class="nine wide large nine wide computer sixteen wide tablet sixteen wide mobile column center aligned middle aligned">
                    <nav class="wm-module wm-menu ui default  menu menu-main-h computer only wm-men-599">

                        <?php $cates = DB::table('categories')->get(); ?>

                        <div class="ui simple dropdown autooff item"><a href="javascript:void(0)"><i
                                    class="fa fa-book"></i>Thực đơn</a><i class="dropdown icon"></i>
                            <div class="menu">
                                @foreach($cates as $item)

                                    <a class="item"
                                       href="{{ route('sanpham.getdanhmuc',['id' => $item->id, 'slug' => $item->slug]) }}">{{$item->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <a class="item" href="{{ route('get.list_post') }}"><i class="icon newspaper"></i>Tin
                            tức</a><a class="item" href="{{ route('get_contact') }}"><i class="icon add user"></i>Liên
                            hệ</a>
                        <div class="menu right"></div>
                    </nav>
                    <nav class="wm-module wm-menu ui responsive  fluid menu menu-mobile tablet mobile only wm-men-170">
                        <div class="menu-header">
                            <a href="#mmenu-tgle-wm-men-170" class="toggle-menu ui basic button" data-mn-title="menu"><i
                                    class="icon align justify"></i> menu</a>
                        </div>
                        <div class="data-menu-mobile" data-target="mmenu-tgle-wm-men-170" style="display:none">

                            <li><a href="javascript:void(0)"><i class="icon birthday"></i>Thực đơn</a>
                                <ul>
                                    @foreach($cates as $item)

                                        <li>
                                            <a href="{{ route('sanpham.getdanhmuc',['id' => $item->id, 'slug' => $item->slug]) }}">{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('get.list_post') }}"><i class="icon newspaper"></i>Tin tức</a>
                            </li>
                            <li><a href="{{ route('get_contact') }}"><i class="icon add user"></i>Liên hệ</a></li>
                        </div>
                        <script>
                            if (typeof mb_menus === "undefined") var mb_menus = {};
                            mb_menus["mmenu-tgle-wm-men-170"] = "left";
                        </script>
                    </nav>
                </div>
                <div
                    class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column center aligned middle aligned">
                    <nav class="wm-module wm-menu ui default  menu tt-hotline computer tablet mobile only wm-men-713">
                        @if(!auth()->guard('web')->user())
                            <a class="item" href="{{ route('login') }}"><i class="icon "></i>Đăng nhập</a>
                            <a class="item" href="{{ route('register') }}"><i class="icon "></i>Đăng kí</a>

                        @else
                            <a class="item" href="{{ route('logout') }}"><i class="icon user"></i>Đăng xuất</a>
                        @endif

                        <a
                            class="item"
                            href="{{ route('cart') }}"><i
                                class="icon in cart"></i> </a>
                        <div class="menu right"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
