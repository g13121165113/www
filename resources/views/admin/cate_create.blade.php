@extends('layouts.admin')

@section('title', '分类添加')

@section('sidebar')
    @parent
    <form class="layui-form" action="{{url('cate_docreate')}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
    @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">分类名称</label>
            <div class="layui-input-inline">
            <input type="text" name="cname" placeholder="请输入商品名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">分类名称图片</label>
            <div class="layui-input-block">
                <input type="file" name="cname_img">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">分类图片</label>
            <div class="layui-input-block">
                <input type="file" name="cate_img">
            </div>
        </div>
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

