@extends("frontend.master")
@section("content")

    @include("messages")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <div class="container">
        <div class="row" style="margin-bottom: 150px; margin-top: 30px">
            <div class="column">

                <div class="col-sm-4 col-sm-offset-1">

                    <div class="login-form"><!--login form-->
                        <h4>Đăng nhập vào tài khoản của bạn
                        </h4>
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required
                                       class="form-control">

                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" required
                                       class="form-control"
                                       value="{{ old('password') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Đăng nhập</button>
                            </div>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h4 class="or">hoặc</h4>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h4>Đăng ký người dùng mới
                        </h4>
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="clsip form-control" name="name" value="{{ old('name') }}"
                                       required=""
                                       placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="email" class="clsip form-control" name="email" value="{{ old('email') }}"
                                       required=""
                                       placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="clsip form-control" name="password"
                                       value="{{ old('password') }}" required=""
                                       placeholder="Mật khẩu">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Đăng kí</button>
                            </div>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </div>

@endsection
