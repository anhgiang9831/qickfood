@extends("frontend.master")

@section("content")

    <div class="ui padded grid">
        <div class=" wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-module wm-p-detail content">
                        <script>if (typeof fields === "undefined") fields = {};</script>
                        <div class="ui stackable grid">

                            <div class="three column row">
                                <div class="column">
                                    <div class="ui segment">
                                        <style></style>
                                        <div class="fotorama--hidden"></div>
                                        <div class="myfotorama fotorama fotorama1623998811404"
                                             data-allowfullscreen="true" data-nav="thumbs">
                                            <div
                                                class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows margin-auto"
                                                style="width: 310px; min-width: 0px; max-width: 100%;">
                                                <div class="fotorama__stage" style="width: 310px; height: 260px;">
                                                    <div class="fotorama__fullscreen-icon" tabindex="0"
                                                         role="button"></div>
                                                    <div class="fotorama__stage__shaft"
                                                         style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 310px; margin-left: 0px;">
                                                        <div
                                                            class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active"
                                                            style="left: 0px;"><img
                                                                src="{{ asset('uploads/products/'.$product->image) }}"
                                                                class="fotorama__img"
                                                                style="width: 310px; height: 260px; left: 0px; top: 0px;">
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled"
                                                        tabindex="-1" role="button" disabled="disabled"
                                                        style="display: none;"></div>
                                                    <div
                                                        class="fotorama__arr fotorama__arr--next fotorama__arr--disabled"
                                                        tabindex="-1" role="button" disabled="disabled"
                                                        style="display: none;"></div>
                                                    <div class="fotorama__video-close"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column"><h1 class="ui grey header h2">
                                        {{$product->name}}</h1>

                                    <table class="ui very basic table">
                                        <tbody>
                                        <tr>
                                            <td class=""><strong>Giá</strong> :</td>
                                            <td class="lbl-price right aligned"> {{number_format($product->price*(100 - $product->promotion)/100, 0, ',','.')}} Đ</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="description-short">
                                    </div>

                                    <div id="social" class="mg-y-xs">
                                        <div class="fb-share-button pull-right mg-l-mn fb_iframe_widget"
                                             data-href="/p/sicilian.html" data-layout="button_count" data-size="small"
                                             data-mobile-iframe="true" fb-xfbml-state="rendered"
                                             fb-iframe-plugin-query="app_id=332495714350344&amp;container_width=46&amp;href=https%3A%2F%2Fquickfood.weba.vn%2Fp%2Fsicilian.html&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small">
                                            <span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe
                                                    name="f2323cdd3459b58" width="1000px" height="1000px"
                                                    data-testid="fb:share_button Facebook Social Plugin"
                                                    title="fb:share_button Facebook Social Plugin" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media"
                                                    src="https://www.facebook.com/v3.3/plugins/share_button.php?app_id=332495714350344&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df338ce985e2d0a%26domain%3Dquickfood.weba.vn%26origin%3Dhttps%253A%252F%252Fquickfood.weba.vn%252Ff390decb6914e1%26relation%3Dparent.parent&amp;container_width=46&amp;href=https%3A%2F%2Fquickfood.weba.vn%2Fp%2Fsicilian.html&amp;layout=button_count&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"
                                                    style="border: none; visibility: visible; width: 77px; height: 20px;"
                                                    class=""></iframe></span></div>
                                        <div class="fb-like pull-right mg-l-mn fb_iframe_widget"
                                             data-href="/p/sicilian.html" data-layout="button_count" data-action="like"
                                             data-size="small" fb-xfbml-state="rendered"
                                             fb-iframe-plugin-query="action=like&amp;app_id=332495714350344&amp;container_width=0&amp;href=https%3A%2F%2Fquickfood.weba.vn%2Fp%2Fsicilian.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small">
                                            <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe
                                                    name="f1028dcf6048d04" width="1000px" height="1000px"
                                                    data-testid="fb:like Facebook Social Plugin"
                                                    title="fb:like Facebook Social Plugin" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                    allow="encrypted-media"
                                                    src="https://www.facebook.com/v3.3/plugins/like.php?action=like&amp;app_id=332495714350344&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df80942314cdc7%26domain%3Dquickfood.weba.vn%26origin%3Dhttps%253A%252F%252Fquickfood.weba.vn%252Ff390decb6914e1%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fquickfood.weba.vn%2Fp%2Fsicilian.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;size=small"
                                                    style="border: none; visibility: visible; width: 90px; height: 28px;"
                                                    class=""></iframe></span></div>
                                        <div class="gg-p pull-right mg-l-mn">
                                            <div style="position: absolute; width: 450px; left: -10000px;"
                                                 id="___plusone_0">
                                                <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0"
                                                        marginwidth="0" scrolling="no"
                                                        style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none"
                                                        tabindex="0" vspace="0" width="100%" id="I0_1623998811390"
                                                        name="I0_1623998811390"
                                                        src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=none&amp;size=tall&amp;count=true&amp;origin=https%3A%2F%2Fquickfood.weba.vn&amp;url=https%3A%2F%2Fquickfood.weba.vn%2Fp%2Fsicilian.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.PV2YLM-O7zA.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPomRvG5nQfmY0G52trJ06yFlU37w#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1623998811390&amp;parent=https%3A%2F%2Fquickfood.weba.vn&amp;pfname=&amp;rpctoken=87091299"></iframe>
                                            </div>
                                            <div class="g-plusone" data-annotation="none" data-href="/p/sicilian.html"
                                                 data-size="tall" data-count="true" data-gapiscan="true"
                                                 data-onload="true" data-gapistub="true"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>

                                </div>
                                <div class="column">
                                    <form id="byinfo" class="ui form" data-p="39736">

                                        <div class="field">
                                            <label>Số lượng:</label>
                                            <input type="number" name="quantity" class="txt-quantity" placeholder="1"
                                                   value="1"  id="qty"  min="1">
                                            <script>
                                                fields["quantity"] = {
                                                    identifier: "quantity",
                                                    rules: [
                                                        {
                                                            type: 'empty',
                                                            prompt: 'Điền số lượng'
                                                        }
                                                    ]
                                                };
                                            </script>
                                        </div>
                                        <div id="btn-add-cart" pro_id="{{$product->id}}" class="btn-add-cart  ui animated green big button" tabindex="0"
                                             data-url="/carts">
                                            <div class="visible content" ><i  class="fa fa-shopping-cart"></i>
                                                Đặt Hàng</div>
                                            <div class="hidden content">
                                                <i class="icon add to cart"> </i>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="sixtem wide column">
                                    <div class="">
                                    {!! $product->description !!}
                                        <!-- <a class="item" data-tab="second">Đánh giá</a> -->
                                    </div>

                                    <!-- <div class="ui bottom attached tab segment" data-tab="second">
                                        Second
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--    <div class="product-details"><!--product-details-->--}}
{{--        <div class="col-sm-5">--}}
{{--            <div class="view-product">--}}
{{--                <img src="{{ asset('uploads/products/'.$product->image) }}" alt="">--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        <div class="col-sm-7">--}}
{{--            <div class="product-information"><!--/product-information-->--}}
{{--                <img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt="">--}}
{{--                <h2>{{$product->name}}</h2>--}}
{{--                <p>Web ID: {{$product->id}}</p>--}}
{{--                @if($product->qty < 1)--}}
{{--                    <h4 class="text-danger">Hết hàng</h4>--}}
{{--                @else--}}
{{--                    <span>--}}
{{--									<span>{{number_format($product->price*(100 - $product->promotion)/100, 0, ',','.')}}₫</span><br>--}}
{{--									<label>Quantity:</label>--}}
{{--									<div>--}}
{{--                                        <button style="width: 28px;height: 33px; font-size: 20px;border: none"--}}
{{--                                                onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;"--}}
{{--                                                class="reduced items-count" type="button"> ---}}
{{--                                        </button>--}}

{{--                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12"--}}
{{--                                               id="qty" name="qty" min="1">--}}
{{--                                        <input id="soluongcon" type="text" value="{{ $product->qty }}"--}}
{{--                                               style="display: none">--}}

{{--                                        <button style="width: 28px;height: 33px; font-size: 18px; border: none"--}}
{{--                                                onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"--}}
{{--                                                class="increase items-count count-plus" type="button"> +--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                    <br>--}}
{{--									<button id="btn-add-cart" pro_id="{{$product->id}}" style="margin-left: 0px"--}}
{{--                                            type="button" class="btn btn-fefault cart">--}}
{{--										<i class="fa fa-shopping-cart"></i>--}}
{{--										Đặt Hàng--}}
{{--									</button>--}}
{{--								</span>--}}
{{--                    <p>--}}

{{--                @endif--}}
{{--            </div><!--/product-information-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <h2 style="color: #fe980e">Thông tin sản phẩm</h2>--}}
{{--        <div class="row col-md-12">--}}
{{--            {!! $product->description !!}--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <h2 style="color: #fe980e">Sản phẩm liên quan</h2>--}}
{{--    </div>--}}
{{--    <?php $sp_lienquan = DB::table('products')->where('cate_id', $product->cate_id)->limit(12)->get(); ?>--}}
{{--    @foreach($sp_lienquan as $item)--}}

{{--        <div class="col-sm-3">--}}
{{--            <div class="product-image-wrapper">--}}
{{--                <div class="single-products">--}}
{{--                    <div class="productinfo text-center">--}}
{{--                        <img src="{{ asset("uploads/products/".$item->image) }}" alt="">--}}
{{--                        <h2>{{ number_format($item->price,0,'.','.') }}</h2>--}}
{{--                        <p><a style="color: #696763"--}}
{{--                              href="{{ route('products.get_detail', $item->id) }}">{{$item->name}}</a></p>--}}
{{--                        <button type="button" class="btn btn-default add-to-cart"><a style="color: #696763"--}}
{{--                                                                                     href="{{ route('products.get_detail', $item->id) }}"><i--}}
{{--                                    class="fa fa-eye"></i>Xem chi tiết</a></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
@endsection

@section("script")

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            var url = "{{ route('cart.add_cart') }}";
            // $(".count-plus").click(function () {
            //     var qty = $("#qty").val();
            //     var soluongcon = $("#soluongcon").val();
            //     if (parseInt(qty) > parseInt(soluongcon)) {
            //         $("#qty").val(soluongcon);
            //         alert("Số lượng quá số lượng trong kho")
            //     }
            //
            // });

            $("#btn-add-cart").on("click", function () {
                // alert("dêd");
                var id = $(this).attr('pro_id');
                var qty = parseInt($("#qty").val());
                // alert(id)
                $.ajax({

                    type: "POST",
                    url: url,
                    data: {id: id, qty: qty},
                    success: function (data) {
                        window.location.href = "/cart";

                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>
@endsection
