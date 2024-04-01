<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Using page controller';
    }

    public function data(Request $request)
    {
        // var_dump() & die();
        // dd($request);
        foreach ($request->all() as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    }
}
