<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{


    // only view the data

    function  onlyviewdata(){
        return Device::all();
    }

    // viwe the data with id
        function  list($id=null){
       return $id ?Device::find($id):Device::all();    
    } 


// viwe the data with id only
    function listparams($id=null){
        return Device::find($id);    
     }
}
