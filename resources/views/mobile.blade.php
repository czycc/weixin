<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1,,user-scalable=no">
    <meta name="format-detection" content="telephone=no,email=no"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <link rel="stylesheet" href="{{asset('css/common.css')}}"/>
    <!--<link rel="stylesheet" href="css/swiper.min.css" />-->
    <link rel="stylesheet" href="{{asset('css/phone.css')}}">

</head>

<body>
<div class="page">
    <div class="content">
        <div class="bg">
            <img src="{{asset('img/bg.png')}}"/>
        </div>

    <!--<audio id="audio" class="audio" autoplay="autoplay" preload loop="loop">
					<source src="{{asset('X-Ray Dog - Flight Of Dreams.mp3')}}"></source>
				</audio>-->
    <!--<div class="yinyue">
					<img id="music" src="{{asset('img/yinyue.png')}}" />
				</div>-->
        <form action="{{url('vip/mobile/create')}}" method="post">
            {{ csrf_field() }}

            <div class="font">

                <span class="promptText">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
                <input type="text" name="name" id="name" value="{{old('name')}}"/>

            </div>
            <div class="font">

                <span class="promptText">单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</span>
                <input type="text" name="company" id="company" value="{{old('company')}}"/>
            </div>
            <div class="font">

                <span class="promptText">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务</span>
                <input type="text" name="job" id="job" value="{{old('job')}}"/>
            </div>
            <div>

                <span class="promptText">手机号码</span>
                <input type="text" name="phone" id="phone" value="{{old('phone')}}"/>
            </div>
            <div class="font">

                <span class="promptText">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</span>
                <input type="text" name="email" id="email" value="{{old('email')}}"/>
            </div>
            <div>

				<span  class="promptText">所属身份</span>
                <select name="identity" id="identity">
                    <option value="{{null!==old('identity')? old('identity') : ''}}">{{null!==old('identity')? old('identity') : '选择身份'}}</option>
                    <option value="ISV">ISV</option>
                    <option value="集成商">集成商</option>
                    <option value="渠道商">渠道商</option>
                    <option value="客户">客户</option>
                    <option value="媒体">媒体</option>
                    <option value="其他">其他</option>
                </select>
            </div>
 
            <div>

				<span  class="promptText">所属行业</span>
                <select name="trade" id="trade">
                    <option value="{{null!==old('trade')? old('trade') : ''}}">{{null!==old('trade')? old('trade') : '选择行业'}}</option>
                    <option value="政务">政务</option>
                    <option value="企业">企业</option>
                    <option value="公安">公安</option>
                    <option value="教育">教育</option>
                    <option value="交通">交通</option>
                    <option value="医疗">医疗</option>
                    <option value="其他">其他</option>
                </select>
            </div>

           <div class="">

				<span  class="promptText">所属省份</span>
                <select name="province" id="province">
                    <option value="{{null!==old('province')? old('province') : ''}}">{{null!==old('province')? old('province') : '选择省份'}}</option>
                    <option value="北京市">北京市</option>
                    <option value="天津市">天津市</option>
                    <option value="上海市">上海市</option>
                    <option value="重庆市">重庆市</option>
                    <option value="河北省">河北省</option>
                    <option value="河南省">河南省</option>
                    <option value="云南省">云南省</option>
                    <option value="辽宁省">辽宁省</option>
                    <option value="黑龙江省">黑龙江省</option>
                    <option value="湖南省">湖南省</option>
                    <option value="安徽省">安徽省</option>
                    <option value="山东省">山东省</option>
                    <option value="新疆维吾尔">新疆维吾尔</option>
                    <option value="江苏省">江苏省</option>
                    <option value="浙江省">浙江省</option>
                    <option value="江西省">江西省</option>
                    <option value="湖北省">湖北省</option>
                    <option value="广西壮族">广西壮族</option>
                    <option value="甘肃省">甘肃省</option>
                    <option value="山西省">山西省</option>
                    <option value="内蒙古">内蒙古</option>
                    <option value="陕西省">陕西省</option>
                    <option value="吉林省">吉林省</option>
                    <option value="福建省">福建省</option>
                    <option value="贵州省">贵州省</option>
                    <option value="广东省">广东省</option>
                    <option value="青海省">青海省</option>
                    <option value="西藏">西藏</option>
                    <option value="四川省">四川省</option>
                    <option value="宁夏回族">宁夏回族</option>
                    <option value="海南省">海南省</option>
                    <option value="台湾省">台湾省</option>
                    <option value="香港特别行政区">香港特别行政区</option>
                    <option value="澳门特别行政区">澳门特别行政区</option>
                </select>
            </div>
            <p class="messageText">(以上均为必填项)</p>
            <div class="submit">
                <label for="submitBtm"><img src="{{asset('img/tjBtm_03.png')}}"/></label>
                <input id="submitBtm" type="submit" value="提交"/>
            </div>
        </form>
    </div>
    @if($errors->any())
        <div class="popup">
            <div class="popupcontent">
                <div class="abs">
                    <img src="{{asset('img/white.png')}}"/>
                    <p><span>{{$errors->first()}}</span></p>
                </div>
                <div class="okBtm">
                    <img src="{{asset('img/OK.png')}}"/>
                </div>
            </div>
        </div>
    @endif
</div>

</body>

<script src="{{asset('js/zepto.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/touch.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var conHeight = $(window).height(); //获取手机设备的高度

    //		console.log(conHeight);

    $('.page .content').height(conHeight);
    $('.okBtm img').on('click', function () {

//			console.log(123);

        $(this).parents('.popup').hide();
    })

    //		$('.page .content .bg').height(conHeight);

    //		console.log($('.page .content').height());

    //		var audio = document.getElementById('audio');
    //
    //		var music = document.getElementById('music');
    //
    //
    //		function audioAutoPlay(id) {
    //			var audio = document.getElementById(id),
    //				play = function() {
    //					audio.play();
    //					document.removeEventListener("touchstart", play, false);
    //				};
    //			audio.play();
    //			document.addEventListener("WeixinJSBridgeReady", function() {
    //				play();
    //			}, false);
    //			document.addEventListener('YixinJSBridgeReady', function() {
    //				play();
    //			}, false);
    //			document.addEventListener("touchstart", play, false);
    //		}
    //		audioAutoPlay('audio');
    //
    //		window.onload = function() {
    //			audio.play();
    //			//			alert('ok')
    //		}
    //		music.addEventListener('touchstart', function() {
    //
    //			//			console.log(123);
    //
    //			if(audio.paused) {
    //
    //				audio.play();
    //
    //			} else {
    //
    //				audio.pause();
    //
    //			}
    //		})
    //
    //		//		console.log(audio)
    //		$('.yuinyue img').on('tap', function() {
    //
    //			console.log(123);
    //
    //			if(audio.paused) {
    //				audio.play()
    //			} else {
    //				audio.pause();
    //			}
    //		})
    //		$('.yinyue').click(function(){
    //
    //			if(audio.paused){
    //
    //				audio.play();
    //
    //			}else{
    //
    //				audio.pause();
    //
    //			}
    //		})
</script>


</html>