import "./style.scss";
import jQuery from 'jquery';
//import * as cb from './js/jquery.colorbox';

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


////news一覧ページの view detail

let artcleMessage = document.getElementsByClassName('c-articleList__message');
let viewDetail = document.getElementsByClassName('c-articleList__viewDetail');
let closeDetail = document.getElementsByClassName('c-articleList__closeDetail');

if (viewDetail) {
	for (let i=0; i<viewDetail.length; i++) {
		viewDetail[i].addEventListener('click', function () {
			if (!artcleMessage[i].classList.contains('is-viewOpen')) {
				artcleMessage[i].classList.add('is-viewOpen');
				viewDetail[i].classList.add('is-viewOpen');
				closeDetail[i].classList.add('is-viewOpen');
			}
		});
	}
}
if (viewDetail) {
	for (let i=0; i<viewDetail.length; i++) {
		closeDetail[i].addEventListener('click', function () {
			if (artcleMessage[i].classList.contains('is-viewOpen')) {
				artcleMessage[i].classList.remove('is-viewOpen');
				viewDetail[i].classList.remove('is-viewOpen');
				closeDetail[i].classList.remove('is-viewOpen');
			}
		});
	}
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
