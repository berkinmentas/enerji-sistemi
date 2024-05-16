<?php

namespace App\Http\Requests\Contacts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,12',
            'message' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
    public function attributes(): array
    {
        return [
            'email' => 'Mail',
            'phone' => 'Telefon Numarası',
            'message' => 'Mesaj',
        ];
    }
}
