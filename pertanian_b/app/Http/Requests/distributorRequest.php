<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class distributorRequest extends Request
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
        'jenis'=>'required',
        'hp'=>'required',
        'no_rek'=>'required'

        ];

        if ($this->is('distributor/tambah')) {
        }
        return $validasi;
    }
}
