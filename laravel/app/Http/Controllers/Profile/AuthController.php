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
use App\User;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;
use Response;


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
        $questions = Question::all();
        $title = 'สมัครสมาชิก';
        if(!Auth::check()){
          return view('auth.register',compact('title','questions'));
        }
        else {
          return redirect()->intended('/');;
        }
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

    public function loginForm(){
      $title = 'เข้าสู่ระบบ';
      if(!Auth::check()){
        return view('auth.loginform',compact('title'));

      }
      else {
        return redirect()->intended('/');;
      }
    }

    public function logout(){
      Auth::logout();
      return redirect()->intended('/');
    }

    public function handleLogin(Request $request){

      $validator = Validator::make(Input::all(),array(
        'username'                              => 'required',
        'password'                              => 'required|min:3|max:15|confirmed',

      ),
      array(
        'username.required'                     => 'กรุณากรอกชื่อผู้ใช้',
        'password.required'                     => 'กรุณากรอกรหัสผ่าน',
        'password.confirmed'                    => 'รหัสผ่านไม่ถูกต้อง',
      ));

      $username = $request['username'];
      $password = $request['password'];
      $remember = Input::has('remember')? true : false;

      if(Auth::attempt(['username' => $username, 'password' => $password], $remember) && Auth::user()->status == 'user' ){
        return redirect()->intended('/');
      }
      else if(Auth::attempt(['username' => $username, 'password' => $password], $remember) && Auth::user()->status == 'admin'){
        return redirect()->intended('/administator');
      }
      else{
        $message = 'ขื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง';
        return redirect('login')->with('loginStatus', $message );
      }
    }
    public function checkAvailableUsername(Request $request){
        // $username = Request::Input('username');
        $username = Input::get('username');
        $result = Account::where('username', $username)->first();
        if(isset($result)){
          return Response::json('1');
        }
        elseif ($username==null) {
          return Response::json('2');
        }
        else {
          return Response::json('0');
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(),array(
                'username'                              => 'required|unique:accounts,username|min:3|max:100',
                'first_name'                            => 'required|alpha|max:100',
                'last_name'                             => 'required|alpha|max:100',
                'gender'                                => 'required',
                'dob'                                   => 'required',
                'question'                              => 'required|not_in:0',
                'password'                              => 'required|min:4|max:15|confirmed',
                'password_confirmation'                 => 'required|min:4|max:15',
                'email'                                 => 'required|email|max:100|unique:profiles,email',
            ),
            array(
                'username.required'                     => 'กรุณากรอกชื่อผู้ใช้',
                'username.min'                          => 'กรุณากรอกชื่อผู้ใช้ที่มีตัวอักษรหรือตัวเลขรวมกันอย่างน้อย 3 ตัว',
                'username.unique'                       => 'ชื่อผู้ใช้นี้มีอยู่ในระบบแล้ว กรุณากรอกชื่อผู้ใช้อื่น',
                'first_name.required'                   => 'กรุณากรอกชื่อจริง',
                'first_name.alpha'                      => 'กรุณากรอกชื่อเป็นตัวอักษร',
                'last_name.required'                    => 'กรุณากรอกนามสกุล',
                'last_name.alpha'                       => 'กรุณากรอกนามสกุลเป็นตัวอักษร',
                'gender.required'                       => 'กรุณาระบุเพศ',
                'dob.required'                          => 'กรุณาระบุวันเกิด',
                'question.required'                     => 'กรุณาเลือกคำถาม',
                'question.not_in:0'                     => 'กรุณาเลือกคำถามสำหรับระบุรหัสผ่านของท่าน',
                'email.required'                        => 'กรุณากรอกอีเมล์',
                'email.email'                           => 'รูปแบบอีเมล์ไม่ถูก ตัวอย่าง abc@boompow.com',
                'email.unique'                          => 'อีเมล์นี้มีอยู่ในระบบแล้ว กรุณากรอกอีเมล์อื่น',
                'password.required'                     => 'กรุณากรอกรหัสผ่าน',
                'password.confirmed'                    => 'รหัสผ่านไม่ตรงกัน',
                'password_confirmation.required'        => 'กรุณากรอกยืนยันรหัสผ่าน',
            )
        );

        if ($validator->fails()) {
          echo 'unsuccess';
          return redirect()->intended('/register')->withErrors($validator)
          ->withInput(Input::except('password'))
          ->withInput(Input::except('password_confirmation'))
          ->withInput();
        }else{
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

          $credentials = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
          );

          if (Auth::attempt($credentials)) {
            $title = 'เพิ่มข้อมูลส่วนตัว';
            return view('auth.register_p2',compact('title'));
          }

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
