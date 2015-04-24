<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditLaporanRequest extends Request {

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
			'permodalan'					=> 'required',
		    'kualitas_aktiva_produktif' 	=> 'required',
		    'manajemen'						=> 'required',
		    'efisiensi'						=> 'required',
		    'likuiditas' 					=> 'required',
		    'kemandirian_dan_pertumbuhan'	=> 'required',
		    'jatidiri_koperasi'				=> 'required'

		];
	}

}
