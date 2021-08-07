@extends("frontend.master")
@section("content")
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <div class="row">


        <div class="col-md-5 col-lg-offset-3" style="margin-top: 30px; margin-bottom: 130px">
            @include("messages")
            <div class="content-box_contact conatct_right">
                <form name="FormDatHang" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="contact_bottom">

                        <div class="input form-group">
                            <input type="text" class="clsip form-control" name="name" required=""
                                   placeholder="Họ và tên">
                        </div>
                        <div class="clear"></div>


                        <div class="input form-group">
                            <input type="email" class="clsip form-control" name="email" required="" placeholder="Email">
                        </div>
                        <div class="clear"></div>

                        <div class="input form-group">
                            <input type="password" class="clsip form-control" name="password" required=""
                                   placeholder="Mật khẩu">
                        </div>


                        <div class="input form-group"><input type="submit" name="frmSubmit" id="frmSubmit"
                                                             class="btn-gui btn btn-success"
                                                             value="Đăng kí">
                        </div>
                        <div class="clear"></div>
                    </div>

                </form>
            </div>
        </div>
        <div class="clear" style="clear: both"></div>
    </div>
@endsection
