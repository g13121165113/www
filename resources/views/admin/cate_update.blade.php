@extends('layouts.admin')

@section('title', '分类修改')

@section('sidebar')
    @parent
    <form class="layui-form" action="{{url('cate_doupdate')}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
    @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">分类名称</label>
            <div class="layui-input-inline">
            <input type="text" name="cname" placeholder="请输入商品名称" value="{{$data->cname}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">分类图片</label>
            <div class="layui-input-block">
                <input type="file" name="cate_img"><br>
                <img src="{{$data->csrc}}" alt="" style="height:100px;width:100px;margin-top:20px">
            </div>
        </div>
        <input type="hidden" name="cid" value="{{$data->cid}}">
        <div class="layui-form-item">
            <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            </div>
        </div>
    </form>
@endsection
@section('script')
 <script>
    //Demo
        layui.use('form', function(){
            var form = layui.form;
        });
    </script>
@endsection


