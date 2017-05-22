<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class hasil_taniRequest extends Request
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
        'harga'=>'required',
        'lahan_id'=>'required',
        'distributor_id'=>'required'

        ];

        if ($this->is('hasil_tani/tambah')) {
        }
        return $validasi;
    }
}
