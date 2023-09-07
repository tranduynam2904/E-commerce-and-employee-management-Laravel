<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => ['required', 'email', 'unique:employee,email,' . $this->id , 'regex:/@gmail.com$/'],
            'age' => 'required|max:100',
            'gender' => 'required',
            'phone' => 'required',
            'occupation' => 'required',
            'password' => 'required',
        ];
    }
}