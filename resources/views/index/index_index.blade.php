@extends('layouts.index')

@section('title', '天天购物')

@section('sidebar')
<header class="aui-header-default aui-header-fixed aui-header-clear-bg"> <!-- aui-header-clear-bg 清除背景色 -->
    <a href="#" class="aui-header-item">
        <i class="aui-icon aui-icon-code"></i>
    </a>
    <div class="aui-header-center aui-header-center-clear"  style="margin-right:50px;">
        <div class="aui-header-search-box" style="background-color:#fff">
        <form action="{{url('index_goods_search')}}" method="get">
            <i class="aui-icon aui-icon-small-search"></i>
            <input id="" name="search" type="text" value=""  placeholder="" class="aui-header-search" style="display:inline">
            <button type="submit" style="border:none;display:inline"></button>
        </form>
        </div>
    </div>
    <a href="#" class="aui-header-item-icon" style="position:absolute; right:-35px; top:0;">
        <i class="aui-icon aui-icon-member-1"></i>
    </a>
    <div id="scrollBg"></div>
</header>
<div class="aui-content-box">
    <div class="aui-banner-content " data-aui-slider>
        <div class="aui-banner-wrapper">
            <div class="aui-banner-wrapper-item">
                <a href="#">
                    <img src="themes/img/banner/news-banner2.jpg">
                </a>
            </div>
            <div class="aui-banner-wrapper-item">
                <a href="#">
                    <img src="themes/img/banner/news-banner1.jpg">
                </a>
            </div>
            <div class="aui-banner-wrapper-item">
                <a href="#">
                    <img src="themes/img/banner/news-banner3.jpg">
                </a>
            </div>
            <div class="aui-banner-wrapper-item">
                <a href="#">
                    <img src="themes/img/banner/news-banner1.jpg">
                </a>
            </div>
        </div>
        <div class="aui-banner-pagination"></div>
    </div>
    <section class="aui-grid-content">
        <div class="aui-grid-row aui-grid-row-clears"> <!-- aui-grid-row-clear 清除 a标签 上下的边距 -->
            <a href="my-sign.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-sign"></i>
                <p class="aui-grid-row-label">每日签到</p>
            </a>
            <a href="my-time.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-time"></i>
                <p class="aui-grid-row-label">限时抢购</p>
            </a>
            <a href="my-membership.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-vip"></i>
                <p class="aui-grid-row-label">会员专享</p>
            </a>
            <a href="my-purchase.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-group"></i>
                <p class="aui-grid-row-label">好货拼团</p>
            </a>
            <a href="my-invitation.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-share"></i>
                <p class="aui-grid-row-label">分享领券</p>
            </a>
            <a href="my-sign.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-recharges"></i>
                <p class="aui-grid-row-label">手机充值</p>
            </a>
            <a href="my-time.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-finance"></i>
                <p class="aui-grid-row-label">金融理财</p>
            </a>
            <a href="my-membership.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-appliance"></i>
                <p class="aui-grid-row-label">电器商城</p>
            </a>
            <a href="my-purchase.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-supermarket"></i>
                <p class="aui-grid-row-label">萌宝超市</p>
            </a>
            <a href="my-invitation.html" class="aui-grid-row-item">
                <i class="aui-icon-large aui-icon-personal"></i>
                <p class="aui-grid-row-label">个人中心</p>
            </a>
        </div>
    </section>
    <section class="aui-content-six aui-border-t " style="background-color: #fff;">
        <div class="aui-flex-col aui-flex-center aui-border-tb">
            <div class="aui-flex-item-4 aui-flex-row aui-flex-middle aui-padded-10 aui-border-b">
                <h3 class="aui-text-danger">电器城抢购</h3>
                <p>全场低至299</p>
                <img src="themes/img/ad/f1.jpg">
            </div>
            <div class="aui-flex-item-8 aui-border-l">
                <div class="aui-flex-col aui-padded-10 aui-border-b">
                    <div class="aui-flex-item-12">
                        <div class="aui-flex-item-9">
                            <h3 class="aui-text-info">创维新品</h3>
                            <p>好品质选创维新品上市</p>
                        </div>
                        <div class="aui-flex-item-3 aui-text-right"><img src="themes/img/ad/f2.jpg"></div>
                    </div>
                </div>
                <div class="aui-flex-col aui-border-b">
                    <div class="aui-flex-item-6 aui-padded-10 " style="position: relative;">
                        <h5 class="aui-text-warning">拍摄一族</h5>
                        <p>喜欢旅游拍摄</p>
                        <img src="themes/img/ad/f3.jpg">
                    </div>
                    <div class="aui-flex-item-6 aui-padded-10 aui-border-l ">
                        <h5 class="aui-text-success">每日坚果</h5>
                        <p>每天补充一下</p>
                        <img src="themes/img/ad/f5.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="aui-avd-content clearfix">
        <a href="#">
            <img src="themes/img/pd/cf-1.jpg" alt="">
        </a>
        <a href="#">
            <img src="themes/img/pd/cf-3.jpg" alt="">
        </a>
    </div>
    <div class="aui-title-head">
        <img src="themes/img/icon/i-i1.png"  alt="">
    </div>
    <div class="aui-slide-box aui-slide-box-clear">
        <div class="aui-slide-list">
            <ul class="aui-slide-item-list">
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-6.jpg">
                    </a>
                </li>
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-5.jpg">
                    </a>
                </li>
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-4.jpg">
                    </a>
                </li>
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-3.jpg">
                    </a>
                </li>
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-2.jpg">
                    </a>
                </li>
                <li class="aui-slide-item-item">
                    <a href="#" class="v-link">
                        <img class="v-img" src="themes/img/ad/tou-1.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="aui-list-content">
        @foreach($cate as $k=>$v)
        <div class="aui-title-head">
            <img src="{{$v->cnamesrc}}"  alt="">
        </div>
        <div class="aui-list-item">
            <div class="aui-list-item-img">
                <img src="{{asset($v->csrc)}}" alt="">
            </div>
            <div class="aui-slide-box">
                <div class="aui-slide-list">
                    <ul class="aui-slide-item-list">
                        @foreach($goods as $key=>$vv)
                        @if($v->cid==$vv->cid)
                        <li class="aui-slide-item-item">
                            <a href="ui-product.html" class="v-link">
                                <img class="v-img" src="{{$vv->gsrc}}">
                                <p class="aui-slide-item-title aui-slide-item-f-els">{{$vv->gname}}</p>
                                <p class="aui-slide-item-info">
                                    <span class="aui-slide-item-price">¥{{$vv->gprice}}</span>&nbsp;&nbsp;<span class="aui-slide-item-mrk">¥5699</span>
                                </p>
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="aui-recommend">
        <img src="themes/img/bg/icon-tj1.jpg" alt="">
        <!--<h2>为你推荐</h2>-->
    </div>
    <section class="aui-list-product">
        <div class="aui-list-product-box">
            <a href="ui-product.html" class="aui-list-product-item">
                <div class="aui-list-product-item-img">
                    <img src="themes/img/pd/sf-15.jpg" alt="">
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
                    <img src="themes/img/pd/sf-14.jpg" alt="">
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
                    <img src="themes/img/pd/sf-13.jpg" alt="">
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
                    <img src="themes/img/pd/sf-12.jpg" alt="">
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
                    <img src="themes/img/pd/sf-11.jpg" alt="">
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
                    <img src="themes/img/pd/sf-10.jpg" alt="">
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
                    <img src="themes/img/pd/sf-9.jpg" alt="">
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
                    <img src="themes/img/pd/sf-8.jpg" alt="">
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
                    <img src="themes/img/pd/sf-16.jpg" alt="">
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
                    <img src="themes/img/pd/sf-17.jpg" alt="">
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
                    <img src="themes/img/pd/sf-18.jpg" alt="">
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
                    <img src="themes/img/pd/sf-19.jpg" alt="">
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
                    <img src="themes/img/pd/sf-20.jpg" alt="">
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
                    <img src="themes/img/pd/sf-21.jpg" alt="">
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
                    <img src="themes/img/pd/sf-22.jpg" alt="">
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
                    <img src="themes/img/pd/sf-23.jpg" alt="">
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
</div>
@endsection
