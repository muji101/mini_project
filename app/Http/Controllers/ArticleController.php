<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
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
        //eager loading = with()
        $data = Article::with(['user', 'category'])->get();
        // dd($data->toArray());

        return view('articles.index',compact('data'));
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
    public function store(ArticleRequest $request)
    {
        //cara 1
        // $image = $request->file('image_file');
        // $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        // $image->move(public_path('profile'), $new_name_image);
        // $request->merge([
        //     'image' => $new_name_image
        // ]);
        

        //cara 2
        $image_file = $this->uploadImage($request->file('image_file'));

        $request->merge([
            'image' => $image_file
        ]);

        Article::create($request->all());
        return redirect()->route('article.index')->with('sukses-store', 'Data berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::find($id);

        return view('articles.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
        $categories = Category::all();
        $users = User::all();
        return view('articles.edit', compact('articles','categories','users'));
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
        $data = Article::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required'
        ]);

        // dd($request->all());
        
        //menghapus sekalian mengaupload bila perlu
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $data->image
            ]);
        }else {
            $this->removeImage($data->image);
            $image_file = $this->uploadImage($request->image_file);
            $request->merge([
                'image' => $image_file
            ]);
        }


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
        $data = Article::findOrFail($id);
        $this->removeImage($data->image);
        $data->delete();

        return back();
    }
    //mengupload gambar
    public function uploadImage($image)
    {
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
        
    }
    
    //unlink buat menghapus file
    public function removeImage($image)
    {   
        if (file_exists('profile/'. $image)){
        unlink('profile/'. $image);
        }
    }
}
