@extends('layouts.admin')

@section('title', '商品添加')

@section('sidebar')
    @parent
    <form class="layui-form" action="{{url('goods_doupdate')}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
    @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">商品名称</label>
            <div class="layui-input-inline">
            <input type="text" name="gname" placeholder="请输入商品名称" value="{{$data->gname}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">商品图片</label>
            <div class="layui-input-block">
                <input type="file" name="goods_img"><br>
                <img src="{{asset($data->gsrc)}}" alt="" style="height:100px;width:100px;margin-top:20px">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品库存</label>
            <div class="layui-input-inline">
            <input type="text" name="gnumber" placeholder="请输入商品库存" value="{{$data->gnumber}}" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品价格</label>
            <div class="layui-input-inline">
            <input type="text" name="gnumber" placeholder="请输入商品库存" value="{{$data->gprice}}" class="layui-input">
            </div>
        </div>
        <input type="hidden" name="gid" value="{{$data->gid}}">
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


