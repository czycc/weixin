<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>惠氏</title>
    <meta name="description" content="惠氏">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <link rel="stylesheet" href="{{asset('css/common2.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/huishi.css')}}"/>
    <script type="text/javascript" src="{{asset('js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/awardRotate.js')}}"></script>
    <script src="{{asset('js/z.js')}}" type="text/javascript" charset="utf-8"></script>
</head>

<body>
@yield('content')
	<audio id="audio" class="audio" autoplay="autoplay" preload loop="loop">
		<source src="{{asset('yinyue.mp3')}}"></source>
	</audio>

</body>

<script src="{{asset('js/huishi.js')}}" type="text/javascript" charset="utf-8"></script>

@yield('script')

</html>