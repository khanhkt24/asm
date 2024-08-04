@extends('backend.layout.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('new.create') }}" class="btn btn-success float-end">Thêm sản phẩm</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                    <h2>Danh sách Tin tức</h2>
                    <tr>
                        <th>Tên</th>
                        <th>Tiêu đề</th>
                        <th>Ảnh</th>
                        <th>Lượt xem</th>
                        <th>Ngày nhập</th>
                        <th>Nội dung</th>
                        <th>Danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ Storage::url($item->image) }}" alt="" width="200px" height="200px">
                            </td>
                            <td>{{ $item->view }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->date_add)->format('d/m/Y') }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->name_category }}</td>
                            <td>
                                <a href="{{ route('new.edit',$item->id) }}">
                                    <button class="btn btn-warning">Sửa</button>
                                </a>
                                <form action="{{ route('new.destroy',$item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('bạn muốn xóa không ?')">Xóa</button>

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
