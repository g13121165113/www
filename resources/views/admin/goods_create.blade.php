@extends('layouts.admin')

@section('title', '商品添加')

@section('sidebar')
    @parent
    <form class="layui-form" action="{{url('goods_docreate')}}" method="post" enctype="multipart/form-data" style="margin-top:20px">
    @csrf
        <div class="layui-form-item">
            <label class="layui-form-label">商品名称</label>
            <div class="layui-input-inline">
            <input type="text" name="gname" placeholder="请输入商品名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">商品图片</label>
            <div class="layui-input-block">
                <input type="file" name="goods_img">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品库存</label>
            <div class="layui-input-inline">
            <input type="text" name="gnumber" placeholder="请输入商品库存" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">分类</label>
            <div class="layui-input-inline">
                <select name="cid">
                    @foreach($cate as $k=>$v)
                    <option value="{{$v->cid}}">{{$v->cname}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品价格</label>
            <div class="layui-input-inline">
            <input type="text" name="gprice" placeholder="请输入商品价格" class="layui-input">
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

