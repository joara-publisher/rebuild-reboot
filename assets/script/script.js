// Document ready
$(() => {
	fixUpBtnToggle();
	pricyBtnToggle();
	commonSelect();
	commonTelInput();
	questionActive();
	caseActive();
	subBanSwiper();

	/* 애니메이션 관련 */
	scollHandler();
	scrollTxtAni();

	document.addEventListener("scroll", function () {
		/* 스크롤 애니메이션 */
		scollHandler();
	});
});

// 클릭시 맨위로 이동하는 버튼
const fixUpBtnToggle = () => {
	$('.fixUpBtn').click(function(){
		$("html,body").animate({ scrollTop: 0 }, 100);
	});
};

// 공통 팝업 이벤트
const pricyBtnToggle = () => {
	$(".privacyBtn").click(function () {
		$("#privacyPopup").addClass("show");
	});
	$(".termsBtn").click(function () {
		$("#termsPopup").addClass("show");
	});
	$(".personalBtn").click(function () {
		$("#personalPopup").addClass("show");
	});
	$(".marketingBtn").click(function () {
		$("#marketingPopup").addClass("show");
	});


	$(".privacyPopupSec").click(function () {
		$(".privacyPopupSec").removeClass("show");
	});
	$(".privacyPopupSec .popupContentArti").click(function (e) {
		e.stopPropagation();
	});
	$(".privacyPopupSec .popupContentArti .titleBox .closeBtn").click(
		function () {
			$(".privacyPopupSec").removeClass("show");
		}
	);
};

// select 선택 전 후 아이콘이 다를 경우
const commonSelect = () => {
	$(document).on('change', 'form select', function () {
		if($(this).val() != '' || $(this).val() == 'undefined') {
			$(this).addClass('active');
		} else {
			$(this).removeClass('active');
		}
	});
};

// 휴대폰 입력창 숫자만 입력하고 - 자동으로 입력
const commonTelInput = () => {
	$(document).on("keyup", "input[type='tel']", function() {
		$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") ); 
	});
};

// 스크롤 애니메이션 
const scollHandler = () => {
    const scroll_y = window.scrollY + window.innerHeight / 1.5;
    const animationContainer = document.querySelectorAll(".ani");

	if(window.scrollY != 0) {
		$('header').addClass('scroll');
	}else {
		$('header').removeClass('scroll');
	}

    animationContainer.forEach((element) => {
        const itemTop = element.getBoundingClientRect().top + window.scrollY;

        // 스크롤 위치에 따라 'on' 클래스 추가/제거
        if (scroll_y > itemTop) {
            element.classList.add("on");
        } else {
            element.classList.remove("on");
        }
    });
};

// 메인 텍스트 애니메이션
const scrollTxtAni = () => {
	gsap.registerPlugin(ScrollTrigger);

	const textElements = gsap.utils.toArray('.mainTxt');

	// textElements.forEach(text => {
	// 	gsap.to(text, {
	// 		backgroundSize: '100%',
	// 		ease: 'none',
	// 		scrollTrigger: {
	// 		trigger: text,
	// 		start: 'center 100%',
	// 		end: 'center 30%',
	// 		scrub: true,
	// 		},
	// 	});
	// });

	// 1차 수정
	textElements.forEach(text => {
		gsap.to(text, {
			backgroundSize: '100%',
			ease: 'none',
			scrollTrigger: {
			trigger: text,
			start: 'center 70%',
			end: 'center 30%',
			scrub: true,
			},
		});
	});
};

// 질문 열고 닫기
const questionActive = () => {
	$('.question').click(function (event) {
		$(this).parent().toggleClass('on');
		$(this).parent().find('.answer').stop().slideToggle(300);
	});
};

// 성공사례 동작
const caseActive = () => {
	// 이미지 클릭 시 모달 동작
	$(".caseArti li").click(function (e){
		let imgSrc = $(this).find("img").attr("src");
		$('.modal.caseModal .modalBox img').attr("src", imgSrc);
		$('.modal.caseModal').show();
	});

	$(".modal.caseModal .closeBtn").click(function (e){
		$('.modal.caseModal').hide();
	});

	// 성공사례 더보기
	$(".caseArti .moreBtn").click(function (){
		var i = 11;
		var windowWidth = $(window).width();

		if(windowWidth < 769) {
			i = 4;
		} else if( windowWidth < 1025 ) {
			i = 5;
		}

		var wrap = $(".caseArti .caseList");
		var n = wrap.find("li").index(wrap.find("li:visible").last());
		n = n +i;

		wrap.find("li:lt("+n+")").show().css("visibility", "visible");
	});
};

// 스와이퍼 배너
const subBanSwiper = () => {
	var swiper = new Swiper('.subBanSwiper', {
		autoplay: {
			delay: 5500,
			disableOnInteraction: false,
		},
		spaceBetween: 0,
		effect: 'fade',
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
    });
};












