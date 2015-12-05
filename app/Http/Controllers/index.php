<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class index extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function giveHost($host_with_subdomain) {
        $array = explode(".", $host_with_subdomain);

        return (array_key_exists(count($array) - 2, $array) ? $array[count($array) - 2] : "").".".$array[count($array) - 1];
    }

    public function index(Request $request)
    {
        echo App::getLocale();
        $u = $request->url();
        $now_basic_url = $this->giveHost($u);
        $params = array('pagetype'=>'index', 'description'=>'Description', 'title'=>'title');
        return view('indexuse', $params);
    }

}
