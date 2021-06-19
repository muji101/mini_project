<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:5|max:25',
            'email'=> 'required|min:5|max:25|email:rfc,dns|unique:users,email',
            'password'=> 'required|min:5|max:25|confirmed',
            'image_file'=> 'required|mimes:jpg,jpeg,png,svg,bmp'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
            'image.required' => 'Nama wajib di isi',
        ];
    }
}
