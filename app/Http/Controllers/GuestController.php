<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        $data1 = Article::orderBy('id','desc')->paginate(2);
        $data2 = Article::orderBy('id','desc')->paginate(3);
        $data3 = Article::orderBy('id','desc')->paginate(4);
        return view('pages.index',compact('data1','data2','data3'));
    }
}
