<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Favourite;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
   public function index(){
     if(Auth::check()){
       $user =Auth::user()->id;
       $title = 'Boompow - Favourite';
       $myFav = Favourite::join('contents','favourite.content_id','=','contents.id')
       ->select('favourite.*','contents.content_title','contents.description','contents.id')
       ->where('user_id','=',$user)->get();


       return view('social.fav',compact('myFav','title'));

     }else {
       return view('site.home');
     }
   }
   public function addFav($cid){
       $user =Auth::user()->id;
       $fav = new Favourite();
       $fav->user_id = $user;
       $fav->content_id = $cid;
       $fav->save();
       return redirect()->back();
   }
}
