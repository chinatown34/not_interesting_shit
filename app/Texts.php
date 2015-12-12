<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use DB;

class Texts extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'texts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pagename','slug', 'lang', 'title', 'descr', 'h1', 'h1_text','h2','h2_text'];

    public function getLocaleOf($page)
    {
        $locale =  App::getLocale();
        //$data = Texts::all()->where('slug','=', $page)->where('lang','=', $locale);
        $data = DB::table('texts')->where('slug','=', $page)->where('lang','=', $locale)->first();;
        return $data;
    }

}
