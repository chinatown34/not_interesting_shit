<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use App\Texts;
use App\functions;

class index extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request, Texts $textsModel, functions $functions)
    {
        $langLinks = $functions->giveLangLinks($request->url());
        $params = $textsModel->getLocaleOf('index');
        return view('indexuse',['params' => $params, 'langLinks'=>$langLinks]);
    }

}
