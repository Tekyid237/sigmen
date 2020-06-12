<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreinscriptionStore extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'branch' => 'required',
            'level' => 'required',
            'sup_infos' => 'nullable|string',
        ];
    }
}
