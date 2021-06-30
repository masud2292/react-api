<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;
class ServicesController extends Controller
{
    function test(){
        $result=ServicesModel::all();
        return $result;

    }
}
