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
          $content = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.*','contents.*')->get();
          return view('site.index',compact('headtitle','title','content'));
    }
    public function show()
    { 
          return view('site.index',compact('headtitle','title','content'));
    }
}
