
count();
function count(){
	
	$('.page0').fadeOut(4000);
	
	$('.page1').fadeIn(4000);
	

	
	$('.page2 .errPopup').click(function(){
		
		$(this).hide();
	})


	var answerText = document.getElementsByClassName('subjectAll')[0];
	
	var answer = answerText.getElementsByTagName('p');
	
	for(var i = 0;i < answer.length;i++){
		
		answer[i].addEventListener('touchstart',function(){
				
			for(var j = 0;j<answer.length;j++){
				
				answer[j].style.backgroundColor = 'white';
				
			}
			this.style.backgroundColor = "#d7d7d6";
			
		})
		

	}
}

yinyue();

function yinyue() {

	function audioAutoPlay(id) {
		var audio = document.getElementById(id),
			play = function() {
				audio.play();
				document.removeEventListener("touchstart", play, false);
			};
		audio.play();
		document.addEventListener("WeixinJSBridgeReady", function() {
			play();
		}, false);
		document.addEventListener('YixinJSBridgeReady', function() {
			play();
		}, false);
		document.addEventListener("touchstart", play, false);
	}
	audioAutoPlay('audio');
}




