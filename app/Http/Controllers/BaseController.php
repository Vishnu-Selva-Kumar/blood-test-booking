<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    public function  media($path, Request $request)
    {

        return response()->file(storage_path('/app/public/' . $path));
    }
}
