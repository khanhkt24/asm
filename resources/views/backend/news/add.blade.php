@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Thêm tin mới</h2>
                <form action="{{ route('new.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Hình ảnh </label>
                        <input type="file" class="form-control" name="image" id=""
                            placeholder="Chọn hình ảnh">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tên của tin </label>
                        <input type="text" class="form-control" name="name" id=""
                            placeholder="Nhập tiêu đề ">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả ngắn </label>
                        <input type="text" class="form-control" name="title" id="" placeholder="Nhập mô tả ">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Lượt xem </label>
                        <input type="number" class="form-control" name="view" id="" placeholder="Số lượt xem ">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ngày nhập </label>
                        <input type="date" class="form-control" name="date_add" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nội dung </label>
                        <textarea class="form-control" name="content" rows="6" placeholder="Nội dung"> </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Danh mục </label>
                        <select class="form-select" name="category_id" rows="3">
                            @foreach ($cate as $item)
                                <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
