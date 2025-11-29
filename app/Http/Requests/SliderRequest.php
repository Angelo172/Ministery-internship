<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'image' => $this->isMethod('post')
                ? 'required|image|mimes:jpg,jpeg,png|max:2248'
                : 'nullable|image|mimes:jpg,jpeg,png|max:2248',
            'status' => 'required|in:draft,actived,archived',
            'date' => 'required|date',
            //
        ];
    }
}
