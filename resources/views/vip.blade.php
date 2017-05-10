<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="{{asset('css2/index.css')}}"/>
</head>
<body>
<div class="all page1">
    <div class="header">
        <img src="{{asset('img2/header.jpg') }}"/>
    </div>
    <div class="con">
        <form action="{{url('/vip/create')}}" method="post">
            {{ csrf_field() }}
            <p class="title">请您填写以下参会信息！<span>(带*为必填内容)</span></p>
            <div class="font">
                <span  class="promptText"><div class="asterisk">*</div>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</span>
                <input type="text" name="name" id="name" value="{{ old('name') }}"/>

            </div>
            <div class="font">
                <span  class="promptText"><div class="asterisk">*</div>单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位</span>
                <input type="text" name="company" id="company" value="{{old('company')}}"/>
            </div>
            <div class="font">
                <span  class="promptText"><div class="asterisk">*</div>职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务</span>
                <input type="text" name="job" id="job" value="{{old('job')}}"/>
            </div>
            <div>
                <span  class="promptText"><div class="asterisk">*</div>手机号码</span>
                <input type="text" name="phone" id="phone" value="{{old('phone')}}"/>
            </div>
            <div class="font">
                <span  class="promptText"><div class="asterisk">*</div>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</span>
                <input type="text" name="email" id="email" value="{{old('email')}}"/>
            </div>
            <div class="select">
                <input type="text" name="identity" id="identity" value="{{old('identity')}}"/>
                <span  class="promptText"><div class="asterisk">*</div>所属身份</span>
                <div value="">
                    <p class="arrow"></p>
                    <span>选择身份</span>
                    <ul>
                        <li value="">ISV</li>
                        <li value="">集成商</li>
                        <li value="">渠道商</li>
                        <li value="">客户</li>
                        <li value="">媒体</li>
                        <li value="">其他</li>
                    </ul>
                </div>
            </div>
 
            <div class="select ">
                <input type="text" name="trade" id="trade" value="{{old('trade')}}"/>
                <span  class="promptText"><div class="asterisk">*</div>所属行业</span>
                <div value="">
                    <p class="arrow"></p>
                    <span>选择行业</span>
                    <ul>
                        <li value="">企业</li>
                        <li value="">公安</li>
                        <li value="">教育</li>
                        <li value="">交通</li>
                        <li value="">医疗</li>
                        <li value="">其他</li>
                    </ul>
                </div>
            </div>

           <div class=" select">
                <input type="text" name="province" id="province" value="{{old('province')}}"/>
                <span  class="promptText"><div class="asterisk">*</div>所属省份</span>
                <div value="">
                    <p class="arrow"></p>
                    <span>选择省份</span>
                    <!--<p class="arrow"></p>-->
                    <ul>

                        <li value="">北京市</li>
                        <li value="">上海市</li>
                        <li value="">重庆市</li>
                        <li value="">河北省</li>
                        <li value="">河南省</li>
                        <li value="">云南省</li>
                        <li value="">黑龙江省</li>
                        <li value="">湖南省</li>
                        <li value="">安徽省</li>
                        <li value="">山东省</li>
                        <li value="">新疆维吾尔</li>
                        <li value="">江苏省</li>
                        <li value="">浙江省</li>
                        <li value="">江西省</li>
                        <li value="">湖北省</li>
                        <li value="">广西壮族</li>
                        <li value="">甘肃省</li>
                        <li value="">山西省</li>
                        <li value="">内蒙古</li>
                        <li value="">陕西省</li>
                        <li value="">吉林省</li>
                        <li value="">福建省</li>
                        <li value="">贵州省</li>
                        <li value="">广东省</li>
                        <li value="">青海省</li>
                        <li value="">西藏</li>
                        <li value="">四川省</li>
                        <li value="">宁夏回族</li>
                        <li value="">海南省</li>
                        <li value="">台湾省</li>
                        <li value="">香港特别行政区</li>
                        <li value="">澳门特别行政区</li>
                    </ul>
                </div>
            </div>
            <div class="submit">
                <label for="submitBtm"><img src="{{asset('img2/submit.png')}}"/></label>
                <input id="submitBtm" type="submit" value="提交"/>
            </div>
        </form>
        <div class="erweima">
            <img src="{{asset('img2/erweima.png') }}" alt="">
        </div>
    </div>
    <div class="footer">
        <img src="{{asset('img2/footer.jpg')}}" alt="">
    </div>

    @if($errors->any())
        <div class="popup">
            <div class="popupCon">
                <div class="top">
                    <img src="{{asset('img2/shang.png')}}"/>
                    <p><span>{{$errors->first()}}</span></p>
                </div>
                <div class="btm okBtm">
                    <img src="{{asset('img2/xia.png')}}"/>
                </div>
            </div>
        </div>
    @endif
<!--<div class="popup">
				<div class="content">
					<img src="img2/closeTop.png"/>
					<img src="img2/close.png"/>
				</div>
			</div>-->
</div>

</body>
<script src="{{asset('js2/jquery-1.10.2.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js2/index.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $('.select').find('div span').click(function () {


        $(this).next('ul').toggle();

        $(this).parents('.select').siblings().find('ul').hide();


    })
    $('li').click(function () {
        $(this).css('background-color', 'darkgrey').siblings().css('background-color', 'white');
        var text = $(this).html();
        $(this).parents('ul').prev().html(text);
        $(this).parents('ul').css('display', 'none');

        $(this).parents('.select').find('input').val(text);
    })

    $('.okBtm').click(function () {

        $(this).parents('.popup').hide();
    })
</script>
</html>
