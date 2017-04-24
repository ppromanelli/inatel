<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Auth;
use Request,Input;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function manager(){
        $data =  
            DB::table('services')
            ->select('services.type','devices.name as devices_name','devices.mac','customers.state','customers.full_name')
            ->join('devices', 'devices.id', '=', 'services.devices_id')
            ->join('customers', 'customers.id', '=', 'devices.customers_id')
            ->get(); 

        return $data;
    }

    public function customer(){}

    public function user(){
    	$data =  
            DB::table('customers')
            ->where('customers.state', '=','MG')
            ->get(); 

        return $data;
    }
}
