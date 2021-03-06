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

    public function content($id)
    {
        $data = Article::findOrFail($id);
        $data2 = Article::orderBy('id','desc')->paginate(4);

        return view('pages.content',compact('data','data2'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $articles = Article::where('content', 'like', '%'.$search.'%')->orderBy('id','desc')->paginate(3);
        return view('pages.search', ['articles' => $articles]);
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->search;
    //     $articles = Article::where('title', 'like', "%" . $keyword . "%")->paginate(5);
    //     return view('pages.search', compact('articles'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    
}
