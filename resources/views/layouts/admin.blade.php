<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="layui/css/layui.css"  media="all">
  <script src="layui/layui.js"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">layui 后台布局</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退出</a></li>
    </ul>
  </div>

  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">商品</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('goods_index')}}">列表</a></dd>
            <dd><a href="{{url('goods_create')}}">添加</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">学生</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('stu_index')}}">列表</a></dd>
            <dd><a href="{{url('stu_create')}}">添加</a></dd>
          </dl>
        </li>
      </ul>
    </div>
    </div>
    <div class="layui-body">
    <!-- 内容主体区域 -->
        @section('sidebar')
            <div style="padding: 15px;">
                <div class="container">

                </div>
            </div>
        @show
    </div>
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
  </div>
</div>
@section('script')
<script>
//JavaScript代码区域
layui.use(['element','form','table'], function(){
  var element = layui.element,form=layui.form;

});
</script>
@show
</body>
</html>
