<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformetionEtc;
class InformationetcController extends Controller
{
    function test(){
        $result=InformetionEtc::all();
        return $result;

    }
}
