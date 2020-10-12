@extends('Layouts.Admin.index')

@section('page_title')
    Quản lý Tài khoản
@endsection

@section('table')
    Tài khoản
@endsection

@section('main')
<a href="{{ route('nguoidung.create')}}" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div id="dataTable_wrapper" class="dataTables_wrapper no-footer">
    <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
            <tr role="row">
                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="MaAD: kích hoạt để sắp xếp cột giảm dần" style="width: 27px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Đất đai</font>
                    </font>
                </th>
                <th scope="col" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Account: kích hoạt để sắp xếp cột tăng dần" style="width: 63px;">Tài khoản</th>
                <th scope="col" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="SDT: kích hoạt để sắp xếp cột tăng dần" style="width: 90px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">SDT</font>
                    </font>
                </th>
                <th scope="col" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Email: kích hoạt để sắp xếp cột tăng dần" style="width: 185px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">E-mail</font>
                    </font>
                </th>
                <th scope="col" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Giới tính: kích hoạt để sắp xếp cột tăng dần" style="width: 30px;">Giới tính</th>
                <th scope="col" class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Quyền hạn: kích hoạt để sắp xếp cột tăng dần" style="width: 48px;">Quyền hạn</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="#: kích hoạt để sắp xếp cột tăng dần" style="width: 43px;">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">#</font>
                    </font>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr role="row" class="odd">
                <th scope="row" class="sorting_1">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">1</font>
                    </font>
                </th>
                <td>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">duongls2ls</font>
                    </font>
                </td>
                <td>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">0976942493</font>
                    </font>
                </td>
                <td>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">duongls2ls@gmail.com</font>
                    </font>
                </td>
                <td>Nam</td>
                <td>
                    Quản trị viên </td>
                <td>
                    <a href="{{ route('nguoidung.show', ['nguoidung' => 1])}}" type="button" class="btn btn-success">Xem</a>
                    <a href="{{ route('nguoidung.edit', ['nguoidung' => 1])}}" type="button" class="btn btn-warning">Sửa</a>
                    <a href="{{ route('nguoidung.destroy', ['nguoidung' => 1])}}" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection