<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.index',['users'=> $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //Request untuk menerima data kemudian ditampung di $request
        // dd($request->all());
        //vallidate memastikan data valid
        
        // $request->validate([
        //     'name'=> 'required|min:5|max:25',
        //     'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email',
        //     'password'=> 'required|min:5|max:25|confirmed',
        //     'image_file'=> 'required|mimes:jpg,jpeg,png,svg,bmp'
        // ]);
        
        // menyimpan file di storage
        // $request->image_file->store('public');

        // menyimpan file di public dengan nama folder profile
        // $image = $request->file('image_file');
        // $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        // $image->move(public_path('profile'), $new_name_image);
        // $request->merge([
        //     'image' => $new_name_image
        // ]);

        $image_file = $this->uploadImage($request->file('image_file'));

        $request->merge([
            'image' => $image_file
        ]);

        User::create($request->all());

        return redirect()->route('user.index')->with('sukses-store', 'Data berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);

        return view('users.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('users.edit', compact('data'));
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
        $data = User::find($id);
        if($request->password){
        $request->validate([
            'name'=> 'required|min:5|max:25',
            'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email,'.$id,
            'current_password' => 'required',
            'password' =>'required|min:5|confirmed',
            'image'
        ]);

        $request->merge([
            'password' => Hash::make($request->password)
        ]);

        }else{
            $request->validate([
                'name'=> 'required|min:5|max:25',
                'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email,'. $id,
                'image' => 'required'
            ]);
        }

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

        // $image_file = $this->uploadImage($request->file('image_file'));

        // $request->merge([
        //     'image' => $image_file
        // ]);

        
        

        if ($request->password) {
            $data->update($request->all());
        }else{
            $data->update($request->except('password'));
        }
        
        // if ($request->current_password == $data->password) {
        //     $data->update($request->all());
        // }else{
        //     return redirect()->back();
        // }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back();
    }

    public function uploadImage($image)
    {
        // $image = $request->file('image_file');
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
