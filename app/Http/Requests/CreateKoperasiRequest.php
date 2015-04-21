<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateKoperasiRequest extends Request {

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
			'id_pendiri'		=> 'required',
		    'nama' 				=> 'required|unique:koperasis,nama',
		    'jenis_koperasi'	=> 'required',
		    'alamat'			=> 'required',
		    'no_telepon' 		=> 'required',
		    'deskripsi'   		=> 'required'
		];
	}

}
