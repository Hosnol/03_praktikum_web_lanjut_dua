<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function blog(){
        //$content = DB::table('contents')->first();
        return view('blog',['content'=> Content::index()]);
    }

    public function post(){
        return view('post-details');
    }

    public function contact(){
        return view('contact');
    }
}
