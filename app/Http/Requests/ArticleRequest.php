<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'         => 'required|string|min:10|max:200',
            'content'       => 'required|min:10|max:1000',
            'image_file'    => 'required',
            'user_id'       => 'required',
            'category_id'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Judul wajib di isi',
            'title.string'          => 'Judul harus di isi dengan teks',
            'title.min'             => 'Judul minimal 10 karakter',
            'title.max'             => 'Judul maksimal 200 karakter',
            'content.required'      => 'Content wajib di isi',
            'image_file.required'   => 'Gambar wajib di isi',
            'user_id.required'      => 'Penulis wajib di isi',
            'category_id.required'  => 'Kategori wajib di isi'
        ];
    }
}
