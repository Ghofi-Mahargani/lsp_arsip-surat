<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArsipStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'no_surat' => ['required'],
            'kategori_id' => ['required'],
            'judul_arsip' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'no_surat.required' => 'Kolom nomor surat wajib diisi!',

            'kategori_id.required' => 'Kolom kategori wajib diisi!',

            'judul_arsip.required' => 'Kolom bagian wajib diisi!'
            
        ];
    }
}
