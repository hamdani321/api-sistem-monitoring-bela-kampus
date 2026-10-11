<?php

namespace App\Http\Requests;

// use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Override;

class RegistrasiPortalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null && Auth::user()->hasRole('mahasiswa');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    

    public function rules(): array
    {
        return [
            'portal_id' => [
                'required',
                'exists:portal,id',
            ],

            'tipe' => [
                'required',
                'in:Individu,Kelompok',
            ],

            'sekolah_id' => [
                'required',
            ],

            'anggota_registrasi' => [
                'required_if:tipe,Kelompok',
                'array',
            ],

            'anggota_registrasi.*.nim' => [
                'required',
                'distinct',
                Rule::unique('registrasi_anggota', 'nim_mahasiswa')->where('portal_id', $this->input('portal_id')),
            ],
        ];
    }

    // public function rules(): array
    // {
        
    //     return [
    //         'portal_id' => ['required'],
    //         'tipe' => ['required'],
    //         'sekolah_id' => ['required'],
    //         "anggota_registrasi" => ['required_if:tipe,Kelompok', 'array'],
    //         'anggota_registrasi.*' => ['required','distinct',
    //             Rule::unique('registrasi_anggota', 'nim_mahasiswa'),
    //         ],
    //     ];
    // }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak oleh kosong",
            "anggota_registrasi.required_if" => "masukan anggota kelompok jika tipe kegiatan adalah kelompok!",
            "anggota_registrasi.*.nim.unique" => "Mahasiswa dengan :attribute :input sudah terdaftar di registrasi lain!"
        ];
    }


    #[Override]
    public function attributes()
    {
        return [
            "portal_id" => "Portal",
            "tipe" => "Tipe",
            "sekolah_id" => "Sekolah",
            "nama_kelompok" => "Nama Kelompok",
            "anggota_registrasi.*.nim" => "NIM"
        ];
    }
}
