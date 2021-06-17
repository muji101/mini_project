<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        $users = User::all();

        return view('articles.index',['articles'=> $articles, 'categories'=> $categories, 'users'=> $users]);
        // return view('articles.index', compact('categories','articles','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::get();
        $categories = Category::all();
        $users = User::all();


        // return view('articles.create',['articles'=> $articles]);
        return view('articles.create', compact('categories','articles','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:10|max:1000',
            'image_file' => 'required',
            'user_id',
            'category_id'
        ]);

        $image = $request->file('image_file');
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        $request->merge([
            'image' => $new_name_image
        ]);

        Article::create($request->all());
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Article::find($id);
        return view('articles.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Article::find($id);
        
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:10|max:1000',
            'image' => 'required',
            'user_id',
            'category_id'
        ]);

        $data->update($request->all());
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::find($id);
        $data->delete();
        return back();
    }
}
