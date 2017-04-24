<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Auth;
use Request,Input;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    public function manager(){}

    public function customer(){
        $data =  
            DB::table('services')
            ->select('services.type','devices.name as devices_name','devices.mac','customers.state')
            ->join('devices', 'devices.id', '=', 'services.devices_id')
            ->join('customers', 'customers.id', '=', 'devices.customers_id')
            ->get(); 

        return $data;
    }

    public function user(){

    	$data =  
            DB::table('services')
            ->join('devices', 'devices.id', '=', 'services.devices_id')
            ->where('services.type', '=','Vivo')
            ->get(); 

        return $data;
    }
}
