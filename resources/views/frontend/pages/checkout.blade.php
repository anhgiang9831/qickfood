@extends('frontend.master')

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
                                                                   href="javascript:void(0)">{{ $item->name }}</a></strong>
                                            </p>
                                            <p class="thuoc-tinh"></p>
                                        </td>
                                        <td>
                                            <div class="ui fluid action input rfresh-control">
                                                <input class="txt-qty" name="quantity" type="number" min="1"
                                                       value="{{ $item->quantity }}">
                                                <button id_pro="{{ $item->id }}"
                                                        class="ui icon button btn-rfresh-qty btn-update-cart"
                                                        rel-p="11878">
                                                    <i class="refresh icon"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="right aligned"> {{ number_format($item->price, 0, ',', '.') }} Đ</td>
                                        <td class="right aligned">
                                            <strong> {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</strong><sup>đ</sup>
                                        </td>
                                        <td class="center aligned">
                                            <button id_pro="{{ $item->id }}" title="Xoá"
                                                    class="ui icon red button btn-trash-cart btn_df" rel-p="11878">
                                                <i
                                                    class="icon trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="3" class="right aligned"><strong>Tổng cộng :</strong></th>
                                    <th class="right aligned error">
                                        <strong> {{ number_format(Cart::getSubTotal(), 0, '.', ',') }}</strong>
                                        <sup>đ</sup></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <br>

                        <div class="ui padded grid">
                            <div class="thanh-toan  wm-mobile column">
                                <div class="ui grid  wm-mobile container">
                                    <div class="column">
                                        <form name="frm_checkout" action="{{ route('order.post_order') }}" method="post" class="frm_checkout ui form ">
                                            @csrf
                                            <div class="ui grid stackable three column grid">
                                                <div class="column">
                                                    <h2 class="ui dividing header">Thông tin giao hàng</h2>


                                                    <div class="field">
                                                        <label>Họ và tên</label>
                                                        <div class="field">
                                                            <input type="text" id="name" name="name"
                                                                   placeholder="Họ tên" value="@if(auth()->guard('web')->user()){{ auth()->guard('web')->user()->name }} @endif">
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label>Số điện thoại</label>
                                                        <div class="field">
                                                            <input type="text" id="phone" name="phone" placeholder="Số điện thoại"
                                                                   value="">
                                                        </div>
                                                    </div>

                                                    <div class="field">
                                                        <label>Địa chỉ</label>
                                                        <div class="field">
                                                            <input type="text" id="address" name="address"
                                                                   placeholder="Địa chỉ nhận hàng" value="">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <input type="submit" name="btnCheckOut" class="ui button" value="Đặt hàng">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


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
                var qty = parseInt($(this).prev('div[class="floatleft"]').find('input[name="quantity"]').val());

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

