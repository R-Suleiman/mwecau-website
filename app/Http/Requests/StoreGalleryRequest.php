<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
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
            'thumbnail' => ['required', 'max:2048'],
            'name' => ['required'],
            'date' => ['nullable'],
        ];
        
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Kindly fill in Name of the  Gallery',
            'date.nullable' => "The date field can't be empty",
            'thumbnail.required' => 'The thumbnail for gallery is required',
            'thumbnail.image' => 'The thumbnail must be an image.',
            'thumbnail.mimes' => 'The thumbnail must be a file of type: jpeg, png, jpg, gif.',
            'thumbnail.max' => 'The thumbnail must not be greater than 2MB.',
        ];
    }
}
