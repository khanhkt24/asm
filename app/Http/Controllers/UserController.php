<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listUser = User::with('roles')->get();
        // dd( $listUser);

        return view('backend.users.listUser', ['list' => $listUser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = User::findOrFail($id);
        $listRole = Role::all();

        return view('backend.users.edit',compact('data' , 'listRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
        ];

        // Tìm người dùng và cập nhật thông tin
        $user = User::findOrFail($id);
        $user->update($data);

        // Sau khi cập nhật, gọi phương thức roles() trên đối tượng người dùng
        $user->roles()->attach($request->roles);

        return redirect()->route('user.index')->with('succcess','Sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('succcess','Xóa thành công');
    }
}
