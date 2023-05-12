<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name' => 'required|unique:teams,name',
            'players' => 'required|array|size:5'
        ];
    }

    public function messages(): array { 
        return [
            'name.required' => 'Inserisci una nome per il team',
            'name.unique' => 'Questo nome è stato già scelto',

            'players.required' => 'Scegli 5 giocatori',
            'players.size' => 'Scegli 5 giocatori'

        ];
    }
}
