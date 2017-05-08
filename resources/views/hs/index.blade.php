@extends('hs.layouts')

@section('content')
    <div class="page page2 ">
        <div class="logo">
            <img src="{{asset('img3/logo.png')}}"/>
        </div>
        <div class="content">
            <!--<div class="contentBg">
                <img src="img/p2/popupBg.png" />
            </div>-->
            <div class="subjectAll ">

                {{--随机选取4道题--}}
                @foreach($questions as $question)

                    <div id="id{{$loop->index}}" class="subject @if(!$loop->first) hidden @endif">
                        <span>{{$loop->index +1}}</span>
                        <div class="title">
                            {!! $question->title !!}
                        </div>
                        <div class="answer">
                            <p onclick="clickSelect('a','{{$question->answer}}',{{$loop->index}})">
                                A.{{$question->a}}</p>
                            <p onclick="clickSelect('b','{{$question->answer}}',{{$loop->index}})">
                                B.{!! $question->b !!}</p>
                            <p onclick="clickSelect('c','{{$question->answer}}',{{$loop->index}})">
                                C.{{$question->c}}</p>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>
        <div class="popup popup1 errPopup hidden">
            <div class="content">

                <div class="con">
                    <img src="{{asset('img3/cancel.png')}}"/>

                </div>
                <p class="p1">很遗憾</p>
                <p class="rightText">正确的答案是</p>
                <span class="rightAnswer" id="answer">B</span>


            </div>
        </div>


    </div>
@endsection

@section('script')
    <script type="application/javascript">

        var i = 0;
        function clickSelect(num, answer, index) {
            if (num == answer) {
                i++;
                if (index == 4) {
                    window.location.href = '{{url('hs/result')}}' + '/' + i;
                }
                document.getElementById('id' + index).className = 'subject hidden';
                document.getElementById('id' + (index + 1)).className = 'subject';


            } else {
                if (index == 4) {
                    window.location.href = '{{url('hs/result')}}' + '/' + i;
                }
//                弹出模态框
                document.getElementsByClassName('errPopup')[0].style.display = 'block';

                document.getElementById("answer").innerHTML = answer;
                document.getElementById('id' + index).className = 'subject hidden';
                document.getElementById('id' + (index + 1)).className = 'subject';
            }
        }
        $('.subject p').click(function () {

            $(this).addClass('yesClick').siblings().removeClass('yesClick');

        })

        $('.popup1 .cancelBtm').click(function () {

            $('.popup1').css('display', 'none');

        })
    </script>
@endsection