<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;
use App\User;
use App\Article;
use Hash;
use Auth;

class UserController extends Controller {

    public function getLogin(){
        return view('auth/login');
    }

    public function postLogin(){
    	$input = Request::all();

	 	$validator = Validator::make($input, 
	        [
	        	'username' => 'required|between:2,25',
	            'password' => 'required|min:6|alpha_dash',
	        ]
    	);

	 	if($validator->fails()){
        	return redirect()->route('getLogin')->withInput();
        }

    	if(Auth::attempt(['username' => $input['username'], 'password' => $input['password']])){
    		return redirect()->route('articles');
    	}

    	return redirect()->route('getLogin')->withInput();
    }

    public function getRegister(){
    	return view('auth/register')->with('title', 'Register');
    }

    public function postRegister(){
    	$input = Request::all();

        $validator = Validator::make($input, 
            [
            	'username' => 'required|between:2,25',
            	'email' => 'required|max:50|email|unique:users',
                'password' => 'required|min:6|alpha_dash',
            ]
        );

        if($validator->fails()){
        	return redirect()->route('getRegister')->withInput();
        }

    	$user = new User;
    	$user->username = $input['username'];
    	$user->email = $input['email'];
    	$user->password = Hash::make($input['password'], ['length' => 60]);
    	$user->save();

    	return redirect()->route('articles');
    }

    public function logout(){
    	Auth::logout();

    	return redirect()->back();
    }

    public function showUser($username){
    	$user = User::where('username', '=', $username)->firstOrFail();

    	return view('user')->with('user', $user);
    }
}
