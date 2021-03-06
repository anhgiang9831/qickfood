@extends('backend.master')

@section("title-page", "Quản lý liên hệ")
@section("title-description", "Danh sách liên hệ")
@section('content')
    <?php $open = "contact"?>
    <div class="row">
        <div class="col-md-12">
            @include("messages")

            <div class="table-responsive text-center">
                <div class="form-group">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">

                </div>
                <table id="product_table" class="table">
                    <thead>
                    <tr>
                        <th>#</th>

                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Nội dung</th>
                        <th>Ngày viết</th>

                        <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">

                    @foreach($contacts as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>

                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->message }}</td>

                            <td>{{  date('d/m/Y', strtotime($item->created_at))}}</td>
                            <td>

                                <a onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"
                                   href="{{ route("contact.delete", $item->id) }}" class="btn btn-xs  btn-danger"><i
                                        class="fa fa-trash"></i> Delete</a>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>

                {{ $contacts->links() }}
            </div>
        </div>
    </div>

@endsection
@section("script")
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(function () {
            $('.toggle-class').change(function () {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var post_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{  route("posts.change_status")}}",
                    data: {'status': status, 'post_id': post_id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            });
        });
    </script>
@endsection
