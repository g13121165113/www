<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>我的订单</title>
	<link rel="stylesheet" href="themes/css/core.css">
	<link rel="stylesheet" href="themes/css/icon.css">
	<link rel="stylesheet" href="themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">

</head>
<body>

	<header class="aui-header-default aui-header-fixed ">
		<a href="{{url('index_ui-me')}}" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">我的订单</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon aui-icon-search"></i>
		</a>
	</header>

	<section class="aui-myOrder-content">
		<div class="m-tab demo-small-pitch" data-ydui-tab>
			<div class="aui-myOrder-fix">
				<ul class="tab-nav">
					<li class="tab-nav-item tab-active"><a href="javascript:;">全部</a></li>
					<li class="tab-nav-item"><a href="javascript:;">待付款</a></li>
					<li class="tab-nav-item"><a href="javascript:;">待发货</a></li>
					<li class="tab-nav-item"><a href="javascript:;">待收货</a></li>
					<li class="tab-nav-item"><a href="javascript:;">评价</a></li>
				</ul>
			</div>
			<div class="aui-prompt"><i class="aui-icon aui-prompt-sm"></i>双十一期间发货及物流时效公告</div>
			<div class="tab-panel">
				<div class="tab-panel-item tab-active">
					<ul>
                        @foreach($order as $k=>$v)
						<li>
							<div class="aui-list-title-info">
								<a href="#" class="aui-well ">
									<div class="aui-well-bd">{{date('Y-m-d',$v->addtime)}}</div>
                                    @if($v->status==1)
                                    <div class="aui-well-bd"><span class="times" id="{{$v->id}}" order-state="{{$v->status}}" end_time="{{date('Y-m-d H:i:s',$v->addtime+600)}}"></span></div>
                                    @endif
									<div class="aui-well-ft">
                                    @if($v->status==1)
                                    未付款
                                    @elseif($v->status==2)
                                    待发货
                                    @elseif($v->status==3)
                                    交易关闭
                                    @elseif($v->status==4)
                                    待收货
                                    @elseif($v->status==5)
                                    交易完成
                                    @endif
                                    </div>
								</a>
								<a href="javascript:;" class="aui-list-product-fl-item">
									<div class="aui-list-product-fl-img">
										<img src="{{$v->gsrc}}" alt="">
									</div>
									<div class="aui-list-product-fl-text">
										<h3 class="aui-list-product-fl-title">{{$v->gname}}</h3>
										<div class="aui-list-product-fl-mes">
											<div>
									<span class="aui-list-product-item-price">
										<em>¥</em>
										{{$v->gprice}}
									</span>
												<span class="aui-list-product-item-del-price">
										¥{{$v->oldprice}}
									</span>
											</div>
											<div class="aui-btn-purchase">
												x{{$v->buy_num}}
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="aui-list-title-btn">
								<a href="#">取消订货</a>
								<a href="#" class="red-color">立即付款</a>
							</div>
							<div class="aui-dri"></div>
                        </li>
                        @endforeach
					</ul>
				</div>
				<div class="tab-panel-item">
					<ul>
                    @foreach($order as $k=>$v)
                        @if($v->status==1)
						<li>
							<div class="aui-list-title-info">
								<a href="#" class="aui-well ">
									<div class="aui-well-bd">{{date('Y-m-d',$v->addtime)}}</div>
									<div class="aui-well-ft">待付款</div>
								</a>
								<a href="javascript:;" class="aui-list-product-fl-item">
									<div class="aui-list-product-fl-img">
										<img src="{{$v->gsrc}}" alt="">
									</div>
									<div class="aui-list-product-fl-text">
										<h3 class="aui-list-product-fl-title">{{$v->gname}}</h3>
										<div class="aui-list-product-fl-mes">
											<div>
									<span class="aui-list-product-item-price">
										<em>¥</em>
										{{$v->gprice}}
									</span>
												<span class="aui-list-product-item-del-price">
										¥{{$v->oldprice}}
									</span>
											</div>
											<div class="aui-btn-purchase">
												x{{$v->buy_num}}
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="aui-list-title-btn">
								<a href="#">取消订货</a>
								<a href="#" class="red-color">立即付款</a>
							</div>
							<div class="aui-dri"></div>
                        </li>
                        @endif
                        @endforeach
					</ul>
				</div>
				<div class="tab-panel-item">
					<ul>
                    @foreach($order as $k=>$v)
                    @if($v->status==2)
                    <li>
                        <div class="aui-list-title-info">
                            <a href="#" class="aui-well ">
                                <div class="aui-well-bd">{{date('Y-m-d',$v->addtime)}}</div>
                                <div class="aui-well-ft">待付款</div>
                            </a>
                            <a href="javascript:;" class="aui-list-product-fl-item">
                                <div class="aui-list-product-fl-img">
                                    <img src="{{$v->gsrc}}" alt="">
                                </div>
                                <div class="aui-list-product-fl-text">
                                    <h3 class="aui-list-product-fl-title">{{$v->gname}}</h3>
                                    <div class="aui-list-product-fl-mes">
                                        <div>
                                <span class="aui-list-product-item-price">
                                    <em>¥</em>
                                    {{$v->gprice}}
                                </span>
                                            <span class="aui-list-product-item-del-price">
                                    ¥{{$v->oldprice}}
                                </span>
                                        </div>
                                        <div class="aui-btn-purchase">
                                            x{{$v->buy_num}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="aui-list-title-btn">
                            <a href="#">取消订货</a>
                            <a href="#" class="red-color">立即付款</a>
                        </div>
                        <div class="aui-dri"></div>
                    </li>
                    @endif
                    @endforeach
					</ul>
				</div>
				<div class="tab-panel-item">
					<ul>
                        @foreach($order as $k=>$v)
                        @if($v->status==4)
						<li>
							<div class="aui-list-title-info">
								<a href="#" class="aui-well ">
									<div class="aui-well-bd">{{date('Y-m-d',$v->addtime)}}</div>
									<div class="aui-well-ft">待付款</div>
								</a>
								<a href="javascript:;" class="aui-list-product-fl-item">
									<div class="aui-list-product-fl-img">
										<img src="{{$v->gsrc}}" alt="">
									</div>
									<div class="aui-list-product-fl-text">
										<h3 class="aui-list-product-fl-title">{{$v->gname}}</h3>
										<div class="aui-list-product-fl-mes">
											<div>
									<span class="aui-list-product-item-price">
										<em>¥</em>
										{{$v->gprice}}
									</span>
												<span class="aui-list-product-item-del-price">
										¥{{$v->oldprice}}
									</span>
											</div>
											<div class="aui-btn-purchase">
												x{{$v->buy_num}}
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="aui-list-title-btn">
								<a href="#">取消订货</a>
								<a href="#" class="red-color">立即付款</a>
							</div>
							<div class="aui-dri"></div>
                        </li>
                        @endif
                        @endforeach
					</ul>
				</div>
				<div class="tab-panel-item">
					<ul>
                    @foreach($order as $k=>$v)
                    <li>
                        <div class="aui-list-title-info">
                            <a href="#" class="aui-well ">
                                <div class="aui-well-bd">{{date('Y-m-d',$v->addtime)}}</div>
                                <div class="aui-well-ft">待付款</div>
                            </a>
                            <a href="javascript:;" class="aui-list-product-fl-item">
                                <div class="aui-list-product-fl-img">
                                    <img src="{{$v->gsrc}}" alt="">
                                </div>
                                <div class="aui-list-product-fl-text">
                                    <h3 class="aui-list-product-fl-title">{{$v->gname}}</h3>
                                    <div class="aui-list-product-fl-mes">
                                        <div>
                                <span class="aui-list-product-item-price">
                                    <em>¥</em>
                                    {{$v->gprice}}
                                </span>
                                            <span class="aui-list-product-item-del-price">
                                    ￥{{$v->oldprice}}
                                </span>
                                        </div>
                                        <div class="aui-btn-purchase">
                                            x{{$v->buy_num}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="aui-list-title-btn">
                            <a href="#">查看订单</a>
                            <a href="#" class="red-color">立即评价</a>
                        </div>
                        <div class="aui-dri"></div>
                    </li>
                    @endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript" src="themes/js/jquery.min.js"></script>
	<script type="text/javascript" src="themes/js/aui.js"></script>
	<script type="text/javascript" >
        /**
         * Javascript API调用Tab
         */
        !function ($) {
            var $tab = $('#J_Tab');

            $tab.tab({
                nav: '.tab-nav-item',
                panel: '.tab-panel-item',
                activeClass: 'tab-active'
            });
			//倒计时
			getTime();
			function getTime(){
				$(".times").each(function(){
					var _this = $(this);
					var end_time = _this.attr('end_time'); //结束时间
					var state = _this.attr('order-state'); //订单状态
                    var id = _this.attr('id');
					var endDate = new Date(end_time);
					console.log(end_time);
					endDate = endDate.getTime();//1970-截止时间  从1970年到截止时间有多少毫秒
					//获取一个现在的时间
					console.log(endDate);
					var nowdate = new Date;
					nowdate = nowdate.getTime(); //现在时间-截止时间  从现在到截止时间有多少毫秒
					//获取时间差 把毫秒转换为秒
					console.log(nowdate);
					var diff = parseInt((endDate - nowdate) / 1000);
					console.log(diff);
					if(diff <= 0 && state == 1){
						//window.location.reload();
						_this.parent().remove();
                        changeStatus(id);
					}
					h = parseInt(diff / 3600);//获取还有小时
					m = parseInt(diff / 60 % 60);//获取还有分钟
					s = diff % 60;//获取多少秒数
					//将时分秒转化为双位数
					h = setNum(h);
					m = setNum(m);
					s = setNum(s);
					//输出时分秒
					_this.html("订单还剩"+m + "分" + s + "秒过期");
				});
				window.setTimeout(function() {
				getTime();
				}, 1000);
			}
			//window.setTimeout(getTime, 1000);
			//设置函数 把小于10的数字转换为两位数
			function setNum(num) {
				if (num < 10) {
					num = "0" + num;
				}
			return num;
		    }
            function changeStatus(id){
                $.ajax({
                    // headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:"index_changeStatus",
                    type:"get",
                    data:{id:id},
                    dataType:"text",
                    success:function(msg){
                        if(msg=='ok'){
                            history.go(0);
                        }
                    }
                })
            }
			/*
			 $tab.find('.tab-nav-item').on('open.ydui.tab', function (e) {
			 console.log('索引：%s - [%s]正在打开', e.index, $(this).text());
			 });
			 */

            $tab.find('.tab-nav-item').on('opened.ydui.tab', function (e) {
                console.log('索引：%s - [%s]已经打开了', e.index, $(this).text());
            });
        }(jQuery);
	</script>
</body>
</html>
