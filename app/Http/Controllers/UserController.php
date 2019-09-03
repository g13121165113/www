<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\User;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function create()
    {
        $name = 'admin';
        $pwd = md5('admin123');
        $res = User::insert(['u_name'=>$name,'u_pwd'=>$pwd]);
        dd($res);
    }

    public function test()
    {
        $key = 'abc';
        $val = Redis::get($key);
        dd($val);
    }
}
