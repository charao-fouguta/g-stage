import "./style.scss";
import jQuery from 'jquery';


let winW;
let tb;	

function getWidth() {
	winW = window.innerWidth;
	tb = 768;
}
getWidth();


////mvのアクション

let gStages = document.querySelector('.p-gStages');
if (gStages) {
	mvAction();
}

function mvAction() {
	gStages;
	let gStage = document.getElementsByClassName('p-gStage');
	let gallipoliUl = document.querySelector('.p-gallipoli__ul');
	let gallipoli = document.getElementsByClassName('p-gallipoli');
	let gStageLogo = document.querySelector('.p-gStageLogo');
	let gallipoliLogo = document.querySelector('.p-gallipoliLogo');
	let mvGuides = document.getElementsByClassName('p-topMVGuide');
	setTimeout(() => {
		gStages.classList.remove('is-first');
		mvRoopImgA(gStage);
		gStage[3].classList.add('is-fadeIn');
		gallipoli[3].classList.add('is-fadeIn');
	}, 1000);
	setTimeout(() => {
		gallipoliUl.classList.remove('is-first');
	}, 1300);
	setTimeout(() => {
		gStageLogo.classList.remove('is-first');
	}, 2500);
	setTimeout(() => {
		gallipoliLogo.classList.remove('is-first');
	}, 3000);
	setTimeout(() => {
		for (var i=0; i<mvGuides.length; i++) {
			mvGuides[i].classList.remove('is-first');
			mvRoopImgB(gallipoli);
		}
	}, 5000);

	function mvRoopImgA(brand) {
		let n = brand.length-1;
		let roop = 8000;
		let fadeInOutA = function() {
			brand[n].classList.remove('is-fadeIn');
			n--;
			setTimeout(() => {
				brand[n].classList.add('is-fadeIn');
			}, 100);
			if (n <= -1) {
				n = brand.length-1;
			}
		}
		setInterval(fadeInOutA, roop);
	}
	function mvRoopImgB(brand) {
		let n = brand.length-1;
		let roop = 8000;
		let fadeInOutB = function() {
			brand[n].classList.remove('is-fadeIn');
			n--;
			setTimeout(() => {
				brand[n].classList.add('is-fadeIn');
			}, 100);
			if (n <= -1) {
				n = brand.length-1;
			}
		}
		setInterval(fadeInOutB, roop);
	}
}


////header
let header = document.querySelector('.l-header');
let headerGuide = document.querySelector('.l-header__guide');
let headerNav = document.querySelector('.l-header__nav');
let headerHam = document.querySelector('.l-header__hamburger');
let main = document.querySelector('.l-main');
let footer = document.querySelector('.l-footer');

headerGuide.addEventListener('click', function () {
	switchMenu();
})
headerHam.addEventListener('click', function () {
	switchMenu();
})

function switchMenu() {
	
	winW, tb;
	getWidth();

	if (!headerNav.classList.contains('is-navOpen')) {
		openMenu();
	} else {
		closeMenu();
	}	
}
function openMenu() {
	if (winW >= tb) {
		header.classList.add('is-navPreOpen');
	}
	headerNav.classList.add('is-navOpen');
	main.classList.add('is-navOpen');
	footer.classList.add('is-navOpen');
	setTimeout(() => {
		if (winW >= tb) {
			header.classList.remove('is-navPreOpen');
		}
		header.classList.add('is-navOpen');
		headerHam.classList.add('is-navOpen');
		headerGuide.innerHTML = 'CLOSE MENU';
	}, 200);
}
function closeMenu() {	
	headerNav.classList.remove('is-navOpen');
	main.classList.remove('is-navOpen');
	footer.classList.remove('is-navOpen');
	setTimeout(() => {
		header.classList.remove('is-navOpen');
		headerHam.classList.remove('is-navOpen');
		headerGuide.innerHTML = 'OPEN MENU';
	}, 200);
}

//スクロール禁止 ※ヘッダーのメニュー展開の時に必要に応じて差し込めます

function scroll_control(event) {
	event.preventDefault();
}
function stopScroll() {
	document.addEventListener("mousewheel", scroll_control, { passive: false });
	document.addEventListener("touchmove", scroll_control, { passive: false });
}
function resetScroll() {
	document.removeEventListener("mousewheel", scroll_control, { passive: false });
	document.removeEventListener('touchmove', scroll_control, { passive: false });
}


////画面サイズ切り替え時の処理
/*
getCurrentWidth();
window.onresize = getCurrentWidth;
function getCurrentWidth() {
	winW, tb;
	getWidth();

}
*/

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