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
            'name' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'birth-date' => 'required|date',
            'branch' => 'required',
            'level' => 'required',
            'sup-infos' => 'nullable|string',
        ];
    }
}
