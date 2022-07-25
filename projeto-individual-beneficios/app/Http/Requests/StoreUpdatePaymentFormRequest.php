<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePaymentFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'date_payment' => 'required',
        ];

        return $rules;
    }
}
