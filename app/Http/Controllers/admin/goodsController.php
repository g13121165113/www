<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class goodsController extends Controller
{
    public function goods_index(Request $request)
    {
        // $time=date('H',time());
        // dd($time);
        $redis=new \redis();
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');
        $num=$redis->get('num');
        // echo $num;
        $gname=$request->input('search');
        if($gname){
            $data=DB::table('goods')->where('gname','like','%'.$gname.'%')->where('is_del',1)->orderby('create_time','desc')->paginate(3);
        }else{
            $data=DB::table('goods')->where('is_del',1)->orderby('create_time','desc')->paginate(3);
        }
        return view('admin\goods_index')->with('data',$data)->with('gname',$gname);
    }
    public function goods_create()
    {
        $cate=DB::table('cate')->get();
        return view ('admin\goods_create')->with('cate',$cate);
    }
    public function goods_docreate(Request $request)
    {
        $data=$request->input();
        $path = $request->file('goods_img')->store('goods');
        $data['gsrc']='storage/'.$path;
        $data['create_time']=time();
        $data['oldprice']=$data['gprice']*1.2;
        unset($data['_token']);
        // dd($data);
        $res=DB::table('goods')->insert($data);
        // dd($res);
        if($res){
            return redirect()->action('admin\goodsController@goods_index');
        }else{
            return redirect()->action('admin\goodsController@goods_create');
        }
    }
    public function goods_update(Request $request)
    {
        $id=$request->input('gid');
        // dd($id);
        $data=DB::table('goods')->where('gid',$id)->first();
        // dd($data);
        return view('admin\goods_update')->with('data',$data);
    }
    public function goods_doupdate(Request $request)
    {
        $data=$request->input();
        $path = $request->file('goods_img');
        if($path){
            $path = $request->file('goods_img')->store('goods');
            $data['gsrc']=asset('storage/'.$path);
        }
        unset($data['_token']);
        // dd($data);
        $res=DB::table('goods')->where('gid',$data['gid'])->update($data);
        // dd($res);
        if($res){
            return redirect()->action('admin\goodsController@goods_index');
        }else{
            return redirect()->action('admin\goodsController@goods_update');
        }
    }
    public function goods_delete(Request $request)
    {
        $id=$request->input('gid');
        $res=DB::table('goods')->where('gid',$id)->update(['is_del'=>2]);
        return redirect()->action('admin\goodsController@goods_index');
    }
}
