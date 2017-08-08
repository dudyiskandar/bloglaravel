<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\pesan;
use DB,Carbon,File;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
   		return view('dashboard.index'); 	
    }

    public function showProfile()
    {
    	return view('dashboard.profile');
    }

    public function showArticle()
    {
       $article_paginate=Article::paginate(20);
       $article=DB::table('article')
            ->leftJoin('users', 'article.author', '=', 'users.id')
            ->select('article.*', 'users.name')
            ->get();
       return view('article.article', ['article' =>$article, 'article_paginate' =>$article_paginate]); 
    }
    public function showArticleweb()
    {
        $article_paginate=Article::paginate(20);
        $article=DB::table('article')
            ->leftJoin('users', 'article.author', '=', 'users.id')
            ->select('article.*', 'users.name')
            ->get();
        return view('article.article_web',['article'=>$article, 'article_paginate'=>$article_paginate]);
    }

    public function deleteArticle(Request$request)
    {
       $qw=$request->confirm;
        if($qw=='CONFIRM'){
            $id=$request->id;
        $foto=DB::table('article')
        ->where('id',$id)
        ->value('foto','screenshoot1','screenshoot2','screenshoot3','screenshoot4','screenshoot5');
        File::delete('img/article/'.$foto);
        $article=Article::findOrFail($id)->delete();
        return redirect()->route('showArticle');
        }else{
            return redirect()->route('showArticle');
        }
    }

    public function tambahArticle()
    {
        return view('article.tambah_article');
    }

    public function addArticle(Request$request)
    {
        $tanggal=Carbon\Carbon::now()->toDateTimeString();
        $data=[
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'kategori'=>$request->kategori,
            'author'=>$request->author,
            'status'=>$request->status,
            'tanggal'=>$tanggal,
        ];
        if($request->hasFile('foto')){
            $foto=$request->file('foto');
            $nama=$foto->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $foto->move($dir, $newnama);
            $data['foto']=$newnama;
        }
        if($request->hasFile('screenshoot1')){
            $screenshoot1=$request->file('screenshoot1');
            $nama=$screenshoot1->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot1->move($dir, $newnama);
            $data['screenshoot1']=$newnama;
        }
        if($request->hasFile('screenshoot2')){
            $screenshoot2=$request->file('screenshoot2');
            $nama=$screenshoot2->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot2->move($dir, $newnama);
            $data['screenshoot2']=$newnama;
        }
        if($request->hasFile('screenshoot3')){
            $screenshoot3=$request->file('screenshoot3');
            $nama=$screenshoot3->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot3->move($dir, $newnama);
            $data['screenshoot3']=$newnama;
        }
        if($request->hasFile('screenshoot4')){
            $screenshoot4=$request->file('screenshoot4');
            $nama=$screenshoot4->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot4->move($dir, $newnama);
            $data['screenshoot4']=$newnama;
        }
        if($request->hasFile('screenshoot5')){
            $screenshoot5=$request->file('screenshoot5');
            $nama=$screenshoot5->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot5->move($dir, $newnama);
            $data['screenshoot5']=$newnama;
        }
        Article::create($data);
        return redirect()->route('showArticle');
    }

    public function editArticle(Request $request)
    {
        $id=$request->id;
        $article=DB::table('article')
        ->where('id', $id)
        ->get();
        return view('article.edit_article',['article'=>$article]);
    }
    public function updateArticle(Request$request)
    {
        $id=$request->id;
        $tanggal=Carbon\Carbon::now()->toDateTimeString();
        $data=[
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'kategori'=>$request->kategori,
            'author'=>$request->author,
            'status'=>$request->status,
            'tanggal'=>$tanggal,
        ];
        if($request->hasFile('foto')){
            $foto=DB::table('article')
            ->where('id',$id)
            ->value('foto');
             File::delete('img/article/'.$foto);

             $fotobaru=$request->file('foto');
             $nama=time().'_'.$fotobaru->getClientOriginalName();
             $dir =public_path().'/img/article/';
             $fotobaru->move($dir, $nama);
             $data['foto']=$nama;
        }
        if($request->hasFile('screenshoot1')){
            $screenshoot1=$request->file('screenshoot1');
            $nama=$screenshoot1->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot1->move($dir, $newnama);
            $data['screenshoot1']=$newnama;
        }
        if($request->hasFile('screenshoot2')){
            $screenshoot2=$request->file('screenshoot2');
            $nama=$screenshoot2->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot2->move($dir, $newnama);
            $data['screenshoot2']=$newnama;
        }
        if($request->hasFile('screenshoot3')){
            $screenshoot3=$request->file('screenshoot3');
            $nama=$screenshoot3->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot3->move($dir, $newnama);
            $data['screenshoot3']=$newnama;
        }
        if($request->hasFile('screenshoot4')){
            $screenshoot4=$request->file('screenshoot4');
            $nama=$screenshoot4->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot4->move($dir, $newnama);
            $data['screenshoot4']=$newnama;
        }
        if($request->hasFile('screenshoot5')){
            $screenshoot5=$request->file('screenshoot5');
            $nama=$screenshoot5->getClientOriginalName();
            $dir = public_path(). '/img/article/';
            $newnama=time().'_'.$nama;
            $screenshoot5->move($dir, $newnama);
            $data['screenshoot5']=$newnama;
        }
        Article::find($id)->update($data);
        return redirect()->route('showArticle');
    }

    public function updateProfile(Request$request)
    {
        $id=$request->id;
        $data=[
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'description'=>$request->description
        ];
        if($request->hasFile('avatar')){
            $screenshoot=DB::table('users')
            ->where('id',$id)
            ->value('avatar');
             File::delete('img/avatar/'.$screenshoot);

            $avatar=$request->file('avatar');
            $nama=time().'_'.$avatar->getClientOriginalName();
            $dir=public_path().'/img/avatar/';
            $avatar->move($dir, $nama);
            $data['avatar']=$nama;
        }
        if($request->hasFile('bgprofile')){
            $screenshoot=DB::table('users')
            ->where('id',$id)
            ->value('bgprofile');
             File::delete('img/bg_profile/'.$screenshoot);

            $bgprofile=$request->file('bgprofile');
            $nama=time().'_'.$bgprofile->getClientOriginalName();
            $dir=public_path().'/img/bg_profile/';
            $bgprofile->move($dir, $nama);
            $data['bgprofile']=$nama;
        }
        User::find($id)->update($data);
        return redirect()->route('profile');
    }

    public function showPesan()
    {
        $pesan=pesan::paginate(10);
        return view('dashboard.pesan', ['pesan'=>$pesan]);
    }
}
