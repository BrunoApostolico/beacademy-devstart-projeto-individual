<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDependentFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'name' => 'required|string|max:50|min:3',
        ];

        return $rules;
    }
}
