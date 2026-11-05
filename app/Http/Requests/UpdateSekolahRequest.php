<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Override;

class UpdateSekolahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user() != null && Auth::user()->hasRole(['admin']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'npsn' => ['required', 'numeric', Rule::unique('sekolah', 'npsn')->ignore($this->route('sekolah'))],
            'nama' => ['required'],
            'email' => ['required', 'email', Rule::unique('sekolah', 'email')->ignore($this->route('sekolah'))],
            'alamat' => ['required'],
            'telepon' => ['numeric'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ];
    }

    #[Override]
    public function messages()
    {
        // return parent::messages();
        return [
            "*.required" => ":attribute tidak boleh kosong!",
            'email.email' => ":attribute harus berupa email!",
            "*.unique" => ":attribute sudah digunakan",
            '*.numeric' => ":attribute harus berupa angka!"
        ];
    }
}
