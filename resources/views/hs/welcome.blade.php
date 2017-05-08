@extends('hs.layouts')

@section('content')
		<div class="page page0">
			<div class="deswrite">
				<img src="{{asset('img3/huishilogo.png')}}"/>
			</div>
			<div class="tu">
				<div class="left">
					<img src="{{asset('img3/begin/shop.png')}}" alt="" />
				</div>
				<!--<div class="hu">
					<img src="img3/"/>
				</div>-->
			</div>
		</div>
		<div class="page page1 hidden" id="page1 ">
			<div class="bg">
				<img src="{{asset('img3/bg.png')}}"/>
			</div>
			<div class="deswriteText">
				<img src="{{asset('img3/begin2/question1.png')}}" />
			</div>
			<div class="answerBtm">
				<img src="{{asset('img3/begin2/answerBrm.png')}}"/>
			</div>
			<div class="footer">
				<img src="{{asset('img3/begin/shop.png')}}"/>
			</div>
			<!--<div class="content">
				<div class="contentBg">
					<img src="img/begin/beginIn.png" />
				</div>
				<div class="btm">
					<img src="img/begin/beginBtm.png" />
				</div>
			</div>-->
		</div>



	@endsection


