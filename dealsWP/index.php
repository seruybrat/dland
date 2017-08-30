<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>DEALS</title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">
</head>
<body>

<header class="header" id="main">

	<!-- img-animation-top -->
	<img class="img-anim-top header__img-3" src="<?php echo get_template_directory_uri(); ?>/img/anim-1.png" alt="">
	<img class="img-anim-top header__img-4" src="<?php echo get_template_directory_uri(); ?>/img/anim-2.svg" alt="">
	<img class="img-anim-top header__img-5" src="<?php echo get_template_directory_uri(); ?>/img/anim-3.png" alt="">
	<img class="img-anim-top header__img-6" src="<?php echo get_template_directory_uri(); ?>/img/anim-4.svg" alt="">
	<!-- img-animation-top END-->

	<div class="container" id="menu-desktop">

		<div class="hamburger">
			<span class="hamburger__line"></span>
			<span class="hamburger__line"></span>
			<span class="hamburger__line"></span>
			<span class="hamburger__line"></span>
		</div>

		<!-- navigation -->

		<nav class="nav clearfix">

			<div class="nav__left">

				<!-- logo -->

				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
				</div>

				<!-- logo END-->

				<!-- menu -->

				<ul class="menu">
					<li class="menu__item">
						<a class="menu__link active" href="#main">Главная</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="#about">О нас</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="#tarrifs">Тарифы</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="#faq">Faq</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="#contacts">Контакты</a>
					</li>
				</ul>

				<!-- menu  END-->

			</div>

			<div class="nav__right">

				<!-- lang-switch -->

				<div class="lang">
					<a href="#" class="lang__link active">Укр</a>
					<a href="#" class="lang__link">Рус</a>
				</div>

				<!-- lang-switch END-->

				<a href="#" class="btn btn__enter">Вход</a>
				<a href="#" class="btn btn_primary">Регистрация</a>

			</div>
	

		</nav>

	</div>

		<!-- navigation END-->

	<div class="header__center clearfix">

		<div class="container">

			<!-- header-content -->

			<div class="show-right header__image col-6 pull-right col-md-12 ">
				<img class="header__img sm__img-12" src="<?php echo get_template_directory_uri(); ?>/img/macbook.svg" alt="">

				<!-- img animation -->
				<img class="img-anim header__img-1" src="<?php echo get_template_directory_uri(); ?>/img/word.svg" alt="">
				<img class="img-anim header__img-2" src="<?php echo get_template_directory_uri(); ?>/img/pdf.svg" alt="">
				<!-- img animation END-->
			</div>

			<div class="show-left header__text col-4 offset-1 col-md-12">

				<h1 class="title">
					Ваш документооборот в один клик
				</h1>

				<p class="header__txt">
					Подписывайте и отправляйте официальные документы в режиме онлайн
				</p>

				<a href="#" class="btn btn_accent">
					Подписать сейчас
				</a>

			</div>

			<!-- header-content END-->

		</div>

	</div>

</header>

<section class="begin">
	<div class="container clearfix">

		<div class="col-6 col-md-12">

			<div class="begin__left">
				<img class="sm__img-12" src="<?php echo get_template_directory_uri(); ?>/img/deals-page.png" alt="">
				<img class="begin__img" src="<?php echo get_template_directory_uri(); ?>/img/deals-mobile.png" alt="">
			</div>
			
		</div>

		<div class="col-6 col-md-12">

			<div class="begin__right">

				<h2 class="title2 title2_white title2_bold">С чего начать?</h2>

				<ul class="begin__list">
					<li class="begin__item active">
						<span class="begin__count">1</span>
						<span class="begin__txt">Подключитесь к системе</span>
					</li>
					<li class="begin__item">
						<span class="begin__count">2</span>
						<span class="begin__txt">Подключите к системе вашего контрагента</span>
					</li>
					<li class="begin__item">
						<span class="begin__count">3</span>
						<span class="begin__txt">Подписывайте и обменивайтесь документами онлайн</span>
					</li>
				</ul>

				<a href="#" class="btn btn_shadow">Подключиться</a>

			</div>
		</div>
	</div>
</section>

<section class="roles" id="about">

	<div class="container">

		<h2 class="title2 txt-center">Deals для каждого участника документооборота</h2>

		<!-- tabs -->

		<div class="tabs">

			<input id="tab-1" class="tab__inp" type="radio" name="role-group" checked>

			<label for="tab-1" class="tab__lbl">
				<div class="role__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tab1.svg" alt="" class="role__img">
				</div>
				<div class="role__name">Руководитель</div>
			</label>
			
			<input id="tab-2" class="tab__inp" type="radio" name="role-group">

			<label for="tab-2" class="tab__lbl">
				<div class="role__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tab2.svg" alt="" class="role__img">
				</div>
				<div class="role__name">Бухгалтер</div>
			</label>

			<input id="tab-3" class="tab__inp" type="radio" name="role-group">

			<label for="tab-3" class="tab__lbl">
				<div class="role__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tab3.svg" alt="" class="role__img">
				</div>
				<div class="role__name">Фин. специалист</div>
			</label>
			
			<input id="tab-4" class="tab__inp" type="radio" name="role-group">

			<label for="tab-4" class="tab__lbl">
				<div class="role__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tab4.svg" alt="" class="role__img">
				</div>
				<div class="role__name">ИТ-специалист</div>
			</label>

			<input id="tab-5" class="tab__inp" type="radio" name="role-group">

			<label for="tab-5" class="tab__lbl">
				<div class="role__image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/tab5.svg" alt="" class="role__img">
				</div>
				<div class="role__name">Менеджер</div>
			</label>

			<!-- tab-text -->

			<ul class="tab-text clearfix">

				<li class="col-4 col-sm-12 txt-left-sm">
					<div class="tab-text__item tab-1">Оперативное <br> принятие решений</div>
					<div class="tab-text__item tab-2">Быстрая доставка <br>бухгалтерских документов</div>
					<div class="tab-text__item tab-3">Эффективная работа <br>с финансовыми обязательствами</div>
					<div class="tab-text__item tab-4">Экономия ИТ-ресурсов <br>компании</div>
					<div class="tab-text__item tab-5">Удобный канал <br>связи с контрагентом</div>
				</li>

				<li class="col-4 col-sm-12 txt-left-sm">
					<div class="tab-text__item tab-1">Прозрачность процессов <br> и высокая степень доверия</div>
					<div class="tab-text__item tab-2">Спокойная работа без <br>авралов, нервов, переработок и штрафов</div>
					<div class="tab-text__item tab-3">Простой поиск и <br>анализ финансовых документов</div>
					<div class="tab-text__item tab-4">Обеспечение работоспособности<br> компании в режиме «24/7»</div>
					<div class="tab-text__item tab-5">Простой поиск новых<br> партнеров</div>
				</li>

				<li class="col-4 col-sm-12 txt-left-sm">
					<div class="tab-text__item tab-1">Снижение расходов на<br> процессы документооборота.</div>
					<div class="tab-text__item tab-3">Прозрачная и предсказуемая <br>работа с контрагентами</div>
				</li>

			</ul>

			<!-- tab-text END-->

		</div>

		<!-- tabs END-->

	</div>

</section>

<section class="range" id="tarrifs">

	<div class="container clearfix">
		<div class="range__left col-6 offset-1 col-md-12">
			<h2 class="title2">Платите меньше - подписывайте больше!</h2>
			<p class="txt">Стоимость услуг Deals напрямую зависит от количества электронных подписей, нанесенных вами на протяжении месяца. </p>

			<div class="output clearfix">
				<div class="col-8 xs-inline">
					<ul class="output__title-list">
						<li class="output__title-item">Количество документов в пакете</li>
						<li class="output__title-item">Стоимость пакета</li>
						<li class="output__title-item">Стоимость 1 документа</li>
					</ul>
				</div>

				<div class="col-4 xs-inline">

					<ul id="output1" class="output__number-list">
						<li class="output__number-item">20</li>
						<li class="output__number-item">60</li>
						<li class="output__number-item">3,0</li>
					</ul>

					<ul id="output2" class="output__number-list">
						<li class="output__number-item">100</li>
						<li class="output__number-item">200</li>
						<li class="output__number-item">2,0</li>
					</ul>

					<ul id="output3" class="output__number-list">
						<li class="output__number-item">500</li>
						<li class="output__number-item">900</li>
						<li class="output__number-item">1,8</li>
					</ul>

					<ul id="output4" class="output__number-list active">
						<li class="output__number-item">1000</li>
						<li class="output__number-item">1600</li>
						<li class="output__number-item">1,6</li>
					</ul>

					<ul id="output5" class="output__number-list">
						<li class="output__number-item">2000</li>
						<li class="output__number-item">2800</li>
						<li class="output__number-item">1,4</li>
					</ul>

					<ul id="output6" class="output__number-list">
						<li class="output__number-item">5000</li>
						<li class="output__number-item">6000</li>
						<li class="output__number-item">1,2</li>
					</ul>

					<ul id="output7" class="output__number-list">
						<li class="output__number-item">11000</li>
						<li class="output__number-item">11000</li>
						<li class="output__number-item">1,0</li>
					</ul>

					<ul id="output8" class="output__number-list">
						<li class="output__number-item">40000</li>
						<li class="output__number-item">50000</li>
						<li class="output__number-item">0,8</li>
					</ul>

				</div>
			</div>

			<div class="range__bar">
				 <input id="customRangeInput" class="range__input" type="range" min="0" max="100" value="42.85" step="14.28" >
			</div>

			<ul class="range__scale-list xs-hide">
				<li class="range__scale-item"><span class="helper">20</span></li>
				<li class="range__scale-item">100</li>
				<li class="range__scale-item">500</li>
				<li class="range__scale-item">1000</li>
				<li class="range__scale-item">2000</li>
				<li class="range__scale-item">5000</li>
				<li class="range__scale-item">11000</li>
				<li class="range__scale-item"><span class="helper">40000</span></li>
			 </ul>
		</div>

		<div class="range__right col-4 col-md-12">
			<img src="<?php echo get_template_directory_uri(); ?>/img/porky.svg" alt="" class="range__img xs-img-12">
			<div class="range__button">
				<a href="" class="btn btn_primary btn_range">Узнать больше</a>
			</div>
		</div>
	</div>

</section>

<section class="documents">
	
	<div class="container">
		<h2 class="title2">Работать с документами онлайн удобно</h2>

		<div class="documents__line">
			<img src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt="">
		</div>

		<ul class="documents__list">

			<li class="documents__item">
				<div class="documents__circle">
					<img class="documents__img" src="<?php echo get_template_directory_uri(); ?>/img/doc1.svg" alt="">
				</div>

				<div class="documents__txt">
					Загружайте
				</div>

			</li>

			<li class="documents__item">
				<div class="documents__circle">
					<img class="documents__img" src="<?php echo get_template_directory_uri(); ?>/img/doc2.svg" alt="">
				</div>

				<div class="documents__txt">
					Согласовывайте
				</div>

			</li>

			<li class="documents__item">
				<div class="documents__circle">
					<img class="documents__img" src="<?php echo get_template_directory_uri(); ?>/img/doc3.svg" alt="">
				</div>

				<div class="documents__txt">
					Подписывайте
				</div>

			</li>

			<li class="documents__item">
				<div class="documents__circle">
					<img class="documents__img" src="<?php echo get_template_directory_uri(); ?>/img/doc4.svg" alt="">
				</div>

				<div class="documents__txt">
					Сохраняйте в архиве
				</div>

			</li>

			<li class="documents__item">
				<div class="documents__circle">
					<img class="documents__img" src="<?php echo get_template_directory_uri(); ?>/img/doc5.svg" alt="">
				</div>

				<div class="documents__txt">
					Контролируйте
				</div>

			</li>

		</ul>
	</div>

</section>

<section class="workflow">

	<div class="container">
		<h2 class="title2 title2_white">Экономьте на документообороте</h2>

		<div class="workflow__sub-title">
			Специальное предложение deals
		</div>

		<div class="workflow__txt">
			Компании с большими объемами документооборота могут <br> использовать наш сервис совершенно бесплатно. 
		</div>

		<a href="" class="btn btn_accent">Оставить заявку</a>

	</div>
	
</section>

<section class="economy">
	
	<div class="container">
		<h2 class="title2 txt-center">Экономьте ваше время и деньги благодаря Deals: </h2>

		<ul class="economy__list clearfix">

			<li class="economy__item col-3 col-md-12">

				<div class="economy__inner">
					<img class="economy__img" src="<?php echo get_template_directory_uri(); ?>/img/economy1.svg" alt="">
					<div class="economy__txt">
						<strong>Увеличивайте </strong>
						 процент согласованных вовремя документов.
					</div>
				</div>

			</li>

			<li class="economy__item col-3 col-md-12">

				<div class="economy__inner">
					<img class="economy__img" src="<?php echo get_template_directory_uri(); ?>/img/economy2.svg" alt="">
					<div class="economy__txt">
						<strong>Сократите </strong>
						продолжительность подготовки и согласования документов в разы.
					</div>
				</div>

			</li>

			<li class="economy__item col-3 col-md-12">

				<div class="economy__inner">
					<img class="economy__img" src="<?php echo get_template_directory_uri(); ?>/img/economy3.svg" alt="">
					<div class="economy__txt">
						<strong>Экономьте </strong>
						на административных расходах (печать, доставка документов)
					</div>
				</div>

			</li>

			<li class="economy__item col-3 col-md-12">

				<div class="economy__inner">
					<img class="economy__img" src="<?php echo get_template_directory_uri(); ?>/img/economy4.svg" alt="">
					<div class="economy__txt">
						<strong>Обеспечьте </strong>
						доступ к документам 24/7.
					</div>
				</div>

			</li>

			<li class="economy__item col-3 col-md-12">

				<div class="economy__inner">
					<img class="economy__img" src="<?php echo get_template_directory_uri(); ?>/img/economy5.svg" alt="">
					<div class="economy__txt">
						<strong>Уменьшите </strong>
						время поиска документов.
					</div>
				</div>

			</li>

		</ul>

	</div>

</section>

<section class="trust">

	<div class="container clearfix">

		<div class="col-7 col-md-12">
			<ul class="trust__list">

				<li class="trust__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/inbase.png" alt="">
				</li>
				<li class="trust__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/i-qusion.svg" alt="">
				</li>
				<li class="trust__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/intecracy.svg" alt="">
				</li>
				<li class="trust__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/softengi.svg" alt="">
				</li>
				<li class="trust__item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/kyivstar.svg" alt="">
				</li>	
					
			</ul>
		</div>

		<div class="col-4 txt-right col-md-12">

			<h2 class="title2 trust__title">DEALS уже доверяют</h2>
			<a href="" class="btn btn_primary">подключиться сейчас</a>

		</div>

	</div>

</section>

<section class="faq" id="faq">
	<div class="container">
		<div class="clearfix faq__main">
			
			<div class="offset-1 col-8 col-md-12">

				<h2 class="title2">Ответы на часто задаваемые вопросы:</h2>

				<div class="faq__question">
					Подключение действительно бесплатно?
				</div>

				<div class="faq__txt">
					Да, мы подключаем вашу организацию к системе DEALS совершенно бесплатно. 
				</div>

				<div class="faq__question">
					Будет ли постоянная техподдержка сервиса?
				</div>

				<div class="faq__txt">
					С нашей службой поддержки Вы можете связаться по телефону или через сайт на протяжении всего периода пользования системой DEALS.
				</div>

				<div class="faq__question">
					Техническая поддержка будет осуществляться для компании бесплатно? 
				</div>

				<div class="faq__txt">
					Услуги по технической поддержке и сопровождению системы DEALS компания InBASE предоставляет совершенно бесплатно. 
				</div>

				<div class="faq__question">
					Моя информация в безопасности?
				</div>

				<div class="faq__txt">
					Защита информации в системе DEALS гарантируется европейским законодательством, т.к. все серверное оборудование, на котором работает система, расположено на территории Республики Польша. 
				</div>

				<div class="faq__question">
					Имеют ли подписанные документы юридическую силу?
				</div>

				<div class="faq__txt">
					В DEALS вы подписываете юридически значимые документы, что в полной мере предусмотрено украинским законодательством. В 2003 году в Украине были разработаны и приняты законы «Об электронном документе и электронном документообороте» и «Об электронно-цифровой подписи». Более детально про национальное и международное регулирование электронного документооборота вы можете прочитать в статье Александра Вернигоры, СЕО направления DEALS Consortium Intecracy Group.  
				</div>

			</div>
		</div>

		<div class="clearfix">
			<div class="faq__bottom offset-1 col-md-12">

			<h2 class="title2">Остались вопросы? </h2>

			<a href="#contacts" class="menu__link btn btn_accent">Задайте их здесь</a>

			</div>			
		</div>


	</div>
</section>

<footer class="footer">
	<div class="container clearfix">

		<div class="footer__logo col-md-12">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="">
		</div>

		<ul class="social__list col-md-12">

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="13" height="24" viewBox="0 0 13 24">
					    <path fill="#a1a1a1" fill-rule="evenodd" d="M8.533 8H12.8l-.533 4H8.533v12H3V12H0V8h3V5.312c0-1.75.467-3.072 1.4-3.968C5.333.448 6.889 0 9.067 0H12.8v4h-2.267c-.844 0-1.389.125-1.633.375s-.367.667-.367 1.25V8z"/>
					</svg>
				</a>
			</li>

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20">
					    <path fill="#a1a1a1" fill-rule="evenodd" d="M11.25 11.042c.536.416.937.746 1.205.99.268.242.536.624.804 1.145.268.52.402 1.076.402 1.667 0 1.389-.661 2.595-1.982 3.62C10.357 19.488 8.536 20 6.214 20c-2 0-3.535-.4-4.607-1.198C.536 18.003 0 17.066 0 15.99c0-1.39.75-2.518 2.25-3.386 1.107-.66 2.625-1.059 4.554-1.198-.286-.486-.429-.937-.429-1.354 0-.243.018-.417.054-.52h-.215c-1.5 0-2.696-.452-3.589-1.355-.857-.833-1.286-1.823-1.286-2.969 0-1.458.625-2.69 1.875-3.698C4.536.503 6.214 0 8.25 0h7.179l-3.215 1.719h-.696c.821.937 1.232 1.944 1.232 3.02 0 .66-.143 1.26-.429 1.797-.285.539-.562.93-.83 1.172-.268.243-.652.539-1.152.886v.052c-.393.382-.589.677-.589.885 0 .243.179.504.536.781l.964.73zM4.554 3.958c0 .903.25 1.789.75 2.657.571.937 1.303 1.406 2.196 1.406.607 0 1.107-.191 1.5-.573.357-.347.536-.868.536-1.563 0-.902-.268-1.822-.804-2.76-.607-.972-1.321-1.458-2.143-1.458-.678 0-1.196.225-1.553.677-.322.382-.482.92-.482 1.614zm6.482 11.875c0-.486-.179-.92-.536-1.302-.357-.382-1.071-.92-2.143-1.614-.036 0-.098-.009-.187-.026a1.276 1.276 0 0 0-.241-.026c-.893 0-1.786.138-2.679.416-1.357.486-2.036 1.216-2.036 2.188 0 .798.393 1.44 1.179 1.927.786.486 1.821.729 3.107.729 1.107 0 1.973-.208 2.598-.625.625-.417.938-.972.938-1.667zm8.785-11.77H24v1.77h-4.179v4.22H18v-4.22h-4.286v-1.77H18V0h1.821v4.063z"/>
					</svg>
				</a>
			</li>

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20">
					    <path fill="#a1a1a1" fill-rule="evenodd" d="M24 2.3c-.61.933-1.424 1.767-2.44 2.5v.6c0 3.5-1.28 6.675-3.84 9.525-2.559 2.85-5.957 4.275-10.195 4.275-2.711 0-5.22-.733-7.525-2.2.542.067.932.1 1.17.1 2.27 0 4.305-.7 6.101-2.1-1.05-.033-2-.358-2.847-.975-.848-.617-1.424-1.408-1.73-2.375.408.067.713.1.916.1.34 0 .78-.067 1.322-.2-1.118-.233-2.06-.792-2.822-1.675A4.563 4.563 0 0 1 .966 6.8c.746.35 1.492.55 2.237.55-1.457-.933-2.186-2.283-2.186-4.05 0-.833.22-1.633.661-2.4 2.61 3.167 5.983 4.85 10.119 5.05-.068-.233-.102-.6-.102-1.1 0-1.367.474-2.517 1.424-3.45.949-.933 2.118-1.4 3.508-1.4 1.39 0 2.576.517 3.56 1.55 1.016-.167 2.067-.567 3.152-1.2-.339 1.167-1.068 2.067-2.186 2.7 1.05-.1 2-.35 2.847-.75z"/>
					</svg>
				</a>
			</li>

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18">
					    <path fill="#A1A1A1" fill-rule="evenodd" d="M23.86 3.984a90.41 90.41 0 0 1 0 10.031c0 1.063-.337 1.962-1.008 2.696-.672.734-1.493 1.102-2.461 1.102-2.407.125-5.203.187-8.391.187-3.188 0-5.984-.062-8.39-.188-.97 0-1.79-.367-2.462-1.101-.671-.734-1.007-1.633-1.007-2.695A90.41 90.41 0 0 1 0 9c0-1.094.062-2.766.188-5.016 0-1.062.328-1.96.984-2.695C1.828.555 2.64.188 3.609.188 5.891.061 8.547 0 11.58 0h.843c3.031 0 5.687.062 7.969.188.968 0 1.789.367 2.46 1.101.672.734 1.008 1.633 1.008 2.695zm-14.157 9.61L16.5 9 9.703 4.36v9.234z"/>
					</svg>
				</a>
			</li>

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					    <path fill="#a1a1a1" fill-rule="evenodd" d="M22.063 0c.541 0 1 .177 1.375.531.375.354.562.802.562 1.344v20.063c0 .541-.187 1.02-.563 1.437-.375.417-.833.625-1.375.625h-20c-.541 0-1.02-.208-1.437-.625C.208 22.958 0 22.479 0 21.937V1.875C0 1.333.198.885.594.531.99.177 1.479 0 2.063 0h20zM7.438 20V9.312H4V20h3.438zM5.813 7.687c.541 0 .99-.177 1.343-.53.354-.355.532-.782.532-1.282 0-.542-.167-.99-.5-1.344C6.854 4.177 6.417 4 5.875 4c-.542 0-.99.177-1.344.531C4.177 4.885 4 5.333 4 5.875c0 .5.167.927.5 1.281.333.354.77.532 1.313.532zM20 20v-6.25c0-1.542-.365-2.708-1.094-3.5-.729-.792-1.677-1.188-2.843-1.188-1.25 0-2.292.584-3.125 1.75v-1.5H9.5V20h3.438v-6.063c0-.416.041-.708.124-.874.334-.834.917-1.25 1.75-1.25 1.167 0 1.75.77 1.75 2.312V20H20z"/>
					</svg>

				</a>
			</li>

			<li class="social__item">
				<a class="social__link" href="">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					    <path fill="#a1a1a1" fill-rule="evenodd" d="M3.5 17c.958 0 1.781.344 2.469 1.031C6.656 18.72 7 19.541 7 20.5c0 .958-.344 1.781-1.031 2.469C5.28 23.656 4.459 24 3.5 24c-.958 0-1.781-.344-2.469-1.031C.344 22.28 0 21.459 0 20.5c0-.958.344-1.781 1.031-2.469C1.72 17.344 2.541 17 3.5 17zM0 8c4.375 0 8.135 1.573 11.281 4.719C14.427 15.865 16 19.625 16 24h-5c0-3.333-1-6-3-8s-4.667-3-8-3V8zm0-8c6.625 0 12.281 2.344 16.969 7.031C21.656 11.72 24 17.375 24 24h-5c0-5.333-1.833-9.833-5.5-13.5S5.333 5 0 5V0z"/>
					</svg>
				</a>
			</li>

		</ul>
		
	</div>
</footer>

<!-- modal -->

<div class="modal">
	<div class="modal__inner">

		<div class="modal__header">
			<h2 class="title2">
Отправить сообщение</h2>
			<div class="modal__close">+</div>
		</div>

		<div class="modal__content">
			<form class="form">

				<div class="form__field">
					<input id="inp-name" class="form__input" name="name" type="text" required>
					<label class="form__lbl" for="inp-name">
						Контактное лицо*
					</label>
				</div>

				<div class="form__field">
					<input id="inp-mail" class="form__input" name="email" type="email" required>
					<label class="form__lbl" for="inp-mail">
						Электронная почта*
					</label>
				</div>

				<div class="form__field">
					<input id="inp-phone" class="form__input" name="phone" type="tel">
					<label class="form__lbl" for="inp-phone" >
						Телефон
					</label>
				</div>

				<div class="form__field">
					<input id="inp-company" class="form__input" name="company" type="text" required>
					<label class="form__lbl" for="inp-company">
						Название организации*
					</label>
				</div>

				<div class="modal__btn txt-center">
					<input class="btn btn_accent form__submit" type="submit" value="Отправить">
				</div>

			</form>
		</div>
	</div>
</div>

<!-- modal END-->

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>
</html>