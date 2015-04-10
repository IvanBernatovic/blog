<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller {

	public function show($id){
		$article = Article::findOrFail($id);

		return view('articles/article')->with(['article' => $article]);
	}

	public function showAll(){
		$articles = Article::latest()->get();

		return view('articles/articles')
			->with(['title' => 'Home',
					'articles' => $articles
					]);
	}

	public function getCreate(){
		return 'getCreate';
	}

	public function postCreate(){
		return 'postCreate';
	}
}
