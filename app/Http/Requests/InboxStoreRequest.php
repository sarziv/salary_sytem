<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InboxStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'receiver' => 'required',
            'message' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'receiver.required' => 'No receiver information.',
            'message.required' => 'Message are missing.'
        ];
    }
}
