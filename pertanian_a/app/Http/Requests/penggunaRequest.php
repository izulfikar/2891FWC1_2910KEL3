<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class penggunaRequest extends Request
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
        $validasi = [
        'username'=>'required',
        'password'=>'required',
        'level'=>'required'
        ];

        if ($this->is('pengguna/tambah')) {
        }
        return $validasi;
    }
}
