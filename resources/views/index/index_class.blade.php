@extends('layouts.index')

@section('title', '分类')

@section('sidebar')
<header class="aui-header-default aui-header-fixed ">
    <a href="#" class="aui-header-item">
        <i class="aui-icon aui-icon-back"></i>
    </a>
    <div class="aui-header-center aui-header-center-clear">
        <div class="aui-header-search-box">
            <i class="aui-icon aui-icon-small-search"></i>
            <input id="" type="text"  placeholder="iphone8 手机钢化膜" class="aui-header-search">
        </div>
    </div>
    <a href="#" class="aui-header-item-icon">
        <i class="aui-icon aui-icon-packet"></i>
        <i class="aui-icon aui-icon-member"></i>
    </a>
</header>
<section class="aui-scroll-contents">
    <div class="aui-scroll-box" data-ydui-scrolltab>
        <div class="aui-scroll-nav">
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">热门推荐</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">美容彩妆</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">母婴专区</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">箱包配饰</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">家居个护</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">营养保健</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">服饰鞋靴</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">数码家电</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">运动户外</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">汽车用品</div>
            </a>
            <a href="#" class="aui-scroll-item aui-crt">
                <div class="aui-scroll-item-icon"></div>
                <div class="aui-scroll-item-text">生活旅行</div>
            </a>
        </div>
        <div class="aui-scroll-content">
            <div class="aui-scroll-content-item">
                <div class="aui-class-img">
                    <img src="themes/img/pd/cf-4.jpg" alt="">
                </div>
                <h2 class="aui-scroll-content-title">热门推荐</h2>
                <section class="aui-grid-content">
                    <div class="aui-grid-row aui-grid-row-clear">
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-1.jpg" alt=""></i>
                            <p class="aui-grid-row-label">手机数码</p>
                        </a>
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-2.jpg" alt=""></i>
                            <p class="aui-grid-row-label">笔记本</p>
                        </a>
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-3.jpg" alt=""></i>
                            <p class="aui-grid-row-label">空调</p>
                        </a>
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-4.jpg" alt=""></i>
                            <p class="aui-grid-row-label">儿童文学</p>
                        </a>
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-5.jpg" alt=""></i>
                            <p class="aui-grid-row-label">啤酒</p>
                        </a>
                        <a href="my-products-class.html" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-6.jpg" alt=""></i>
                            <p class="aui-grid-row-label">海参</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-7.jpg" alt=""></i>
                            <p class="aui-grid-row-label">床</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-8.jpg" alt=""></i>
                            <p class="aui-grid-row-label">衣物清洁</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-9.jpg" alt=""></i>
                            <p class="aui-grid-row-label">羽绒服</p>
                        </a>
                    </div>
                </section>
            </div>
            <div class="aui-scroll-content-item">
                <div class="aui-class-img">
                    <img src="themes/img/pd/cf-8.jpg" alt="">
                </div>
                <h2 class="aui-scroll-content-title">美容彩妆</h2>
                <section class="aui-grid-content">
                    <div class="aui-grid-row aui-grid-row-clear">
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-1.jpg" alt=""></i>
                            <p class="aui-grid-row-label">手机数码</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-2.jpg" alt=""></i>
                            <p class="aui-grid-row-label">笔记本</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-3.jpg" alt=""></i>
                            <p class="aui-grid-row-label">空调</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-4.jpg" alt=""></i>
                            <p class="aui-grid-row-label">儿童文学</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-5.jpg" alt=""></i>
                            <p class="aui-grid-row-label">啤酒</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-6.jpg" alt=""></i>
                            <p class="aui-grid-row-label">海参</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-7.jpg" alt=""></i>
                            <p class="aui-grid-row-label">床</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-8.jpg" alt=""></i>
                            <p class="aui-grid-row-label">衣物清洁</p>
                        </a>
                        <a href="#" class="aui-grid-row-item">
                            <i class="aui-icon-large aui-icon-sign"><img src="themes/img/ad/x-sf-9.jpg" alt=""></i>
                            <p class="aui-grid-row-label">羽绒服</p>
                        </a>
                    </div>
                </section>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">母婴专区</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">箱包配饰</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">家居个护</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">营养保健</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">服饰鞋靴</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">数码家电</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">运动户外</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">汽车用品</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
            <div class="aui-scroll-content-item">
                <strong class="aui-scroll-content-title">生活旅行</strong>
                <div style="height: 300px;background-color: #ededed;"></div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer')
@endsection
@section('script')

@endsection
