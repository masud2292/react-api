<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTable;

class CooursetableConntroler extends Controller
{
    function test(){
        $result=CourseTable::all();
        return $result;

    }
}
