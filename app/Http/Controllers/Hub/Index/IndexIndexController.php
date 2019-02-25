<?php
namespace App\Http\Controllers\Hub\Index;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show our list page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showList()
    {
        $data = [

        ];
        return view('content.hub.index.list', $data);
    }

    /**
     * Show our object page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showObject()
    {
        $data = [

        ];
        return view('content.hub.index.object', $data);
    }


}