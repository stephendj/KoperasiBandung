<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Admin;
use App\Http\Requests\CreateAdminRequest;
use Auth;

class AdminController extends Controller {

	public function showLogin() {
		return view('login');
	}

	public function doLogin(CreateAdminRequest $request) {
		
		if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']]))
	    {
	    	$role = Admin::find(Auth::id())->role;
	    	if($role !== 'admin') {
	    		Auth::logout();
	    	} else {
	    		return redirect('admin/ajuan');
	    	}
	    }

	    return redirect()->back()->withErrors([
	        'error' => 'These credentials do not match our records.',
	    ])->withInput(Input::except('password'));
		return redirect('admin/ajuan');
	}

	// /**
	//  * Display a listing of the resource.
	//  *
	//  * @return Response
	//  */
	// public function index()
	// {
	// 	//
	// }

	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function create()
	// {
	// 	//
	// }

	// /**
	//  * Store a newly created resource in storage.
	//  *
	//  * @return Response
	//  */
	// public function store()
	// {
	// 	//
	// }

	// /**
	//  * Display the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function show($id)
	// {
	// 	//
	// }

	// /**
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function edit($id)
	// {
	// 	//
	// }

	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function update($id)
	// {
	// 	//
	// }

	// /**
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	//  */
	// public function destroy($id)
	// {
	// 	//
	// }

}
