<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $data = Article::all();
        return view('home')->with('article', $data);
    }
    public function detail($id){
        $data = DB::table('articles')->where('id',$id)->get();
        return view('detail')->with('article', $data);
    }
}
