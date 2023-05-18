<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarRequest extends FormRequest
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
        'avatar' => 'required|image|max:20480',

        ];
    }

    public function messages(): array { 
        return [
            'avatar.required' => 'Inserisci una foto',
            'avatar.image' => 'Inserisci il formato richiesto(jpeg,png,ecc...)',
            'avatar.max' => 'Il file inserito è troppo grande',
        ];
    }
}
