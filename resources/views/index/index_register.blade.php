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
<body style="background:#F0F0F0;">
		<div class="top1 ">
			<div class="top2 ">
				 <a href="Javascript:history.go(-1) "><span class="top3 ">返回</span></a>
			</div>
			<div class="top4 ">注册</div>
		</div>
		<div class="div_w "></div>

		<section class="form-group" id="inputObj1">
			<form action="{{url('index_doregister')}}" id="form" method="post">
                @csrf
                <div class="form-text-login nob" id="pwd_1">
					<label class="font-two">用户名：</label>
					<input type="text"  name="uname" class="form-text" placeholder="请输入用户名" style="margin-left:30px;">
				</div>
				<div class="form-text-login nob" id="pwd_1">
					<label class="font-two">邮&#12288;箱：</label>
					<input type="text"  name="uemail" class="form-text" placeholder="请输入邮箱" style="margin-left:30px;">
				</div>
                <div class="form-text-login nob" id="pwd_1">
					<label class="font-two">手机号：</label>
					<input type="text"  name="utel" class="form-text" placeholder="请输入手机号" style="margin-left:30px;">
				</div>
				<div class="form-text-login nob" id="pwd_1">
					<label class="font-two">密&#12288;码：</label>
					<input type="password"  name="upwd" class="form-text" placeholder="请输入密码" style="margin-left:30px;">
					<a href="javascript:void(0);" class="form-text-clear" id="txtPhoneB"><i class="r passbg" id="togglePassword"></i></a>
                </div>
                <div class="btn5" style="margin-top:12px">
                    <input type="submit" class="" id="SubmitLoginBtn" onclick="SubmitLoginBtn()" value="注册">
                </div>
			</form>
		</section>
		<center>
            <div style="font-size:10px; margin-top:50px; margin-left:10px; font-size:12px; line-height:20px;">温馨提示：xxxxxx
        </center>
		<!-- <script src="../js/jquery-1.6.2.min.js "></script>
		<script type="text/javascript">
		var InterValObj; //timer变量，控制时间
		var count = 60; //间隔函数，1秒执行
		var curCount;//当前剩余秒数

			function phoneOk(){
				var pattern = /^1[34578]\d{9}$/;
				var mobile = $("#mobile").val();
				if(mobile != ""){
					if(pattern.test(mobile)){

				        //设置button效果，开始计时
						curCount = count;
				     $("#btnSendCode").attr("disabled", "true");
				     $("#btnSendCode").val(curCount + "秒");
				     InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次

					}else{
						alert('请输正确手机号');
					}
				}else{
					alert('请输手机号');
				}
			}

			//timer处理函数
			function SetRemainTime() {
			            if (curCount == 0) {
			                window.clearInterval(InterValObj);//停止计时器
			                $("#btnSendCode").removeAttr("disabled");//启用按钮
			                $("#btnSendCode").val("发送验证码");
			            }
			            else {
			                curCount--;
			                $("#btnSendCode").val( curCount + "秒");
			            }
			        }


		</script> -->
	</body>
</html>
