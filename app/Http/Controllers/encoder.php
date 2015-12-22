<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Texts;
use App\functions;


class encoder extends Controller
{

    public function base64(Request $request, Texts $textsModel, functions $functions)
    {
        $method = $request->input('method');
        $source = $request->input('source');
        $encoding_type = $request->input('encoding_type');
        if ($encoding_type=='') {$encoding_type = 'utf8';}
        if ($method=="to_base64") {

            $res = base64_encode($source);
        }
        else {
            $res = base64_decode($source);
        }

        if ($encoding_type!='utf8') {
            $res = iconv('UTF-8', '', $res);
            if ($encoding_type=="ascii")
            {
                $res =  iconv("UTF-8", "CP437", $res);
            }
            else
            {
                $res =  iconv("UTF-8", "windows-1251", $res);
            }
        }
        $langLinks = $functions->giveLangLinks($request->url());
        $params = $textsModel->getLocaleOf('base64');
        return view('indexuse', ['params'=>$params, 'res'=>$res, 'source'=>$source, 'method'=>$method, 'encoding_type'=>$encoding_type, 'langLinks'=>$langLinks]);
    }

    public function md5(Request $request, Texts $textsModel, functions $functions)
    {
        $source = $request->input('source');
        $res='';
        if ($source!='') {
            $res = md5($source);
        }
        $langLinks = $functions->giveLangLinks($request->url());
        $params = $textsModel->getLocaleOf('md5');
        return view('indexuse', ['params'=>$params, 'res'=>$res, 'source'=>$source, 'langLinks'=>$langLinks]);
    }
    public function sha1(Request $request, Texts $textsModel, functions $functions)
    {
        $source = $request->input('source');
        $res='';
        if ($source!='') {
            $res = sha1($source);
        }
        $langLinks = $functions->giveLangLinks($request->url());
        $params = $textsModel->getLocaleOf('sha1');
        //echo App::getLocale();
        return view('indexuse', ['params'=>$params, 'res'=>$res, 'source'=>$source, 'langLinks'=>$langLinks]);
    }
    public function punicode(Request $request, Texts $textsModel, functions $functions)
    {
        $source = $request->input('source');
        $res='';
        if ($source!='') {
            $res = sha1($source);
        }
        $langLinks = $functions->giveLangLinks($request->url());
        $params = $textsModel->getLocaleOf('sha1');
        //echo App::getLocale();
        return view('indexuse', ['params'=>$params, 'res'=>$res, 'source'=>$source, 'langLinks'=>$langLinks]);
    }


}
