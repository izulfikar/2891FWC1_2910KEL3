<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class adminRequest extends Request
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
        'nama'=>'required',
        'pengguna_id'=>'required'
        ];

        if ($this->is('admin/tambah')) {
        }
        return $validasi;
    }
}
