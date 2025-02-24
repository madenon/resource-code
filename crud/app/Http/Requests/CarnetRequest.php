<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarnetRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:carnets',
            'contact' => 'required',
        ];
    }
    // public function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'success' => false,
    //         'error' => true,
    //         'message' => 'Erreur de validation de données',
    //         'errorList' => $validator->errors()
    //     ]));
    // }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'Le nom est  obligatoire',
    //         'email.required' => 'L email est  obligatoire',
    //         'contact.required' => 'Le contact est  obligatoire',

    //     ];
    // }
}
