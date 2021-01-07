<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'name' => 'required|unique:cars,name' . $this->route('car')->id,
            'maxSpeed' => 'required|min:2|max:20',
            'tank' => 'required',
            'photo' => 'required',
            'prize' => 'required',
        ];
    }
}
