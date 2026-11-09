<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null && Auth::user()->hasRole("admin");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $mahasiswa = $this->route('mahasiswa');
        return [

            "nama" => [
                'required'
            ],
            "email" => [
                'required',
                Rule::unique('mahasiswa', 'email')->ignore($mahasiswa)
            ],
            "nim" => [
                'required',
                Rule::unique('mahasiswa', 'nim')->ignore($mahasiswa)
            ],
            "kode_prodi" => [
                'required'
            ],
            "kelas_id" => [
                'required'
            ],
            "jenis_kelamin" => [
                'required',
                'in:Laki-Laki,Perempuan'
            ],
            'password' => [
                'required',
                'confirmed'
            ],
            'password_confirmation' => [
                'required'
            ]
        ];
    }
}
