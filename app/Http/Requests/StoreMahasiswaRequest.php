<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            "id" => [
                'required'
            ],
            "nama" => [
                'required'
            ],
            "email" => [
                'required'
            ],
            "nim" => [
                'required'
            ],
            "kode_prodi" => [
                'required'
            ],
            "kelas_id" => [
                'required'
            ],
            "jenis_kelamin" => [
                'required',
                'in:Laki-laki,Perempuan'
            ],
        ];
    }
}
