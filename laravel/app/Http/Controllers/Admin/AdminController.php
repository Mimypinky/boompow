<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;
use Carbon\Carbon;
use App\Event;
use App\Category;
use App\Account;
use Intervention\Image\ImageManagerStatic as Image;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check() && Auth::user()->admin_status == 'admin'){
          $contents = Content::join('category','contents.cate_id','=','category.id')->orderBy('created_at','desc')->get();
          $c_content = $contents->count();
          $event = Event::get();
          $c_event= $event->count();
          $user = Account::get();
          $c_acc = $user->count();
          //dd($count_content);
          return view('admin.adminhome',compact('c_content','c_event','c_acc'));

        }
        else if (Auth::check() && Auth::user()->admin_status != 'admin') {
          return view('site.home');
        }
        else{
          echo "Please login..";
          return redirect()->intended('/');
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.create_content',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $content= new Content();
        $content->content_title = $req->title;
        $content->description = $req->description;
        $content->reference = $req->url;
        $content->cate_id=$req->category;
        if($req->hasfile('files')){
          $image = $req->file('files');
          $filename = time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(public_path().'/img/content/'.$filename);
          $content->head_pic_content = $filename;
          $content->save();
        }
        $content->save();
        return redirect('administator/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content= Content::find($id);
        $category = Category::all();
        return view('admin.edit_content',compact('content','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $content= Content::find($id);
        $content->content_title = $request->title;
        $content->description = $request->description;
        $content->reference = $request->url;
        $content->cate_id = $request->category;
        $content->save();
        return redirect('administator/content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showContent(Request $req)
    {
      $contents = Content::join('category','category.id','=','contents.cate_id')->select('category.id as c_id','category.category_title','category.category_title_th','contents.*')
      ->orderBy('id','asc')->get();
      return view('admin.manage_post',compact('contents'));
    }
    public function showEvent(Request $req)
    {
      $events = Event::join('accounts','accounts.id','=','events.creator')->select('events.*','accounts.username')->get();
      return view('admin.manage_event',compact('events'));
    }
    public function showUsers(Request $req)
    {
      $users = Account::all();
      return view('admin.manage_user',compact('users'));
    }

    public function deleteContent($id)
    {

      $content = Content::find($id);
      $content->delete();
      return back();
    }
    public function banUser($id)
    {

      $accounts = Account::find($id);
      $accounts->permission = 0;
      $accounts->admin_status ='banned';
      $accounts->save();
      return back();
    }
    public function changeRole($id)
    {
      $accounts = find($id);
      $accounts->permission = 0;

      $accounts->save();
      return back();
    }
}
