//第一页的确定按钮

//	$('.page1 .btm').click(function(){
//		$('.page2').removeClass('hidden').siblings().addClass('hidden');
//	})
//$('.subject p').click(function() {
//
//	$(this).addClass('yesClick').siblings().removeClass('yesClick');
//
//})
//$('.popup .cancelBtm').click(function() {
//
//	$(this).parents('.popup').addClass('hidden');
//
//})
//
//$('.page3 .popup .cancel').click(function() {
//
//	$('.page3 .popup').css('display', 'none');
//
//})

count();
function count(){
	
	$('.page0').fadeOut(5000);
	
	$('.page1').fadeIn(5000);
	
//	console.log($('.page2 .errPopup'));
	
	$('.page2 .errPopup').click(function(){
		
		$(this).hide();
	})
	
}



//console.log(123);
//question();
//
//function question(){
//	var width = $('.subject .answer p').width();
//	
////	console.log(width);
//	$('.subject .answer').css({
//		'width':width,
//		'left':'0%',
//		'right':'0%',
//		'margin':'auto'
//		
//	})
//}
