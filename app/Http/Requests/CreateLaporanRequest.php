<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateLaporanRequest extends Request {

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
			//
			'id_koperasi'		=> 'required',
		    'id_pengirim' 		=> 'required',
		    'tahun'				=> 'required',
		    'file'				=> 'required|max:2048|mimes:zip,rar'
		];
	}

}
