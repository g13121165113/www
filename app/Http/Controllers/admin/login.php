<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function register()
    {
        // Session::put('name',1111);
        // dd(Session::get('name'));
        view('admin/login_register');
    }
    public function doregister(Request $request)
    {
        $data=$request->input();
        // dd(md5(123123));
        // dd($data);
        $request->validate([
            'name'=>'required',
            'pwd'=>'required',
        ],[
            'name.required'=>'用户名不能为空',
            'pwd.required'=>'密码不能为空'
        ]);
        $adminInfo=DB::table('admin')->where('a_name',$data['name'])->first();
        if($adminInfo){
            echo "<script>alert('用户名已存在');history.go(-1);</script>";
        }else{
            $res=DB::table('admin')->insert(
                ['a_name'=>$data['name'],
                'a_password'=>md5($data['pwd'])]
            );
            if($res){
                echo "<script>alert('注册成功');history.go(-1);</script>";
            }
        }
    }
    public function login()
    {
        return view('admin/login_login');
    }
    public function dologin(Request $request)
    {
        $data=$request->input();
        // dd(md5(123123));
        // dd($data);
        $request->validate([
            'name'=>'required',
            'pwd'=>'required',
        ],[
            'name.required'=>'用户名不能为空',
            'pwd.required'=>'密码不能为空'
        ]);
        $adminInfo=DB::table('admin')->where('a_name',$data['name'])->first();
        if(!$adminInfo){
            echo "<script>alert('用户名不存在');history.go(-1);</script>";
        }else{
            // $adminInfo=$adminInfo['0']->toArray();
            // dd($adminInfo);
            if(md5($data['pwd'])!=$adminInfo->a_password){
                echo "<script>alert('密码错误');history.go(-1);</script>";
            }else{
                echo "<script>alert('登陆成功')</script>";
                $redis=new \redis();
                $redis->connect('127.0.0.1','6379');
                $redis->set('admin',json_encode($data));
                return redirect()->action('studentController@index');
            }
        }
    }
}
