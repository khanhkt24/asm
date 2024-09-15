@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Thêm chức vụ</h2>
                <form action="{{ route('role.store') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Tên chức vụ</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mô tả </label>
                        <input type="text" class="form-control" name="description" id="" value="{{ old('description') }}">
                    </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="card-body">
                        @foreach ($permission as $key => $value)
                        {{-- @for ($i = 0; $i < 4; $i++) --}}
                            <div class="list-group">
                                <div class="list-group-item nested-1">
                                    <input type="checkbox" class="checkbox_wrapper form-check-input">
                                    <span class="text-uppercase fw-bold">{{ $key }}</span>

                                    @foreach ($value as $item)
                                    {{-- @for ($i = 0; $i < 4; $i++) --}}
                                        <div class="mt-2 ">
                                            <div class="list-group-item nested-2">
                                                <input type="checkbox" class="checkbox_child form-check-input"
                                                    name="permission_id[]" value="{{ $item->id }}">
                                                <span>{{ $item->name }}</span>
                                            </div>
                                        </div>
                                    {{-- @endfor --}}

                                    @endforeach
                                </div>
                            </div>
                        {{-- @endfor --}}

                        @endforeach
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
