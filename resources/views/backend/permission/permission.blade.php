@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Thêm quyền điều khiên mới</h2>
                <form action="{{ route('permission.store') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Tên quyền điều khiển </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Đường dẫn </label>
                        <input type="text" class="form-control" name="Slug" id="" value="{{ old('Slug') }}">
                        @error('Slug')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả  </label>
                        <input type="text" class="form-control" name="description" id="" value="{{ old('description') }}">
                    </div>

                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
