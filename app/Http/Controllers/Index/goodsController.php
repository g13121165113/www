<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class goodsController extends Controller
{
    public function index()
    {
        $goodsInfo=DB::table('goods')->where('is_del',1)->get();
        // dd($goodsInfo);
        return view('index/index_class')->with('goods',$goodsInfo);
    }
    public function product(Request $request)
    {
        $gid=$request->get('gid');
        // dd($gid);
        $goodsInfo=DB::table('goods')->where('is_del',1)->where('gid',$gid)->first();
        return view('index/index_product')->with('goods',$goodsInfo);
        // dd($goodsInfo);
    }
}
