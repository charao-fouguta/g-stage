
////文字と画像が上から下、下から上にフェードイン
$(window).on('load scroll', function (){
	var fadeTo = $('.is-fadeToBottom');
	var parallelBanner = $('.c-parallelBanner');
	var fadeToTopImg = $('.is-fadeToTopImg');
	var fadeToBottomImg = $('.is-fadeToBottomImg');
	var fadeImage = $('.c-fadeInImage');
	var fadeImg = $('.is-fadeInImg');
	var fadeImage2 = $('.c-fadeInImage2');
	var fadeImg2 = $('.is-fadeInImg2');
	var appear = 'is-appear';
	fadeTo.each(function(){
  
	var fadeOffset = $(this).offset().top;
	var scrollPos = $(window).scrollTop();
	var wh = $(window).height();

	//画面内のどの位置で処理を実行するかで「100」の値を変更
	if(scrollPos > fadeOffset - wh + 100 ){
		$(this).addClass(appear);
	}
	});
	parallelBanner.each(function(){
		var fadeOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();
	
		if(scrollPos > fadeOffset - wh + 300 ){
			fadeToTopImg.addClass(appear);
			fadeToBottomImg.addClass(appear);
		}
	});
	fadeImage.each(function(){
		var fadeOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();
	
		if(scrollPos > fadeOffset - wh + 300 ){
			fadeImg.addClass(appear);
		}
	});
	fadeImage2.each(function(){
		var fadeOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();
	
		if(scrollPos > fadeOffset - wh + 300 ){
			fadeImg2.addClass(appear);
		}
	});
});