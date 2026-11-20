<?php

namespace App\Http\Requests;

// use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class ReportKegiatanRequest extends FormRequest
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
            'foto' => ['required', 'array', 'min:1'],
            'foto.*' => ['required', 'file', 'mimes:jpg,jpeg,png'],
        ];
    }

    public function messages(): array
{
    return [
        'registrasi_id.required' => 'Registrasi wajib dipilih.',

        'nama_pic.required' => 'Nama penanggung jawab wajib diisi.',

        'nomor_hp_pic.required' => 'Nomor HP penanggung jawab wajib diisi.',
        'nomor_hp_pic.numeric' => 'Nomor HP penanggung jawab harus berupa angka.',

        'deskripsi.required' => 'Deskripsi kegiatan wajib diisi.',

        'foto.required' => 'Foto kegiatan wajib diunggah.',
        'foto.array' => 'Data foto harus berupa kumpulan file.',
        'foto.min' => 'Minimal harus mengunggah 1 foto.',

        'foto.*.required' => 'Setiap foto wajib diunggah.',
        'foto.*.file' => 'File foto yang diunggah tidak valid.',
        'foto.*.mimes' => 'Format foto harus berupa JPG, JPEG, atau PNG.',
    ];
}

 
}
