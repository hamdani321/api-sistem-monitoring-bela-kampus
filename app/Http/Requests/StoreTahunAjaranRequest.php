<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class StoreTahunAjaranRequest extends FormRequest
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
            "nama" => ["required"],
            "tahun" => ["required", 'numeric'],
            "tipe" => ['required', 'in:Ganjil,Genap']
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            "tahun.numeric" => ":attribute harus berupa angka",
            "tipe.in" => ":attribute hanya boleh berupa Ganjil atau Genap"
        ];
    }

    #[Override]
    public function attributes()
    {
        return [
            "nama" => "Nama",
            "tahun" => "Tahun",
            "tipe" => "Tipe"
        ];
    }
}
