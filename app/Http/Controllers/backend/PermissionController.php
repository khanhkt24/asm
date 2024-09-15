<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPermission = Permission::all();
        // dd( $listNew);

        return view('backend.permission.index', ['list' => $listPermission]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.permission.permission');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'Slug'=>$request->Slug,
            'description'=>$request->description,
        ];

        Permission::create($data);
        return redirect()->route('permission.index')->with('succcess','Thêm thành công');


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
        $data = Permission::findOrFail($id);
        return view('backend.permission.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, string $id)
    {
            $data = [
                'name'=>$request->name,
                'Slug'=>$request->Slug,
                'description'=>$request->description,
            ];
            
            Permission::findOrFail($id)->update($data);

            return redirect()->route('permission.index')->with('succcess','Sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::findOrFail($id)->delete();
        return redirect()->route('permission.index')->with('succcess','Xóa thành công');
    }
}
