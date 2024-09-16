<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listrole = Role::all();
        // dd( $listNew);

        return view('backend.role.index', ['list' => $listrole]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = Permission::all()->groupBy(function ($permission) {
            return explode('.', $permission->Slug)[0];
        });

        return view('backend.role.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {

        // $data = [
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        // ];

        // $data = $request->except('permission_id');
        // $listPermission = $request->permission_id;

        // $role = Role::create($data);
        // $role->permissions()->sync($listPermission);

        // return redirect()->route('role.index')->with('succcess','Thêm thành công');
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // Lưu vai trò mới
        $role = Role::create($data);

        // Đồng bộ quyền với vai trò
        $listPermission = $request->permission_id; // Danh sách ID quyền

        // Sử dụng sync để đồng bộ
        $role->permissions()->sync($listPermission);

        return redirect()->route('role.index')->with('success', 'Thêm thành công');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Role::findOrFail($id);

        $permissions = Permission::all()->groupBy(function ($permission) {
            return explode('.', $permission->Slug)[0];
        });

        // $role_have_id_permission = Role::pluck('permission_id')->toArray();
        $role_have_id_permission = $data->permissions()->pluck('permission_id')->toArray();
        // dd($role_have_id_permission);
        return view('backend.role.edit', compact('data', 'permissions', 'role_have_id_permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, string $id)
    {


        $role = Role::findOrFail($id);

        // Dữ liệu cần cập nhật
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        // Bắt đầu transaction
        DB::beginTransaction();
        try {
            // Cập nhật vai trò
            $role->update($data);
            // Đồng bộ quyền với vai trò
            $listPermission = $request->permission_id;
            $role->permissions()->sync($listPermission);
            // Commit transaction
            DB::commit();
        } catch (Exception $e) {
            // Rollback nếu có lỗi
            DB::rollBack();
            throw new Exception($e->getMessage());
        }

        return redirect()->route('role.index')->with('success', 'Sửa thành công');

    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->permissions()->sync([]);
        $role->delete();

        return redirect()->route('role.index')->with('succcess', 'Xóa thành công');
    }
}
