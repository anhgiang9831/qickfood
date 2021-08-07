@extends("frontend.master")
@section("content")
    <div class="ui padded grid">
        <div class="products  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div
                    class="twelve wide large  wide computer sixteen wide tablet sixteen wide mobile column cont-cont">
                    <div class="wm-module wm-post-detail head">
                        <h1>{{ $post->title }}</h1>

                        <hr>
                        <div class="content wm-limit-img">
                            <p>{!! $post->content !!}</p>
                           </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
