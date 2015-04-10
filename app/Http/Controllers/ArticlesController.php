<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Article;
use Validator;
use App\User;
use Auth;

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
		return view('articles/create');
	}

	public function postCreate(){
		$input = Request::all();

	 	$validator = Validator::make($input, 
	        [
	        	'title' => 'required|between:2,40',
	            'body' => 'required|min:6',
	        ]
    	);

	 	if($validator->fails()){
	 		return redirect()->route('getCreate')->withInput();
	 	}

		$article = new Article;
		$article->title = $input['title'];
		$article->body = $input['body'];
		$article->user_id = Auth::user()->id;
		$article->save();

		return redirect()->route('showArticle', $article->id);
	}

	public function getEdit(){
		return 'getEdit';
	}

	public function postEdit(){
		return 'postEdit';
	}
}
