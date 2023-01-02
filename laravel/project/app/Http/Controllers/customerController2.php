<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController2 extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        echo "Invokable controller that autocall due to inbuild contructor function(__invoke)";
    }
}
