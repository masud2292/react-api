<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTable;
class FootertableController extends Controller
{
    function test(){
        $result=FooterTable::all();
        return $result;

    }
}
