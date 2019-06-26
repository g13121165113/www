@extends('layouts.admin')

@section('title', '学生列表')
    <style>
        .page-item{
            list-style:none;
            float:left;
            margin:15px;
        }
    </style>
    <style>
        .page-item a{
           text-decoration:none;
           color:pink;
        }
    </style>
@section('sidebar')
    @parent
    <form action="{{url('stu_index')}}" method="get" class="layui-form" style="margin:20px 20px">
        <input type="text" name="search" class="layui-input" style="width:150px;display:inline" >
        <input type="submit" value="搜索" class="layui-btn layui-btn-warm">
    </form>
    <div class="layui-form">
        <table class="layui-table" style="margin:20px 20px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>性别</td>
                    <td>添加时间</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $k=>$v)
                <tr>
                    <td>{{$v->id}}</td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->age}}</td>
                    <td>
                        @if($v->sex==1)
                            男
                        @else
                            女
                        @endif
                    </td>
                    <td>{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                    <td>
                        <a href="{{url('stu_delete')}}?id={{$v->id}}">删除</a>
                        <a href="{{url('stu_update')}}?id={{$v->id}}">修改</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$data->links()}}
    </div>
@endsection


