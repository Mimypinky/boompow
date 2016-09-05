<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function registerForm()
    {
      return view:make('site.register');
    }
    public function registerCreate()
    {
      $validator = Validator::make(Input::all(),array(
        'first_name'    =>'required|min:4|max:100',
        'last_name'     =>'required|min:4|max:100',
        'gender'        =>'required',
        'date'          =>'required',
        'month'         =>'required',
        'year'          =>'required',
        'email'         =>'required|email|max:100|unique:accounts',
        'bio'           =>'required|min:0|max:1000',
        'username'      =>'required|min:4|max:20|unique:accounts'
        'question_password'=>'requiured',
        'password'                          => 'required|min:4|max:15|confirmed',
        'password_confirmation'          => 'required|min:4|max:15',
      ),array(
        'name.required'                     => 'Full Name ไม่สามารถเป็นค่าว่างได้',
                        'email.required'                    => 'email ไม่สามารถเป็นค่าว่างได้',
                        'email.email'                       => 'รูปแบบ E-Mail ไม่ถูกต้อง',
                        'email.unique'                      => 'email นี้มีอยู่ในระบบแล้ว',
                        'password.required'                 => 'password ไม่สามารถเป็นค่าว่างได้',
                        'password.confirmed'                => 'รหัสผ่านไม่ตรงกัน',
                        'password_confirmation.required'    => 'confirm password ไม่สามารถเป็นค่าว่างได้',

      )
      )
    }
    
}
