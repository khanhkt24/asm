<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewController extends Controller
{

    public $news;

    public function __construct()
    {
        $this->news = new News();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listNew = $this->news->getAll();
        // dd( $listNew);

        return view('backend.news.listNews', ['list' => $listNew]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('backend.layout.add');
        $cate = DB::table('categories')->get();

        return view('backend.news.add', ['cate' => $cate]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('uploads/new', 'public');
        } else {
            $fileName = null;
        }

        $dataInsert = [
            'image' => $fileName,

            'name' => $request->name,

            'title' => $request->title,

            'view' => $request->view,

            'date_add' => $request->date_add,

            'content' => $request->content,

            'category_id' => $request->category_id,
        ];

        $this->news->createNews($dataInsert);

        return redirect()->route('new.index');
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
        $editCtrl = $this->news->find($id);
        $cate = DB::table('categories')->get();

        if (!$editCtrl) {
            return redirect()->route('new.index');

        }

        return view('backend.news.update', ['editCtrl'=>$editCtrl,'cate' => $cate]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editCtrl = $this->news->find($id);

        if($request->hasFile('image')){

            if($editCtrl->image){
                Storage::disk('public')->delete($editCtrl->image);
            }

            $fileName = $request->file('image')->store('uploads/new', 'public');

        }else{

            $fileName = $editCtrl->image;

        }

        $dataUpdate = [
            'image' => $fileName,

            'name' => $request->name,

            'title' => $request->title,

            'view' => $request->view,

            'date_add' => $request->date_add,

            'content' => $request->content,

            'category_id' => $request->category_id,
        ];

        $editCtrl->updateNews($dataUpdate,$id);

        return redirect()->route('new.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $editCtrl = $this->news->find($id);


        if(!$editCtrl){
            return redirect()->route('new.index');
        }

        if($editCtrl->image){
            Storage::disk('public')->delete($editCtrl->image);
        }

        $editCtrl->delete();
        
        return redirect()->route('new.index');



    }
}
