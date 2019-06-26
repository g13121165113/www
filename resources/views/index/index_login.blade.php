<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0,  maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <link rel="stylesheet" type="text/css" href="index/login/css/public.css" />
    <link rel="stylesheet" type="text/css" href="index/login/css/mstyle.css" />
    <link rel="stylesheet" type="text/css" href="index/login/css/reset.css" />
</head>
<body class="bodybgs">
    <div class="top1 ">
        <div class="top2 ">
            <a href="Javascript:history.go(-1) "><span class="top3 ">返回</span></a>
        </div>
        <div class="top4 ">登录</div>
    </div>
    <div class="div_w "></div>
    <section class="form-group" id="inputObj1">
        <form action="{{url('index_dologin')}}" method="post">
            @csrf
            <div class="form-text-login noa" id="accounts_1">
                <label class="font-two">账&#12288;号：</label>
                <input type="text" name="name" id="name" class="form-text" placeholder="手机号/邮箱">
            </div>
            <div class="form-text-login nob" id="pwd_1">
                <label class="font-two">密&#12288;码：</label>
                <input type="password" name="upwd" id="pwd" class="form-text" placeholder="请输入密码">
            </div>
            <div class="btn5" style="margin-top:12px">
                <a onclick="submit()"><input class="" id="btn" type="submit" id="SubmitLoginBtn" value="登&nbsp;&nbsp;录"></a>
                <a href="{{url('index_register')}}"><span style="float: left;font-size:13px;color:#ff5500;">注册新帐号</span></a>
                <span style="float: right;font-size:13px;color:#ff5500;">忘记密码?</span>
            </div>
        </form>
    </section>
    <script src="index/login/js/jquery-1.6.2.min.js"></script>
    <script src="layui/layui.js"></script>
    <!-- <script>
        layui.use(['layer'],function(){
            var layer=lyaui.layer;
            $('#btn').click(function(){
                var name=$("#name").val();
                var pwd=$("#pwd").val();
                $.ajax({
                    url:url('index_dologin'),
                    data:{name:name,upwd:pwd},
                    type:'post',
                    dataType:"json",
                    success:function(msg){
                        layer.msg(msg.font,{icon:msg.icon;time:2000},functin(){
                            if(msg.code==1){
                                location.href="{{url('index_login')}}";
                            }
                        })
                    }
                });
                return false;
            });
        });
    </script> -->
</body>

</html>
