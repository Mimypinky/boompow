<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Database\DatabaseManager;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use App\Profile;
use App\Question;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function index()
    {
        //
        $title = 'สมัครสมาชิก';
        return view('auth.register',compact('title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'สมัครสมาชิก';
        return view('auth.register',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*public function login(){
      return view('site.index');
    }*/

    public function logout(){
      Auth::logout();
      return redirect()->intended('/');
    }

    public function handleLogin(Request $request){
      $username = $request['username'];
      $password = $request['password'];
      $query = DB::table('accounts')->select('id')->where('username', $request['username'])->first();
      $qfname = DB::table('accounts')->select('first_name')->where('username', $request['username'])->first();
      $qlname = DB::table('accounts')->select('last_name')->where('username', $request['username'])->first();
      $accid = $query->id;
      $fname = $qfname->first_name;
      $lname = $qlname->last_name;
      $remember = Input::has('remember')? true : false;
      if(\Auth::attempt(['username' => $username, 'password' => $password], $remember)){

        return redirect()->intended('/');
      }
        return back()->withInput();
      }

    public function store(Request $request)
    {
        $data = $request['question'];
        $query = DB::table('questpass')->select('id')->where('id', $request['question'])->first();
        $obj1 = new Profile();
        $obj1->dob = $request['dob'];
        $obj1->gender = $request['gender'];
        $obj1->email = $request['email'];
        $obj1->qp_id = $query->id;
        $obj1->save();
        $obj3 = Profile::all()->last();
        $id = $obj3->id;

        $obj2 = new Account();
        $obj2->username = $request['username'];
        $obj2->first_name = $request['first_name'];
        $obj2->last_name = $request['last_name'];
        $obj2->password = bcrypt($request['password']);
        $obj2->profile_id = $id;
        $obj2->remember_token;
        $obj2->save();

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
        //
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
        //
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
}
