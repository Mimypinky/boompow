<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Content;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $title =  'Boompow';
          $headtitle = 'รวมสาระน่ารู้';
<<<<<<< HEAD

=======
>>>>>>> e092644b14d5019ddba975c1e7963ccd4baaddb8
          $content = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.*','contents.*')->get();
          return view('site.home',compact('headtitle','title','content'));
    }
    public function showContent(Request $req)
    {
      $cateid=$req->category_title;
      $title = 'Boompow';
      $content = Content::join('category','contents.cate_id','=','category.id')
      ->select('category.*','contents.*')->where('category_title','=', $cateid)->get();
<<<<<<< HEAD

=======
>>>>>>> e092644b14d5019ddba975c1e7963ccd4baaddb8
      $headtitle= Category::select('category_title_th')->where('category_title','=',$cateid)->first();
    //  dd($headtitle);
          return view('contents.subcontent',compact('content','title','headtitle'));
    }
    public function getTopic(Request $req)
    {
      $cateid =$req->category_title;
      $topicid = $req->topic;
      $title = 'Boompow';
      $headtitle= Category::select('category.*')->where('category_title','=',$cateid)->first();
      $article = Content::select('contents.*')->where('contents.id','=',$topicid)->get();
        return view('contents.topic',compact('content','headtitle','article','title'));
        dd($article);
<<<<<<< HEAD


      //dd($content);
          return view('contents.subcontent',compact('content','title'));

=======
>>>>>>> e092644b14d5019ddba975c1e7963ccd4baaddb8
    }
}
