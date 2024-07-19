<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("fontend.home");
    }

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
    public function detailView(){
        return view("fontend.detail1");

    }
}
