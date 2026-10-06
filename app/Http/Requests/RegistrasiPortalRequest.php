<?php

namespace App\Http\Requests;

// use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class RegistrasiPortalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'portal_id' => ['required'],
            'tipe' => ['required'],
            'sekolah_id' => ['required'],
            "nama_kelompok" => ['required_if:tipe,Kelompok']
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak oleh kosong",
            "nama_kelompok.required_if" => ":attribute wajib diisi jika registrasi berkelompok!"
        ];
    }


    #[Override]
    public function attributes()
    {
        return [
            "portal_id" => "Portal",
            "tipe" => "Tipe",
            "sekolah_id" => "Sekolah",
            "nama_kelompok" => "Nama Kelompok"
        ];
    }
}
