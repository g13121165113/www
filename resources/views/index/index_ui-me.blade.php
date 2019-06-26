@extends('layouts.index')

@section('title','个人中心')

@section('sidebar')
<header class="aui-header-default aui-header-fixed aui-header-clear-bg " style="background:none; border-bottom:0">
    <a href="#" class="aui-header-item">
        <i class="aui-icon aui-icon-back-white" id="scrollSearchI" style="display:block"></i>
        <div id="scrollSearchDiv">
            <img src="themes/img/user/head-2.jpg" alt="">
        </div>
    </a>
    <div class="aui-header-center aui-header-center-clear">
        <div class="">

        </div>
    </div>
    <a href="{{url('index_myset')}}" class="aui-header-item-icon">
        <i class="aui-icon aui-icon-Sets"></i>
    </a>

</header>

<section class="aui-me-content" style="padding-top:0;">
    <div class="aui-me-content-box">
        <!--<div class="aui-me-content-info"></div> 弧度背景 临时 注释  -->
        <div class="aui-me-content-list">
            <div class="aui-me-content-item">
                <div class="aui-me-content-item-head">
                    @if(!empty(session('user')))
                    <div class="aui-me-content-item-img">
                        <img src="themes/img/user/head-2.jpg" alt="">
                    </div>
                    <div class="aui-me-content-item-title">
                        <a href="{{url('index_myset')}}">{{session('user')->uname}}</a>
                    </div>
                    @else
                    <div class="aui-me-content-item-img">
                        <img src="themes/img/user/head-2.jpg" alt="">
                    </div>
                    <div class="aui-me-content-item-title">
                        <a href="{{url('index_login')}}">请先登录</a>
                    </div>
                    @endif
                </div>
                <div class="aui-me-content-item-text">
                    <a href="my-orders.html">
                        <span>98</span>
                        <span>收藏</span>
                    </a>
                    <a href="my-orders.html">
                        <span>78</span>
                        <span>关注</span>
                    </a>
                    <a href="my-orders.html">
                        <span>99</span>
                        <span>足迹</span>
                    </a>
                    <a href="my-orders.html">
                        <span>65</span>
                        <span>分享</span>
                    </a>
                </div>
            </div>
            <div class="aui-me-content-card">
                <h3><i class="aui-icon aui-card-me"></i>plus会员</h3>
                <a href="my-membership.html">开通享8大权益</a>
            </div>
        </div>
    </div>
    <div class="aui-me-content-order">
        <a href="{{url('index_order3')}}" class="aui-well aui-fl-arrow">
            <div class="aui-well-bd">我的订单</div>
            <div class="aui-well-ft">查看全部</div>
        </a>
    </div>
    <section class="aui-grid-content">
        <div class="aui-grid-row">
            <a href="my-order.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-wallet"></i>
                <p class="aui-grid-row-label">待付款</p>
            </a>
            <a href="my-order.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-goods"></i>
                <p class="aui-grid-row-label">待发货</p>
            </a>
            <a href="my-order.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-receipt"></i>
                <p class="aui-grid-row-label">待收货</p>
            </a>
            <a href="my-order.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-evaluate"></i>
                <p class="aui-grid-row-label">待评价</p>
            </a>
            <a href="my-order.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-refund"></i>
                <p class="aui-grid-row-label">退货退款</p>
            </a>
        </div>
        <div class="aui-dri"></div>
        <div class="aui-grid-row">
            <a href="my-invitation.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-invitation"></i>
                <p class="aui-grid-row-label">邀请好友</p>
            </a>
            <a href="my-sign.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-signs"></i>
                <p class="aui-grid-row-label">签到领币</p>
            </a>
            <a href="my-coupon.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-coupon"></i>
                <p class="aui-grid-row-label">优惠券</p>
            </a>
            <a href="my-purchase.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-fight"></i>
                <p class="aui-grid-row-label">我的拼团</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-recommend"></i>
                <p class="aui-grid-row-label">商品推手</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-recharge"></i>
                <p class="aui-grid-row-label">充值中心</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-help"></i>
                <p class="aui-grid-row-label">帮助中心</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-problem"></i>
                <p class="aui-grid-row-label">我的问答</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-evaluates"></i>
                <p class="aui-grid-row-label">我的评价</p>
            </a>
            <a href="#" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-large-sm aui-icon-shares"></i>
                <p class="aui-grid-row-label">我的分享</p>
            </a>
        </div>
        <div class="aui-recommend">
            <img src="themes/img/bg/icon-tj3.jpg" alt="">
            <!--<h2>为你推荐</h2>-->
        </div>
        <section class="aui-list-product">
            <div class="aui-list-product-box">
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/pd-zf-6.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/pd-zf-7.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/pd-zf-8.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-1.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-2.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-4.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-5.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-6.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-7.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
                <a href="ui-product.html" class="aui-list-product-item">
                    <div class="aui-list-product-item-img">
                        <img src="themes/img/pd/sf-1.jpg" alt="">
                    </div>
                    <div class="aui-list-product-item-text">
                        <h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
                        <div class="aui-list-product-mes-box">
                            <div>
                        <span class="aui-list-product-item-price">
                            <em>¥</em>
                            399.99
                        </span>
                                <span class="aui-list-product-item-del-price">
                            ¥495.65
                        </span>
                            </div>
                            <div class="aui-comment">986评论</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </section>
</section>
@endsection
@section('footer')
@endsection
@section('script')

@endsection
