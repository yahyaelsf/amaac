<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStrategyRequest extends BaseFormRequest
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
            's_key' => [
                Rule::requiredIf(function () {
                    return !$this->filled('pk_i_id');
                }),
                Rule::unique('t_strategies', 's_key')->ignore($this->pk_i_id, 'pk_i_id'),
            ],
            's_description' => 'required|string',
             's_link' => 'required|string|max:255',
        ];


        return $rules;
    }
}
