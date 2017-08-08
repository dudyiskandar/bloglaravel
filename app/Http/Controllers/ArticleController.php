<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Validator;
use App\User;
use App\Commentar;
use App\pesan;
use DB, Carbon, File;
class ArticleController extends Controller
{
	public function index1()
	{
		$article_paginate=Article::paginate(5);
		$article =DB::table('article')
		->where('kategori', 'lain')
		->leftJoin('users', 'article.author', '=', 'users.id')
		->select('article.*', 'users.name', 'users.avatar', 'users.description')
		->get() ;
		return view('blog.index1', ['article' => $article, 'article_paginate'=>$article_paginate]);
	}
	public function index()
	{
		$article_paginate=Article::paginate(5);
		$article=DB::table('article')
		->where('kategori', 'web')
		->leftJoin('users', 'article.author','=','users.id')
		->select('article.*', 'users.name', 'users.avatar', 'users.description')
		->get();
		return view('blog.index', ['article' => $article, 'article_paginate'=>$article_paginate]);
	}
	public function showProfile(Request $request)
	{
		$name=$request->name;
		$users=DB::table('users')
		->where('name',$name)
		->get();
		return view('blog.profile',['users' => $users]);
	}

	public function readArticle(Request $request)
	{
		$article_paginate=Article::paginate(5);
		$id =$request->id;
		$article = DB::table('article')
		->where('id',$id)
		->get();
		$comment=Commentar::all();
		return view('blog.read',['article' => $article, 'article_paginate'=>$article_paginate,'comment'=>$comment]);
	}

	public function showContact()
	{
		return view('blog.contact');
	}

	public function kirimPesan(Request $request)
	{
		$data=[
			'nama'=>$request->nama,
			'email'=>$request->email,
			'phone_number'=>$request->phone_number,
			'pesan'=>$request->pesan
		];
		pesan::create($data);
		return redirect()->route('contact')
			->with('message', 'Pesan Berhasil Dikirim');
	}

	public function cariJudul(Request $request){
		$keyword=$request->cari_judul;
		$article_search=DB::table('article')
			->where('judul', 'LIKE', '%'.$keyword.'%')
			->leftJoin('users', 'article.author','=','users.id')
			->select('article.*','users.name','users.avatar','users.description')
			->get();
		$article=DB::table('article')
			->leftJoin('users', 'article.author','=','users.id')
			->select('article.*','users.name','users.avatar','users.description')
			->get();
		return view('blog.search', ['article_search'=>$article_search, 'article'=>$article]);
	}

	public function kirimComment(Request $request){
		$tanggal=Carbon\Carbon::now()->toDateTimeString();
		$data=[
			'id_article'=>$request->id_article,
			'nama'=>$request->nama,
			'email'=>$request->email,
			'comment'=>$request->comment,
			'tanggal'=>$tanggal
		];
		$id=$request->id_article;
		Commentar::create($data);
		return redirect()->route('home');
	}
}
