@extends("frontend.master")
@section("content")

    <div class="ui padded grid">
        <div class=" wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="eight wide large eight wide computer eight wide tablet sixteen wide mobile column">
                    <div class="wm-module wm-post wm-limit-img">
                        <p><img src="http://quickfood.weba.vn/web/shop/images/quickfood/hinhanh/Untitled-1_2.png" alt=""
                                width="184" height="67"></p>
                        <div class="wm-module wm-free-text detail-f">
                            <div class="content">
                                <div class="f-contact-item">Địa chỉ: Mê Linh, Mê Linh, Hà Nội</div>
                                <div class="f-contact-item">Điên thoại: (84) 965 699 154</div>
                                <div class="f-contact-item">Gmail: Thanhgiang0698@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eight wide large eight wide computer eight wide tablet sixteen wide mobile column">
                    <!-- Thư viện js/css -->

                    <!-- Khởi tạo cấu hình -->

                    <!-- Xử lý logic php -->

                    <!-- Bẫy lỗi form -->

                    <!-- Form nhập liệu -->
                    <form action="{{ route('post_contact') }}" method="post" name="1" class="ui form warning">
                        @csrf
                        <div class="field"></div>
                        <div class="required field"><label for="txtName">Full name / Họ tên</label>
                            <input type="text" name="name" value="" placeholder="" required>
                        </div>
                        <div class="required field"><label for="txtEmail">Email</label>

                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="email">

                        </div>
                        <div class="required field"><label for="txtPhone">Telephone / Điện thoại</label>
                            <input type="text" name="phone" class="form-control" required="required"
                                   placeholder="Số điện thoại">
                        </div>
                        <div class="field"><label for="txtTitle">Tiêu đề</label>
                            <input type="text" name="txtContact_title[value]" value="" placeholder="">
                            <input type="hidden" name="txtContact_title[required]" value="">
                        </div>
                        <div class="field"><label>content / Nội dung</label>

                            <textarea type="text" class="clsipa" name="message" placeholder="Nội dung góp ý"
                                      rows="10"></textarea>

                        </div>

                        <button type="submit" class="ui huge submit primary button" name="btn-submit-contact">Gửi liên
                            hệ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
