<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLessonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'course_id' => ['required', 'integer', 'exists:courses,id'],
            'vido_url' => ['nullable', 'string'],
            'created_by' => ['required', 'integer', 'exists:users,id'],
            'updated_by' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
