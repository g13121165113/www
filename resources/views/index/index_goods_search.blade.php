@extends('layouts.index')

@section('title', '搜索页')

@section('sidebar')
<header class="aui-header-default aui-header-fixed ">
    <a href="#" class="aui-header-item">
        <i class="aui-icon aui-icon-back"></i>
    </a>
    <div class="aui-header-center aui-header-center-clear">
        <div class="aui-header-search-box">
            <form action="{{url('index_goods_search')}}" method="get">
                <i class="aui-icon aui-icon-small-search"></i>
                <input id="" name="search" type="text" value="{{$search}}"   class="aui-header-search" style="display:inline">
                <button type="submit" style="border:none;display:inline"></button>
            </form>
        </div>
    </div>
    <a href="#" class="aui-header-item-icon">
        <i class="aui-icon aui-icon-packet"></i>
        <i class="aui-icon aui-icon-member"></i>
    </a>
</header>
<section class="aui-new-search-content">
    <div class="aui-new-search-tab">
        <ul>
            <li>
                <span class="aui-active">综合</span>
            </li>
            <li>
                <span>销量</span>
            </li>
            <li>
                <span>价格</span>
            </li>
            <li>
                <span>筛选</span>
            </li>
        </ul>
    </div>
    <div class="aui-custom-search-tab">
        <ul>
            <li>
                <span class="aui-active">萌宝配送</span>
            </li>
            <li>
                <span>新品</span>
            </li>
            <li>
                <span>品牌</span>
            </li>
            <li>
                <span>前置摄像</span>
            </li>
        </ul>
    </div>
</section>
<section class="aui-list-product">
    <div class="aui-list-product-float-item">
        @foreach($goods as $k=>$v)
        <a href="{{url('index_product')}}?gid={{$v->gid}}" class="aui-list-product-fl-item">
            <div class="aui-list-product-fl-img">
                <img src="{{asset($v->gsrc)}}" alt="">
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
                            ¥495.65
                        </span>
                    </div>
                    <div class="aui-btn-purchase">
                        99%好评
                    </div>

                </div>
                <div class="aui-list-self-sell">
                    <span class="aui-self-sell">自营</span>
                    <em class="aui-self-sell-em">247800条评价</em>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection
@section('footer')
@endsection
@section('script')

@endsection
