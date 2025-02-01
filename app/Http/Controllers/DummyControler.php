<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyControler extends Controller
{
    function getdate(){
        return ['name' => 'Dummy', 'age' => 20];
    }
}
