<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class carController extends Controller
{
    public function index()
    {
        if(Session::get('user')){
            $uid=Session::get('user')->uid;
            $gid=DB::table('cart')->where('is_del',1)->where('uid',$uid)->pluck('gid')->toArray();
            // dd($gid);
            $goodsInfo=DB::table('goods')->where('goods.is_del',1)->where('cart.is_del',1)->whereIn('goods.gid',$gid)->join('cart','goods.gid','=','cart.gid')->get()->toArray();
            // dd($goodsInfo);
            return view('index/index_car')->with('goods',$goodsInfo);
        }else{
            // dd(1);
            return redirect()->action('Index\loginController@login');
        }
    }
    public function docar(Request $request)
    {
        $gid=$request->get('gid');
        if(Session::get('user')){
            $uid=Session::get('user')->uid;
            // dd($uid);
            // $goodsInfo=DB::table('goods')->where('is_del',1)->where('gid',$gid)->first();
            $result=DB::table('cart')->where('gid',$gid)->where('is_del',1)->where('uid',$uid)->first();
            if($result){
                // $result=$result->toArray();
                $buy_num=$result->buy_num+1;
                $res=DB::table('cart')->where('id',$result->id)->update(['buy_num'=>$buy_num]);
                return redirect()->action('Index\carController@index');
            }else{
                $res=DB::table('cart')->insert(['gid'=>$gid,'addtime'=>time(),'uid'=>$uid]);
                return redirect()->action('Index\carController@index');
            }
        }else{
            return redirect()->action('Index\loginController@login');
        }
    }
}
