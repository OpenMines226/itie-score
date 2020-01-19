<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('welcome')->with(['regions' => Region::all()]);
    }
}
