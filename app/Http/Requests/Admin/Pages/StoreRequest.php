<?php

namespace App\Http\Requests\Admin\Pages;

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
            'name' => 'required|string|min:3',
            'slug' => 'unique:pages,slug',
            'description' =>  'required|string|min:3',
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'İsim',
            'slug' => 'Slug( örn: özay-güneş-enerji )',
            'description' => 'Açıklama',
        ];
    }
}
