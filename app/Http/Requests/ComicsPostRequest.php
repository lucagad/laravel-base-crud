<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsPostRequest extends FormRequest
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
            'title'=> 'required|max:60|min:3',
            'type'=> 'required|max:25|min:3',
            'image'=> 'required|max:255|min:6',
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Il campo titolo è obbligatorio',
            'title.max' => 'Il campo titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il campo titolo deve avere minimo :min caratteri',
            'type.required' => 'Il campo type è obbligatorio',
            'type.max' => 'Il campo type deve avere al massimo :max caratteri',
            'type.min' => 'Il campo type deve avere minimo :min caratteri',
            'image.required' => 'Il campo URL immagine è obbligatorio',
            'image.max'=> 'Il campo URL immagine deve avere al massimo :max caratteri',
            'image.min'=> 'Il campo URL immagine deve avere minimo :min caratteri'
        ];
    }
}
