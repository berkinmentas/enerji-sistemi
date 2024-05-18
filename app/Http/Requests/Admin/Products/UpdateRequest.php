<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_category_id' => 'required|exists:product_categories,id',
            'name' => 'required|string|min:3',
            'description' =>  'required|string|min:3',
            'sub_name' => 'required|string|min:3',
            'hot_water_capacity' => 'string|nullable',
            'cold_water_capacity' => 'string|nullable',
            'internal_boiler_thickness' => 'string|nullable',
            'outer_boiler_thickness'=> 'string|nullable',
            'tube_length'=> 'string|nullable',
            'outer_tube_diameter'=> 'string|nullable',
            'inner_tube_diameter'=> 'string|nullable',
            'glass_thickness'=> 'string|nullable',
            'tube_reflectance_ratio' => 'string|nullable',
            'empty_tube_temperature' => 'string|nullable',
            'tube_material' => 'string|nullable',
            'vacuum' => 'string|nullable',
            'heat_loss_coefficient' => 'string|nullable',
            'light_absorption' => 'string|nullable',
            'surface_coating'=> 'string|nullable',
        ];
    }
    public function attributes(): array
    {
        return [
            'product_category_id' => 'Ürün Kategorisi',
            'name' => 'İsim',
            'description' => 'Açıklama',
            'sub_name' => 'Alt Başlık',
            'hot_water_capacity' => 'Sıcak Su Kapasitesi',
            'cold_water_capacity' => 'Soğuk Su Kapasitesi',
            'internal_boiler_thickness' => 'İç Kazan Kalınlığı :',
            'outer_boiler_thickness'=> 'Dış Kazan Kalınlığı',
            'tube_length'=> 'Tüp Uzunluğu',
            'outer_tube_diameter'=> 'Dış Tüp Çapı',
            'inner_tube_diameter'=> 'İç Tüp Çapı',
            'glass_thickness'=> 'Cam Kalınlığı',
            'tube_reflectance_ratio' => 'Tüp Yansıma Oranı',
            'empty_tube_temperature' => 'Boş Tüp Sıcaklık',
            'tube_material' => 'Tüp Malzemesi',
            'vacuum' => 'Vakum',
            'heat_loss_coefficient' => 'Isı Kayıp Katsayısı',
            'light_absorption' => 'Işık Apsorp Etme',
            'surface_coating'=> 'Yüzey Kaplama',
        ];
    }
}
