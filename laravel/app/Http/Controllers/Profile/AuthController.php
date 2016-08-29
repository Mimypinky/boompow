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
        //return view('auth.register');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(){
      return view('site.index');
    }

    public function handleLogin(Request $request){
      $username = $request['username'];
      $password = $request['password'];
      if(\Auth::attempt(['username' => $username, 'password' => $password])){
      return "Is Logged in";
      return redirect()->intended('home');
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
