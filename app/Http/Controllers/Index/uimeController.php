<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;

class uimeController extends Controller
{
    public function index()
    {
        // $goodsInfo=DB::table('goods')->where('is_del',1)->get();
        return view('index/index_ui-me');
    }
    public function myset()
    {
        return view('index/index_myset');
    }
}
