<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePertanyaanRequest extends Request {

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
			'pertanyaan_user' => 'required',
	    	'nama' => 'required',
	    	'email' => 'required|email'
		];
	}

}
