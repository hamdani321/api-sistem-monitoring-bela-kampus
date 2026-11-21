<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Override;

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
                'ends_with:@students.poltek-kampar.ac.id',
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
            // 'username' => [
            //     "required"
            // ],
            'password' => [
                'required',
                'confirmed'
            ],
            'password_confirmation' => [
                'required'
            ]
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            '*.unique' => ":attribute sudah digunakan!",
            'email.ends_with' => ":attribute harus diakhiri dengan @students.poltek-kampar.ac.id!",
            "jenis_kelamin.in" => ":attribute tidak boleh kosong!"
        ];
    }

    #[Override]
    public function attributes()
    {
        return [
            "nama" => "Nama",
            "email" => "Email",
            "nim" => "NIM",
            "kode_prodi" => "Prodi",
            "kelas_id" => "Kelas",
            "jenis_kelamin" => "Jenis Kelamin",
            'password' => "Password",
            'password_confirmation' => "Konfirmasi password"
        ];
    }
}
