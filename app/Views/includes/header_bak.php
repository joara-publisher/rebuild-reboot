<!DOCTYPE html>
<html lang="ko">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NR9C7TNT');</script>
		<!-- End Google Tag Manager -->
		 <!-- Google tag (gtag.js) -->
		<script async
		src="https://www.googletagmanager.com/gtag/js?id=G-MRS97BJ1G4"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-MRS97BJ1G4');
		</script>

		<meta charset="UTF-8">
		<title><?= isset(session()->commonData['title']) ? esc(session()->commonData['title']) : '법률사무소 영웅 - 형사' ?></title>
		<meta name="title" content="<?= isset(session()->commonData['title']) ? esc(session()->commonData['title']) : '법률사무소 영웅 - 형사' ?>" />
		<meta name="keywords" content="<?= isset(session()->commonData['keywords']) ? esc(session()->commonData['keywords']) : '법률사무소,영웅,형사' ?>" />
		<meta name="description" content="<?= isset(session()->commonData['description']) ? esc(session()->commonData['description']) : '법률사무소 영웅의 형사 분야 페이지입니다' ?>" />
		<meta property="og:title" content="<?= isset(session()->commonData['title']) ? esc(session()->commonData['title']) : '법률사무소 영웅 - 형사' ?>" />
		<meta property="og:description" content="<?= isset(session()->commonData['description']) ? esc(session()->commonData['description']) : '법률사무소 영웅의 형사 분야 페이지입니다' ?>" />
		<meta property="og:keywords" content="<?= isset(session()->commonData['keywords']) ? esc(session()->commonData['keywords']) : '법률사무소,영웅,형사' ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="https://hero-crime.com/img/herologo.png" />
		<meta property="og:locale" content="ko_KR">

		<!-- 필수는 아니지만, 추천하는 og 태그 -->
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<link rel="stylesheet" href="/css/swiper.min.css">
		<link rel="stylesheet" href="/css/aos.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/style_resp.css">
		<script src="/js/jquery-1.8.3.min.js"></script>
		<script src="/js/swiper.min.js"></script>
		<script src="/js/aos.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/swal.js"></script>

		<!-- Flatpickr CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
		<!-- Flatpickr JS -->
		<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
		<!-- Flatpickr Korean Language Pack -->
		<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ko.js"></script>
		
		<link rel="apple-touch-icon" href="/img/favi.png" />
		<link rel="shortcut icon" href="/img/favi.png" type="image/x-icon">
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR9C7TNT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div id="wrap" class="<?php echo ($menu=='sub')? 'sub':'' ;?>">
			<!-- 로고시작 -->
			<div class="hero_logo <?php echo ($menu=='sub')? 'black':'' ;?>">
				<a href="/"></a>
			</div>
			<!-- 로고 끝 -->

			<!-- pc메뉴 -->
			<header class="clearfix header_pc">
				<div class="header_inner">
					<div class="header_section_01">
						<ul>
							<li><a href="/hero_intro">법률사무소 영웅</a></li>
							<li><a href="/intro">전문가 소개</a></li>
							<li><a href="/roadmap">오시는 길</a></li>
						</ul>
					</div>
					<div class="header_section_02">
						<ul>
							<li><a href="/board/case">업무 사례</a></li>
							<li><a href="/board/column">칼럼</a></li>
							<li><a href="/board/story">고객이야기</a></li>
							<li><a href="/board/news">소식</a></li>
							<li style="display:none;"><a href="/board/faq" style="pointer-events: none; cursor: default;">FAQ</a></li>
						</ul>
					</div>
					<div class="header_section_03">
						<p>30초 자가진단</p>
						<a href="/#reception" class="click_to_self">바로가기</a>
					</div>
					<div class="header_section_04">
						<div class="consult_txt_box">
							<a class="txt_box_tit" href="tel:1668-1841">
								<p>24시 상담</p>
								<span>1668-1841</span>
							</a>
							<div class="consult_receipt_box">
								<form action="" method="post" id="header_consult_form_pc">	
									<input type="hidden" name="type" value="quick">			
									<input type="hidden" name="sites" value="영웅-리마인더-형사">		
									<div class="select_wrap">
										<select name="selectCategory" id="consult_type_pc">
											<option value="">[필수]상담분야 선택</option>
											<option value="성범죄">성범죄</option>
											<option value="마약범죄">마약범죄</option>
											<option value="음주운전">음주운전</option>
											<option value="교통범죄">교통범죄</option>
											<option value="재산범죄">재산범죄</option>
											<option value="폭력범죄">폭력범죄</option>
											<option value="소년범죄">소년범죄</option>
											<option value="아동범죄">아동범죄</option>
										</select>
									</div>
									<div class="input_wrap">
										<input type="tel" id="consult_phone_pc" name="phone" placeholder="연락처" >
									</div>
									<div class="agree_wrap">
										<input type="checkbox" name="agree_check_pc" id="agree_check_pc">
										<label for="agree_check_pc">개인정보 수집 및 이용목적 동의</label>
									</div>
									<div class="btn_wrap">
										<span class="click_to_consult pc_consult_btn">상담신청</span>
									</div>
									<script>
										$('.pc_consult_btn').click(function(){
											$('#header_consult_form_pc').submit();
										});

										var submit=0;
										$('#header_consult_form_pc').submit(function(){
											if(submit==1){
												alert('신청중입니다. 잠시 기다려주세요.');
												return false;
											}
											var type = $('#consult_type_pc').val()
											var phone = $('#consult_phone_pc').val()
											var agree = $(this).find('[name="agree_check_pc"]').is(':checked')

											if(type==''){
												Swal.fire({
													icon: 'error',
													text: '상담분야를 입력해주세요.'
												});
												return false;
											}
											if(phone==''){
												Swal.fire({
													icon: 'error',
													text: '휴대전화번호를 입력해주세요.'
												});
												return false;
											}
											if(agree==false){
												Swal.fire({
													icon: 'error',
													text: '개인정보 수집 및 이용목적 동의에 체크해주세요.'
												});
												return false;
											}
											submit=1;
											alert('신청이 완료되었습니다.');
										});
									</script>
								</form>
							</div>
						</div>
					</div>
					<div class="header_section_05">
						<ul class="go_to_links">
							<li><a href="/counselling/visit"><img src="/img/consult_link_ico.png" alt="consult_link_ico">방문상담</a></li>
							<li><a href="/board/counselling"><img src="/img/link_board_ico.png" alt="link_board_ico">게시판 상담</a></li>
							<!-- <li><a href="https://blog.naver.com/hanart24" target="_blank"><img src="/img/blog_link_ico.png" alt="blog_link_ico">사건일지</a></li> -->
							<li><a href="https://lawfirm-hero.channel.io/home" target="_blank"><img src="/img/talk_link_ico.png" alt="talk_link_ico">채팅상담</a></li>
						</ul>
					</div>
				</div>
			</header>

			<!-- 모바일메뉴 -->
			<header class="clearfix header_mo">
				<div class="desktop_menu">
					<input type="checkbox" name="mo_menu" id="mo_menu">
					<label for="mo_menu">
						<span></span>
						<span></span>
						<span></span>
					</label>
					<div class="dt_gnb">
						<div class="header_section_01">
							<div class="gnb_logo"><a href="/"></a></div>
							<a class="gnb_click_to_call" href="tel:1668-1841"><img src="/img/header_call_ico.svg" alt="header_call_ico">1668-1841</a>
						</div>
						<div class="header_section_02">
							<ul>
								<li><a href="/hero_intro">법률사무소 영웅</a></li>
								<li><a href="/intro">전문가 소개</a></li>
								<li><a href="/roadmap">오시는 길</a></li>
								<li><a href="/#reception">30초 자가진단</a></li>
							</ul>
						</div>
						<div class="header_section_03">
							<ul>
								<li><a href="/board/case">업무 사례</a></li>
								<li><a href="/board/column">칼럼</a></li>
								<li><a href="/board/story">고객이야기</a></li>
								<li><a href="/board/news">소식</a></li>
								<li style="display:none;"><a href="/board/faq" style="pointer-events: none; cursor: default;">FAQ</a></li>
							</ul>
						</div>
						<div class="header_section_04">
							<div class="consult_txt_box">
								<div class="consult_receipt_box">
									<form action="" method="post" id="header_consult_form_mo">
										<input type="hidden" name="type" value="quick">		
										<input type="hidden" name="sites" value="영웅-리마인더-형사">		
										<div class="select_wrap">
											<select name="selectCategory" id="consult_type_mo">
												<option value="">[필수]상담분야 선택</option>
												<option value="형사">형사</option>
												<option value="성범죄·마약">성범죄·마약</option>
												<option value="음주·교통">음주·교통</option>
												<option value="이혼">이혼</option>
												<option value="상속">상속</option>
												<option value="회생">회생</option>
												<option value="민사·부동산">민사·부동산</option>
												<option value="소년범죄">소년범죄</option>
												<option value="기타">기타</option>
											</select>
										</div>
										<div class="input_wrap">
											<input type="tel" id="consult_phone_mo" name="phone" placeholder="연락처">
										</div>
										<div class="agree_wrap">
											<input type="checkbox" name="agree_check_mo" id="agree_check_mo">
											<label for="agree_check_mo">개인정보 수집 및 이용목적 동의</label>
										</div>
										<div class="btn_wrap">
											<span class="click_to_consult mo_consult_btn">상담신청</span>
										</div>
										<script>
											$('.mo_consult_btn').click(function(){
												$('#header_consult_form_mo').submit();
											});

											var submit=0;
											$('#header_consult_form_mo').submit(function(){
												if(submit==1){
													alert('신청중입니다. 잠시 기다려주세요.');
													return false;
												}
												var type = $('#consult_type_mo').val()
												var phone = $('#consult_phone_mo').val()
												var agree = $(this).find('[name="agree_check_mo"]').is(':checked')
			
												if(type==''){
													Swal.fire({
														icon: 'error',
														text: '상담분야를 입력해주세요.'
													});
													return false;
												}
												if(phone==''){
													Swal.fire({
														icon: 'error',
														text: '휴대전화번호를 입력해주세요.'
													});
													return false;
												}
												if(agree==false){
												Swal.fire({
													icon: 'error',
													text: '개인정보 수집 및 이용목적 동의에 체크해주세요.'
												});
												return false;
												}
												submit=1;
											});
										</script>
									</form>
								</div>
							</div>
						</div>
						<div class="header_section_05">
							<ul class="go_to_links">
								<li><a href="/counselling/visit"><img src="/img/consult_link_ico.png" alt="consult_link_ico">방문상담</a></li>
								<li><a href="/board/counselling"><img src="/img/link_board_ico.png" alt="link_board_ico">게시판 상담</a></li>
								<!-- <li><a href="https://blog.naver.com/hanart24" target="_blank"><img src="/img/blog_link_ico.png" alt="blog_link_ico">사건일지</a></li> -->
								<li><a href="https://lawfirm-hero.channel.io/home" target="_blank"><img src="/img/talk_link_ico.png" alt="talk_link_ico">채팅상담</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>

			<!-- 모바일 하단 퀵메뉴 -->
			<div class="mo_quick">
				<a class="quick_menu quick_call" href="tel:1668-1841">
					<img src="/img/quick_call_ico.svg" alt="quick_call_ico.png">
					<span>전화상담</span>
				</a>
				<a class="quick_menu quick_chat" href="https://lawfirm-hero.channel.io/home" target="_blank">
					<img src="/img/quick_chat_ico.svg" alt="mo_icon3.png">
					<span>채팅상담</span>
				</a>
			</div>

			<!-- 시계 시작 -->
			<div class="frame">
				<div class="clock">
					<div class="time_box">
						<span id="year"></span>
						<span>.</span>
						<span id="month"></span>
						<span>.</span>
						<span id="date"></span>
						<span id="day"></span>
						<span id="hours"></span>
						<span class="colon">:</span>
						<span id="minute"></span>
						<img src="/img/loading.png" alt="" class="loading">
						<span id="sangdam_gn" class="medium_text"></span>
					</div>
				</div>
			</div>
			<!-- 시계 끝 -->