@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="mb-3">Sửa chức vụ</h2>
                <form action="{{ route('role.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="" class="form-label">Tên chức vụ</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $data->name }}">
                    </div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                     @enderror
                     <div class="mb-3">
                        <label for="" class="form-label">Mô tả </label>
                        <input type="text" class="form-control" name="description" value="{{ $data->description }}">
                    </div>
                        @error('Slug')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror

                    <div class="mb-3">
                        <div class="card-body">
                            @foreach ($permissions as $key => $value)
                            {{-- @for ($i = 0; $i < 4; $i++) --}}
                                <div class="list-group">
                                    <div class="list-group-item nested-1">
                                        <span class="text-uppercase fw-bold">{{ $key }}</span>

                                        @foreach ($value as $item)
                                        {{-- @for ($i = 0; $i < 4; $i++) --}}
                                            <div class="mt-2 ">
                                                <div class="list-group-item nested-2">

                                                    <input type="checkbox" {{ in_array($item->id, $role_have_id_permission) ? 'checked' : '' }}
                                                        class="checkbox_child form-check-input"
                                                        name="permission_id[]" value="{{ $item->id }}">
                                                    <span>{{ $item->Slug }}</span>
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
                        <button type="submit" class="btn btn-warning">Sửa chức vụ</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
