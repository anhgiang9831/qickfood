@extends("frontend.master")
@section("content")


    <div class="ui padded grid">
        <div class="products  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div
                    class="twelve wide large  wide computer sixteen wide tablet sixteen wide mobile column cont-cont">
                    <div class="wm-module wm-post home-news">
                        <div class="ui dividing header"><h2>Tin tức</h2></div>

                        <div class="ui one stackable doubling_ cards">
                            @foreach($posts as $item)

                            <a class="card "
                               href="{{ route('post.detail', ['id' =>$item->id, 'slug' => $item->slug]) }}">
                                <div class="blurring dimmable image wm-dimmer">
                                    <div class="ui dimmer transition hidden">
                                        <div class="content">
                                            <div class="center"></div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/posts/'.$item->image) }}"
                                         alt="{{ $item->title }}">
                                </div>
                                <div class="content">
                                    <h4 class="header">{{ $item->title }}</h4>
                                    <div class="meta">
                                        <span class="price"><i class="icon calendar"></i>&nbsp;{{date('d-m-Y', strtotime($item->created_at))}}</span>
                                    </div>
                                    <div class="description">
                                        <p>
                                            {!! $item->description !!} </p>
                                    </div>
                                    <span class="stay"></span></div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--    <div class="blog-post-area" style="margin-bottom: 60px">--}}
    {{--        <h2 class="title text-center">Tin tức</h2>--}}
    {{--        @foreach($posts as $item)--}}

    {{--        <div class="single-blog-post">--}}
    {{--            <h3><a style="color: #696763" href="{{ route('post.detail', ['id' =>$item->id, 'slug' => $item->slug]) }}">{{ $item->title }}</a></h3>--}}
    {{--            <div class="post-meta">--}}
    {{--                <ul>--}}
    {{--                    <li><i class="fa fa-calendar"></i> {{date('d-m-Y', strtotime($item->created_at))}}</li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--            <a href="{{ route('post.detail', ['id' =>$item->id, 'slug' => $item->slug]) }}">--}}
    {{--                <img src="{{ asset('uploads/posts/'.$item->image) }}" alt="">--}}
    {{--            </a>--}}
    {{--            {!! $item->description !!}--}}
    {{--            <a class="btn btn-primary" href="{{ route('post.detail', ['id' =>$item->id, 'slug' => $item->slug]) }}">Đọc thêm</a>--}}
    {{--        </div>--}}

    {{--        @endforeach--}}
    {{--        {{ $posts->links() }}--}}

    {{--    </div>--}}
@endsection
