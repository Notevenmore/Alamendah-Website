<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'author' => ['required'],
            'img' => ['required', 'mimes:jpg,bmp,png'],
            'content' => ['required'],
        ];
    }

    public function messages() :array 
    {
        return [
            'required' => ':attribute harus ditambahkan!',
            'img.mimes' => 'Tipe file yang diupload harus jpg, bmp, atau png',
        ];
    }
}