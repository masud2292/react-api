<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectTable;
class ProjecttableController extends Controller
{
    function test(){
        $result=ProjectTable::all();
        return $result;

    }
}
