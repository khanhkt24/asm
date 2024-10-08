@extends('backend.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('register') }}" class="btn btn-success float-end">Đăng ký</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                {{-- <a href="{{ routei('login') }}">Register</a> --}}
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <thead>
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Quyền điều khiển</th>

                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                                @foreach ($item->roles as $value)
                                   <span class="badge bg-primary">{{ $value->name }}</span>
                                @endforeach
                            </td>

                            <td class="d-flex gap-1">
                                <a href="{{ route('user.edit',$item->id) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('user.destroy',$item->id) }}" method="post" href="">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are U sure ?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
