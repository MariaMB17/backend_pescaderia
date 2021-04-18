<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ProductoStoreRequest extends FormRequest
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
            'prod_desc_corta' => 'required|string|max:255',
            'prod_tipo_id' =>  'required|string|max:4',
            'prod_cat_id' =>  'required|string|max:4',
            'prod_empresa_id' =>  'required|string|max:4'
        ];
    }
}
