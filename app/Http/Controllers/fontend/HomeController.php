<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function index(){
    //     return view("fontend.home");
    // }

    public function aboutView(){
        return view("fontend.about1");
    }

    public function contactView(){
        return view("fontend.contact1");
    }
    public function tagView(){
        return view("fontend.tag1");
    }
    public function loginView(){
        return view("fontend.layouts.login");
    }
    // public function detailView(){
    //     return view("fontend.detail1");

    // }

    public function dashboard(){
            $query = DB::table('news')
            ->get();
            // dd($query);
            return view('fontend.home',['data'=>$query]);
    }

    public function detail($id){
        $data = News::findOrFail($id);
        return view("fontend.detail1",compact('data'));
    }
}
