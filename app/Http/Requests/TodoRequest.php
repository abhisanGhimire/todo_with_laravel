<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'How lazy are you ? Just give me some title!',
            'description.required' => 'OK! Well played, now give me description of your task!',
        ];
    }
}
