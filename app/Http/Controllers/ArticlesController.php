<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller {

	public function showArticles(){
		$articles = Article::latest()->get();

		return view('articles/articles')
			->with(['title' => 'Home',
					'articles' => $articles
					]);
	}

}
