@extends("frontend.master")
@section("content")

    <div class="ui padded grid">
        <div class=" wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-widget wm-cart">
                        <h1 class="ui header">Giỏ hàng của bạn</h1>
                        <div class="cart-content" style="overflow-x:auto;">
                            <table class="ui celled unstackable table">
                                <thead>
                                <tr>
                                    <th class="four wide center aligned">Sản phẩm</th>
                                    <th class="three wide center aligned">Số lượng</th>
                                    <th class="three center aligned">Giá</th>
                                    <th class="three wide center aligned">Thành tiền</th>
                                    <th class="one wide center aligned">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartContent as $item)

                                    <tr>

                                        <td>
                                            <p><strong class=""><a class="p-name"
                                                                   href="javascript:void(0)">{{ $item->name }}</a></strong></p>
                                            <p class="thuoc-tinh"></p>
                                        </td>
                                        <td>
                                            <div class="ui fluid action input rfresh-control">
                                                <input class="txt-qty" name="quantity" type="number" min="1" value="{{ $item->quantity }}">
                                                <button id_pro="{{ $item->id }}" class="ui icon button btn-rfresh-qty btn-update-cart" rel-p="11878">
                                                    <i class="refresh icon"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="right aligned"> {{ number_format($item->price, 0, ',', '.') }} Đ</td>
                                        <td class="right aligned"><strong> {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</strong><sup>đ</sup></td>
                                        <td class="center aligned">
                                            <button id_pro="{{ $item->id }}" title="Xoá" class="ui icon red button btn-trash-cart btn_df" rel-p="11878">
                                                <i
                                                    class="icon trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="3" class="right aligned"><strong>Tổng cộng :</strong></th>
                                    <th class="right aligned error"><strong> {{ number_format(Cart::getSubTotal(), 0, '.', ',') }}</strong> <sup>đ</sup></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <br>

                        <button class="ui left floated icon green button" onclick="history.back();"><a
                                href="{{ asset('/') }}" style="color:#fff"><i class="icon long arrow left"></i> Tiếp
                                tục mua hàng</a></button>
                        <button class="ui right floated blue icon button" onclick="window.location.href='/checkout/'"><a
                                href="{{ route('checkout') }}" style="color:#fff"><i class="icon share"></i> Thanh toán</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("script")
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            var url = "{{ route('cart.update_cart') }}";
            $(".btn-update-cart").on("click", function () {
                var id = $(this).attr('id_pro');
                var qty = parseInt($(this).parent().find('input[name="quantity"]').val());
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

            $(".btn_df").on("click", function () {
                var id = $(this).attr('id_pro');
                var url = "{{ route('cart.remove_cart') }}";
                $.ajax({


                    type: "POST",
                    url: url,
                    data: {id: id},
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
