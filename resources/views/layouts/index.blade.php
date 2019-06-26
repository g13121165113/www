<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
    <title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="themes/css/core.css">
	<link rel="stylesheet" type="text/css" href="themes/css/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<style type="text/css">
		#scrollBg{ width: 100%; height: 45px; line-height: 45px;background: rgba(251,55,67,0.8); display: none; z-index:-1; position: fixed; left: 0; top:0; text-align: center; font-size: 20px; color: #fff; }
	</style>
</head>
<body>

    @section('sidebar')
    @show
    @section('footer')
    @show
	<footer class="aui-footer-default aui-footer-fixed">
		<a href="{{url('index_index')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-home"></span>
			<span class="aui-footer-item-text">首页</span>
		</a>
		<a href="{{url('index_class')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-class"></span>
			<span class="aui-footer-item-text">分类</span>
		</a>
		<a href="{{url('index_find')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-find"></span>
			<span class="aui-footer-item-text">发现</span>
		</a>
		<a href="{{url('index_car')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-car"></span>
			<span class="aui-footer-item-text">购物车</span>
		</a>
		<a href="{{url('index_ui-me')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-me"></span>
			<span class="aui-footer-item-text">我的</span>
		</a>
    </footer>
    @section('script')
    @show
    <script type="text/javascript" src="themes/js/jquery.min.js"></script>
    <script type="text/javascript" src="themes/js/aui.js"></script>
    <script type="text/javascript">
        $(function () {
            //绑定滚动条事件
            //绑定滚动条事件
            $(window).bind("scroll", function () {
                var sTop = $(window).scrollTop();
                var sTop = parseInt(sTop);
                if (sTop >= 40) {
                    if (!$("#scrollBg").is(":visible")) {
                        try {
                            $("#scrollBg").slideDown();
                        } catch (e) {
                            $("#scrollBg").show();
                        }
                    }
                }
                else {
                    if ($("#scrollBg").is(":visible")) {
                        try {
                            $("#scrollBg").slideUp();
                        } catch (e) {
                            $("#scrollBg").hide();
                        }
                    }
                }
            });
        })
        $(document).on('click','a[class*="aui-footer-item"]',function(){
            var _this=$(this);
            _this.addClass('aui-footer-active').siblings('a').removeClass('aui-footer-active');
        });
    </script>
</body>
</html>
