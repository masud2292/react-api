<?php
namespace App\Http\Controllers;
use App\Models\ChartdataModel;
use Illuminate\Http\Request;
class ChartdataController extends Controller
{

    function test(){
        $result=ChartdataModel::all();
        return $result;

    }

}
