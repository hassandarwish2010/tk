<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
          'en_name' => 'required|string|max:191|min:2',
          'ar_name' => 'required|string|max:191|min:2',
          'en_details' => 'required|min:2',
          'image' => 'image|max:5000',
      ];
    }
}
