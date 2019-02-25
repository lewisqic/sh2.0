<?php

namespace App\Helpers;

class Js {


    /**
     * return javascript tag with our app config data
     * @return html
     */
    public static function config()
    {
        $html = '<script>const config = {_token: "' . csrf_token() . '", url: "' . url('') . '", path: "' . \Request::path() . '", ajax_path: null};</script>';
        return $html;
    }


}