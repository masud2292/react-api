<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomepageEtc;
class HomeetcController extends Controller
{
    function test(){
        $result=HomepageEtc::all();
        return $result;

    }
}
