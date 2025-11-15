<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends BaseFormRequest
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
        $rules = [
            's_title' => 'required|string|max:255',
            'i_price' => 'required|numeric',
            's_features' => 'required|string',
            'e_type' => 'required|in:Monthly,Quarterly,Yearly',
        ];


        return $rules;
    }
}
