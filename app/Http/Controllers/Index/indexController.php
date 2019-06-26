<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class indexController extends Controller
{
    public function index()
    {
        $goodsInfo=DB::table('goods')->join('cate','goods.cid','=','cate.cid')->where('goods.is_del',1)->get();
        $cateInfo=DB::table('cate')->where('is_del',1)->limit(4)->get();
        // dd($cateInfo);
        return view('index/index_index')->with('goods',$goodsInfo)->with('cate',$cateInfo);
    }
    public function searchgoods(Request $request)
    {
        $search=$request->input('search');
        $goodsInfo=DB::table('goods')->where('gname','like','%'.$search.'%')->where('is_del',1)->get()->toArray();
        // dd($goodsInfo);
        return view('index/index_goods_search')->with('goods',$goodsInfo)->with('search',$search);
    }
}
