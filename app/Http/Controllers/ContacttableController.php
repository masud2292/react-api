<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactTable;

class ContacttableController extends Controller
{
    function test(){
        $result=ContactTable::all();
        return $result;

    }

}
