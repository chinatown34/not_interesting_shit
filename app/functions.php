<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class functions extends Model
{
    private function giveHost($host_with_subdomain) {
        $array = explode(".", $host_with_subdomain);
        return (array_key_exists(count($array) - 2, $array) ? $array[count($array) - 2] : "").".".$array[count($array) - 1];
    }



    public function giveLangLinks($url)
    {
        //Потом можно заменить на выборку из бд с кашированием
        $langs = array('ru'=>'ru','en'=>'');

        $main_domain = $this->giveHost($url);
        $main_domain = str_replace('http://','', $main_domain);
        //$path = parse_url($url, PHP_URL_PATH);
        //echo "$url - $main_domain - $path";
        $result = array();
        $i=0;
        foreach ($langs as $k=>$v) {
            if ($v==''){
                $result[$k] = 'http://'.$main_domain;

            }
            else {
                $result[$k] = 'http://'. $v .'.'.$main_domain;
            }
            $i++;
        }
        //print_r($result);
        return $result;
    }



}
