<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function showArticles(){
		return view('articles/articles')
			->with(['title' => 'Home']);
	}

}
