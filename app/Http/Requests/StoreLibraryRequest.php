<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibraryRequest extends FormRequest
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
            'category_name' => ['required'],
            'name' => ['nullable'],
            'description' => ['nullable'],
            'link' => ['nullable']
        ];
    }
    public function messages(): array
    {
        return [
            'category_name.unique' => 'The Item category already exists on our records',
        ];
    }
}
