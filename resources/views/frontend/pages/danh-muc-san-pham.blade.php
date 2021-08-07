@extends("frontend.master")
@section("content")

    <div class="ui padded grid">
        <div class="products row-two  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column">
                    <div class="wm-module wm-product products-h" data-tab="">
                        <div class="ui dividing header">{{ $cate->name }}</div>
                        <div class="ui stackable link cards three pro-code-product-195"> <!-- items / cards -->

                        @foreach($product_cate as $item)

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
                        {{$product_cate->links()}}
                    </div> <!-- end wm-module || tab -->
                    <!-- <script type="text/javascript">
            $('.fillter-search').change(function(){
                    var params = {

                        }
                $.post('/quantri/ajx/ajax.php', params, function(data) {

                });
            });
        </script> -->
                </div>
            </div>
        </div>
    </div>


@endsection
