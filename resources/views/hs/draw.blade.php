@extends('hs.layouts')

@section('content')
    <div class="page page7">
        <div class="logo">
            <img src="{{asset('img3/logo.png')}}"/>
        </div>
        <div class="content">
            <div class="prizeText">
                <p class="wishText">恭喜你抽中了</p>
                @if($prize == 1)
                <p class="giftText">安卓/IOS两用数据线</p>
                    @elseif($prize ==2)
                    <p class="giftText">唇彩移动电源</p>
                    @elseif($prize==3)
                    <p class="giftText">生活储物三件套</p>
                    @else
                    <p class="giftText">先知感温杯</p>
                    @endif
            </div>
            <div class="award">
                <div class="awardBg">
                    <img src="{{asset('img3/prize/numBg.png')}}"/>
                </div>
                <div class="awardText">
                    <p class="awardFont">中奖码</p>
                    <p class="awardNun">{{$prize_code}}</p>
                    <div class="sText">
                        <img src="{{asset('img3/t.png')}}" alt=""/>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="btmText">
                <p class="instrText">您还有一份来自</p>
                <p class="shop"><span>京东惠氏店铺</span>的好礼！</p>

            </div>
            <a href="http://coupon.m.jd.com/coupons/show.action?key=01be87ffecc74045848d7cd299eb292a&roleId=6405081&to=sale.jd.com/m/act/sbtJUVC3NlgfI.html"
               class="rewardBtm">
                <img src="{{asset('img3/prize/prizeBtm.png')}}"/>
            </a>
        </div>
    </div>
@endsection
@section('script')
@endsection