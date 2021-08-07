@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')


@yield("content")


@include("frontend.layouts.footer")
@yield('script')
