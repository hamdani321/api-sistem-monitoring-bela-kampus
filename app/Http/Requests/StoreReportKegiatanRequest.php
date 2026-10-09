<?php

namespace App\Http\Requests;

// use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreReportKegiatanRequest extends FormRequest
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
            "registrasi_id" => ['required'],
            "nama_pic" => ['required'],
            "nomor_hp_pic" => ['required', 'numeric'],
            "video" => [''],
            "deskripsi" => ['required'],
            "foto" => ['required', 'file', 'mimes:jpg,jpeg,png'],
        ];
    }
}
