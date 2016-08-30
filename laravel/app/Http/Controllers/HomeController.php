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
      //dd($content);
          return view('contents.subcontent',compact('content','title'));

=======
          $content = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.*','contents.*')->get();
          return view('site.home',compact('headtitle','title','content'));
>>>>>>> 5b8214d17a1e9351486cc16c82414176e1a787ab
    }

}
