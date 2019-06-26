<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class cateController extends Controller
{
    public function index(Request $request)
    {
        $cname=$request->input('search');
        if($cname){
            $data=DB::table('cate')->where('gname','like','%'.$cname.'%')->where('is_del',1)->orderby('addtime','desc')->paginate(3);
        }else{
            $data=DB::table('cate')->where('is_del',1)->orderby('addtime','desc')->paginate(3);
        }
        return view('admin\cate_index')->with('data',$data)->with('cname',$cname);
    }
    public function create(Request $request)
    {
        return view ('admin\cate_create');
    }
    public function docreate(Request $request)
    {
        $data=$request->input();
        $path = $request->file('cate_img')->store('cate');
        $path2 = $request->file('cname_img')->store('cate');
        $data['cnamesrc']='storage/'.$path2;
        $data['csrc']='storage/'.$path;
        $data['addtime']=time();
        unset($data['_token']);
        // dd($data);
        $res=DB::table('cate')->insert($data);
        // dd($res);
        if($res){
            return redirect()->action('admin\goodsController@cate_index');
        }else{
            return redirect()->action('admin\goodsController@cate_create');
        }
    }
    public function cate_update(Request $request)
    {
        $id=$request->input('gid');
        // dd($id);
        $data=DB::table('goods')->where('gid',$id)->first();
        // dd($data);
        return view('admin\goods_update')->with('data',$data);
    }
    public function cate_doupdate(Request $request)
    {
        $data=$request->input();
        $path = $request->file('goods_img');
        if($path){
            $path = $request->file('goods_img')->store('cate');
            $data['csrc']=asset('storage/'.$path);
        }
        unset($data['_token']);
        // dd($data);
        $res=DB::table('goods')->where('gid',$data['gid'])->update($data);
        // dd($res);
        if($res){
            return redirect()->action('admin\cateController@cate_index');
        }else{
            return redirect()->action('admin\cateController@cate_update');
        }
    }
    public function cate_delete(Request $request)
    {
        $id=$request->input('cid');
        $res=DB::table('cate')->where('cid',$id)->update(['is_del'=>2]);
        return redirect()->action('admin\cateController@gcate_index');
    }
}
