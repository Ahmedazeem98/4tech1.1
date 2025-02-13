<?php

namespace App\Http\Requests\BackEnd\Product;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'name' => ['required','string','min:3','max:25'],
            'description' => ['required','string','min:10','max:100'],
            'colors' => ['required'],
            'discount' => ['sometimes','integer'],
            'price' => ['required','regex:/^\d*(\.\d{2})?$/'],
            'image' => ['required','image']
        ];
    }
}
