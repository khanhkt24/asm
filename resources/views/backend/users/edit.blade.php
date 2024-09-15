@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Sửa thông tin tài khoản người dùng</h2>
                <form action="{{ route('user.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $data->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email người dùng</label>
                        <input type="text" class="form-control" name="email" id="" value="{{ $data->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" value="{{ $data->type }}" id="" placeholder="Số lượt xem ">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" multiple aria-label="Default select example" name="roles[]">

                            @foreach ($listRole as $listRoles)

                                    <option value="{{ $listRoles->id }}">{{ $listRoles->name }}</option>

                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Sửa người dùng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
