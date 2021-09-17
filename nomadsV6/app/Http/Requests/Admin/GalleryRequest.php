<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

//php artisan make:request Admin\\TravelPackageRequest
class GalleryRequest extends FormRequest
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
            // membuat data travel_packages_id ada didalam table travel_packages
            'travel_packages_id' => 'required|integer|exists:travel_packages,id',
            'image' => 'nullable|image'
        ];
    }
}
