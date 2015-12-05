<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class base64 extends Controller
{

    public function index(Request $request)
    {
        $method = $request->input('method');
        $source = $request->input('source');
        $res = base64_encode($source);
        $params = array('res'=>$res, 'source'=>$source, 'method'=>$method);
        //dd($request);
        return view('base64', $params);
    }


}
