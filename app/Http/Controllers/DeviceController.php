<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Auth;
use Request,Input;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    //
    public function manager(){}

    public function customer(){}

    public function user(){
    	$data =  
            DB::table('devices')
            ->where('devices.name', '=','Moto g4')
            ->get(); 

        return $data;
    }
}
