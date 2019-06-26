<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
    public function index(Request $request)
    {
        // $arr=['a'=>''];
        // dd(isset($arr['a']));
        $name=$request->input('search');
        if($name){
            $data=DB::table('student')->where('name','like','%'.$name.'%')->paginate(2);
        }else{
            $data=DB::table('student')->paginate(2);
        }
        return view('stu_index')->with('data',$data);
    }
    public function create()
    {
        // $data=json_decode();
        return view('stu_create');
    }
    public function add(Request $request)
    {
        $data=$request->all();
        // dd($data);
        $res=DB::table('student')->insert(
            ['name'=>$data['name'],
            'sex'=>$data['sex'],
            'age'=>$data['age'],
            'addtime'=>time()],
        );
        return redirect()->action('studentController@index');
    }
    public function update(Request $request)
    {
        $id=$request->input('id');
        $data=DB::table('student')->find($id);
        return view('stu_update')->with('data',$data);
    }
    public function doupdate(Request $request)
    {
        $data=$request->input();
        $res=DB::table('student')->where('id',$data['id'])->update(
            ['name'=>$data['name'],
            'sex'=>$data['sex'],
            'age'=>$data['age'],
            'addtime'=>time()],
        );
        if($res){
            return redirect()->action('studentController@index');
        }else{
            return redirect()->action('studentController@update',['id'=>$data['id']]);
        }
    }
    public function delete(Request $request)
    {
        $id=$request->input('id');
        // dd($id);
        $res=DB::table('student')->delete($id);
        return redirect()->action('studentController@index');
    }
}
