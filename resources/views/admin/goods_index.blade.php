@extends('layouts.admin')

@section('title', '商品列表')
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
    <form action="{{url('goods_index')}}" method="get" class="layui-form" style="margin:20px 20px">
        <input type="text" name="search" value="{{$gname}}" class="layui-input" style="width:150px;display:inline" >
        <input type="submit" value="搜索" class="layui-btn layui-btn-warm">
    </form>
    <div class="layui-form">
        <table class="layui-table" style="margin:20px 20px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>名称</td>
                    <td>图片</td>
                    <td>库存</td>
                    <td>价格</td>
                    <td>添加时间</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $k=>$v)
                <tr>
                    <td>{{$v->gid}}</td>
                    <td>{{$v->gname}}</td>
                    <td><img src="{{asset($v->gsrc)}}" alt=""></td>
                    <td>{{$v->gnumber}}</td>
                    <td>{{$v->gprice}}</td>
                    <td>{{date('Y-m-d H:i:s',$v->create_time)}}</td>
                    <td>
                        <a href="{{url('goods_delete')}}?gid={{$v->gid}}">删除</a>
                        <a href="{{url('goods_update')}}?gid={{$v->gid}}">修改</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->appends(['search' => $gname])->links() }}
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


