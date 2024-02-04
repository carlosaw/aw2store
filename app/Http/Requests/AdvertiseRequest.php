<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertiseRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'photos.*' => 'required',
            'title' => 'required|min:8|max:255',
            'slug' => 'min:8|max:255|nullable',
            'price' => 'required|numeric',
            'negotiable' => 'required|boolean',
            'description' => 'required|min:6|max:255',
            'contact' => 'required|numeric',
            'views' => 'nullable',
            'user_id' => 'nullable',
            'state_id'=> 'nullable',
            'category_id' => 'required',
        ];
    }
}
