<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class findController extends Controller
{
    public function index()
    {
        // echo 111;
        // die;
        return view('index/index_find');
    }
}
