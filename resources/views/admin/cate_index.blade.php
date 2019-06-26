@extends('layouts.admin')

@section('title', '分类列表')
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
    <form action="{{url('cate_index')}}" method="get" class="layui-form" style="margin:20px 20px">
        <input type="text" name="search" value="{{$cname}}" class="layui-input" style="width:150px;display:inline" >
        <input type="submit" value="搜索" class="layui-btn layui-btn-warm">
    </form>
    <div class="layui-form">
        <table class="layui-table" style="margin:20px 20px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>分类名称</td>
                    <td>分类图片</td>
                    <td>添加时间</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $k=>$v)
                <tr>
                    <td>{{$v->cid}}</td>
                    <td>{{$v->cname}}</td>
                    <td><img src="{{asset($v->csrc)}}" alt=""></td>
                    <td>{{date('Y-m-d H:i:s',$v->addtime)}}</td>
                    <td>
                        <a href="{{url('cate_delete')}}?cid={{$v->cid}}">删除</a>
                        <a href="{{url('cate_update')}}?cid={{$v->cid}}">修改</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->appends(['search' => $cname])->links() }}
    </div>
@endsection
@section('script')
 <script>
    //Demo
        layui.use('table', function(){
            var form = layui.table;
        });
    </script>
@endsection


