<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => ['required', 'min:5', 'max:255'],
            'description' => ['required', 'min:20', 'max:255'],
            'imageCover' => ['required','image:jpeg,png,jpg,gif,svg','max:2048'],
            'genre' => ['required']
        ];
    }
}
