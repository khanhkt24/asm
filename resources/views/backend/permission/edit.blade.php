@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Sửa quyền điều khiển</h2>
                <form action="{{ route('permission.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="form-label">Tên quyền điều khiển</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $data->name }}">
                    </div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                    <div class="mb-3">
                        <label for="" class="form-label">Đường dẫn </label>
                        <input type="text" class="form-control" name="Slug" id="" value="{{ $data->Slug }}" >
                    </div>
                        @error('Slug')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả </label>
                        <input type="text" class="form-control" name="description" value="{{ $data->description }}">
                    </div>
                    <div class="mb-3">

                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning">Sửa quyền điều khiển</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
