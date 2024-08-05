@extends('backend.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('register') }}" class="btn btn-success float-end">Đăng ký</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>

                        <th>Chức vụ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                {{-- <form action="{{ route('new.destroy',$item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('bạn muốn xóa không ?')">Xóa</button>

                                </form> --}}
                                <a href="">
                                    <button class="btn btn-danger">Xóa</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
