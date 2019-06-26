<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>购物车</title>
	<link rel="stylesheet" href="themes/css/core.css">
	<link rel="stylesheet" href="themes/css/icon.css">
	<link rel="stylesheet" href="themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
</head>
<body>

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">购物车(6)</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon aui-icon-member"></i>
		</a>
	</header>
	<section class="aui-car-content">
		<div class="aui-dri"></div>
		<div class="aui-car-box">
			<div class="aui-car-box-list">
				<ul>
                    @foreach($goods as $k=>$v)
					<li>
						<div class="aui-car-box-list-item">
							<input type="checkbox" class="check goods-check goodsCheck" gid="{{$v->gid}}">
							<div class="aui-car-box-list-img">
								<a href="ui-product.html">
									<img src="{{$v->gsrc}}" alt="">
								</a>
							</div>
							<div class="aui-car-box-list-text">
								<h4>
									<a href="ui-product.html">{{$v->gname}}</a>
								</h4>
								<!-- <div class="aui-car-box-list-text-brief">
									<span>重量:3.3kg</span>
									<span>颜色:标配版</span>
									<span>版本:5.7英寸</span>
								</div> -->
								<div class="aui-car-box-list-text-price">
									<div class="aui-car-box-list-text-pri">
										￥<b class="price">{{$v->gprice}}</b>
									</div>
									<div class="aui-car-box-list-text-arithmetic">
										<a href="javascript:;" class="minus">-</a>
										<span class="num">{{$v->buy_num}}</span>
										<a href="javascript:;" class="plus">+</a>
									</div>
								</div>
							</div>

						</div>
						<div class="aui-dri"></div>
                    </li>
                    @endforeach
				</ul>
			</div>
			<!-- <div class="aui-shopPrice">
				本店总计：￥
				<span class="aui-total-amount ShopTotal"></span>
			</div> -->
		</div>
	</section>
	<div class="aui-payment-bar">
		<!-- <div class="all-checkbox"><input type="checkbox" class="check goods-check" id="AllCheck">全选</div> -->
		<div class="shop-total">
			<!-- <strong>合计：<i class="total" id="AllTotal">399.00</i></strong> -->
		</div>
		<a href="#" class="settlement" id="jiesuan">去结算</a>
	</div>
    <script src="themes/js/jquery.min.js"></script>
	<script src="themes/js/aui-car.js"></script>
    <script>
        $('#jiesuan').click(function(){
            var gid="";
            $(':checked').each(function(){
                gid+=$(this).attr('gid')+',';
            });
            gid=gid.substr('0',gid.length-1);
            // console.log(gid);
            location.href="{{url('index_order')}}?gid="+gid;
        })

    </script>
</body>
</html>
