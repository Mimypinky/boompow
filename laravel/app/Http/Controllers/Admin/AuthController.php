<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Database\DatabaseManager;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     use AuthenticatesAndRegistersUsers,
         ThrottlesLogins;

    public function index()
    {
        //
        if (Auth::check()) {
          return view('admin.adminhome');
        }
        else{
          echo "please login as Administrator";
          return view('admin.adminlogin');
        }

    }

    public function handleAdminLogin(Request $request)
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $obj1 = new Admin();
        $obj1->username = $request['username'];
        $obj1->email = $request['email'];
        $obj1->password = bcrypt($request['password']);
        $obj1->gender = $request['gender'];
        $obj1->remember_token;
        $obj1->save();

        $credentials = array(
          'username' => Input::get('username'),
          'password' => Input::get('password')
        );

        if (Auth::attempt($credentials)) {
          return redirect('/administator');
        }

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
