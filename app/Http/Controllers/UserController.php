<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function getLogin(){
        return view('master');
    }

    public function postLogin(){
        return 'postLogin';
    }

    public function getRegister(){
    	return 'getRegister';
    }

    public function postRegister(){
    	return 'postRegister';
    }

    public function logout(){
    	return 'logout';
    }
}
