<?php

namespace App\Http\Requests;

// use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Override;

class PortalRequest extends FormRequest
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
            "tahun_ajaran_id" => ['required'],
            'waktu_mulai' => ['required', 'before:waktu_selesai'],
            'waktu_selesai' => ['required', 'after:waktu_mulai']
        ];
    }

    #[Override]
    public function messages()
    {
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            'waktu_mulai.before' => ":attribute tidak boleh lebih besar dari waktu selesai!",
            "waktu_selesai.after" => ":attribute tidak boleh lebih kecil dari waktu mulai!"
        ];
    }
    #[Override]
    public function attributes()
    {
        return [
            'waktu_mulai' => "Waktu mulai",
            'waktu_selesai' => "Waktu selesai",
            "tahun_ajaran_id" => "Tahun ajaran"
        ];
    }
}
