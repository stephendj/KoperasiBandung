<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAjuanBentukRequest extends Request {

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
			'id_pengaju' 	=> 'required',
		    'email'   		=> 'required|email',
		    'nama_koperasi' => 'required|unique:ppl_koperasi_koperasis,nama',
		    'jenis_koperasi'=> 'required',
		    'file'			=> 'required|max:2048|mimes:zip,rar'
		];
	}

}
