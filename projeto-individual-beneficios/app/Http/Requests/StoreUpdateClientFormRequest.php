<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClientFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'code' => 'required|string|max:10|min:5',
            'name' => 'required|string|max:50|min:3',
            'email' => [
                'required',
                'email',
                // 'unique:users,email,{id},id',
            ],
            'phone1' => [
                'min:8',
                'max:11'
            ],
            'phone2' => [
                'min:8',
                'max:11'
            ],
            'image' => [
                'file',
                'mimes:jpeg,png,jpg,svg,bmp,pdf'
            ]

        ];

        if($this->method('PUT')){
            $rules['password'] = [
                'nullable',
                'min:4',
                'max:12'
            ];
        }
        return $rules;
    }
}
