<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'producto' => 'required',
            'descripcion' => 'required',
            'RFC' => 'required',
            'material' => 'required',
            'Foto' => 'mimes:jpg,jpeg,png|max:3000',
            'kilataje' => 'required',
            'precio' => 'required|Numeric',
            'id_cat' => 'required|integer',
            'id_subcategoria' => 'integer|integer'
        ];
    }

    public function attributes()
    {
        return [
            'producto' => 'Producto',
            'descripcion' => 'Descripción',
            'RFC' => 'RFC',
            'material' => 'Material',
            'Foto' => 'Foto',
            'kilataje' => 'Kilataje',
            'precio' => 'Precio',
            'id_cat' => 'Categoría',
            'id_subcategoria' => 'Subcategoría'
        ];
    }
}
