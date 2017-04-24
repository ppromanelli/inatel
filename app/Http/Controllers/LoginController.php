<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Auth;
use Request,Input;
use Illuminate\Support\Facades\DB;
use Hash;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $rules = [
            'email' => 'max:255',
            'password' => 'min:6',
        ];

        $validator = Validator::make(Request::all(), $rules);
        

        $data =  
            DB::table('users')
            ->where('users.email', '=',Input::get('email'))
            ->first(); 

        $user = [];

        $user['id'] = $data->id;
        $user['name']= $data->name;
        $user['email'] = $data->email;
        $user['type'] = $data->type;
        $user['password'] = $data->password;

        if (Hash::check(Input::get('password'), $user['password']))
		{
		    // The passwords match...
		    return $user;
		}
		else return $arrayName = array('error' => 'Erro ao logar' );
        
    }
}
