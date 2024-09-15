@extends('backend.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('permission.create') }}" class="btn btn-success float-end">Thêm quyển điều khiển</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                {{-- <a href="{{ routei('login') }}">Register</a> --}}

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif

                <thead>
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>Tên quyền</th>
                        <th>Đường dẫn</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->Slug }}</td>
                            <td>{{ $item->description }}</td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('permission.edit',$item->id) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('permission.destroy',$item->id) }}" method="post" href="">
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
