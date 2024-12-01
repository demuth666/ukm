<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'npm' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'tingkat' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'ukm' => 'required',
            'alasan' => 'required',
        ];
    }
}
