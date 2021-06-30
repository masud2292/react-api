<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientReview;

class ClientreviewController extends Controller
{
    function test(){
        $result=ClientReview::all();
        return $result;

    }

}
