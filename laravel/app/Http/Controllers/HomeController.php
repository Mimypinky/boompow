<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Content;
use App\Category;
use App\Account;
use App\Event;
use App\Favourite;
use Illuminate\Support\Facades\Auth;
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
          $title =  'Boompow แหล่งเครือข่ายสังคมสำหรับคนเก๋าๆ';
          $headtitle = 'รวมสาระน่ารู้';
          $content = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.*','contents.*')->paginate(12);
          return view('site.home',compact('headtitle','title','content'));
    }
    public function showContent(Request $req)
    {

      $cateid=$req->category_title;
      $title = 'Boompow แหล่งเครือข่ายสังคมสำหรับคนเก๋าๆ';
      $content = Content::join('category','contents.cate_id','=','category.id')
      ->select('category.*','contents.*')->where('category_title','=', $cateid)->get();
      $headtitle= Category::select('category_title_th','pic')->where('category_title','=',$cateid)->first();

          return view('contents.subcontent',compact('content','title','headtitle'));
    }
    public function getTopic(Request $req)
    {
      $cateid =$req->category_title;
      $topicid = $req->topic;
      $uid = Auth::user()->id;
      $title = 'Boompow';
      $headtitle= Category::select('category.*')->where('category_title','=',$cateid)->first();
      $article = Content::select('contents.*')->where('contents.id','=',$topicid)->get();
      // $fav = Favourite::where([['user_id','=',$uid],['content_id','=',$topicid]])->first();

        return view('contents.topic',compact('content','headtitle','article','title'));

    }
    public function pinned($value='')
    {
      # code...
    }
    public function search(Request $request) {
      $value = $request->value;
      $title = 'Boompow - ค้นหา';

      if(Auth::guest()){
        if($value){
          $contents = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.id as cid','category.category_title','contents.*')
          ->where("content_title","like","%$value%")->get();
          $count =count($contents);

        return view('site.searchResult',compact('contents','value','title','count'));
      }else{
        return back();
      }


      }else{
        if ($value) {
          $contents = Content::join('category','contents.cate_id','=','category.id')
          ->select('category.id as cid','category.category_title','contents.*')
          ->where("content_title","like","%$value%")->get();
          $count_c =count($contents);
  	            $friends= Account::where("username","LIKE","%$value%")
  	                                ->orWhere("first_name","LIKE","%$value%")
  	                                ->orWhere("last_name","LIKE","%$value%")
  	                                ->get();
                $count_f = count($friends);
                $events=Event::where("title","like","%$value%")
                      ->orWhere("location","LIKE","%$value%")->get();
                $count_e = count($events);

                return view('site.searchResult',compact('contents','value','title','count_c','friends','count_f','events','count_e'));


  	        } else {
  	        	return back();

  	        }
          }
        }
}
