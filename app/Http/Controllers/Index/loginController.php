<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login()
    {
        return view('index/index_login');
    }
    public function dologin(Request $request)
    {
        $data=$request->input();
        unset($data['_token']);
        // if($user['name'])
        $userInfo=DB::table('user')->where('utel',$data['name'])->first();
        $userInfo2=DB::table('user')->where('uemail',$data['name'])->first();
        if($userInfo||$userInfo2){
            if($userInfo){
                if($userInfo->upwd==md5($data['upwd'])){
                    Session::put('user',$userInfo);
                    return redirect()->action('Index\uimeController@index');
                }else{
                    return redirect()->action('Index\loginController@login');
                }
            }
            if($userInfo2){
                if($userInfo2->upwd==md5($data['upwd'])){
                    Session::put('user',$userInfo2);
                    return redirect()->action('Index\uimeController@index');
                }else{
                    return redirect()->action('Index\loginController@login');
                }
            }
        }else{
            return redirect()->action('Index\loginController@register');
        }
        // dd($userInfo2);
    }
    public function register()
    {
        return view('index/index_register');
    }
    public function doregister(Request $request)
    {
        $user=$request->input();
        $user['upwd']=md5($user['upwd']);
        $user['addtime']=time();
        unset($user['_token']);
        // dd($user);
        $rules = [
            'uemail'=>'unique:user',
            'utel'=>'unique:user',
        ];
        $messages = [
            'uemail.unique'=>'该邮箱已注册',
            'utel.unique'=>'该手机号已注册',
        ];
        $validator = Validator::make($user,$rules,$messages);
        // dd($validator);
        if($validator){
            echo "<script>alert('邮箱或手机已注册')</script>";
            return redirect()->action('Index\loginController@login');
        }
        $res=DB::table('user')->insert($user);
        if($res){
            return redirect()->action('Index\loginController@login');
        }else{
            return redirect()->action('Index\loginController@register');
        }
    }
    public function logout()
    {
        $res=Session::forget('user');
        // dd($res);
        if(empty($res)){
            return redirect()->action('Index\loginController@login');
        }
    }
}
