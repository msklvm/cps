<?
session_start();
//echo $_SESSION['have_mail'];
//echo $_SESSION['have_mail'];
//echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
//echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить";
//echo $_SESSION['have_mail'];
?>
// testing


<?php

require_once 'lib/bootstrap.php';
require_once 'auth.php';
require_once 'google.php';
require_once 'ok.php';
//require_once 'gauth.php';
?>

//oklklk
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Центр поддержки семьи</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css?v=1488">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css?v=1488">
</head>
<body style='overflow-x:hidden;'>

<script type="text/javascript">
    var yaParams = {ip_adress: "<?php echo $_SERVER['REMOTE_ADDR'];?>"};
    //объявляем параметр ip_adress и записываем в него IP посетителя
</script>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(25077941, "init", {
        params: window.yaParams,
	clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/25077941" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TPBVGN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TPBVGN');</script>
<!-- End Google Tag Manager -->

<!--
if(isset($_GET['code'])){
echo 'YES';
}
?>-->

<!--<div class="whatsapp-hover-btn"><a target="_blank" href="https://wa.me/79234173884"><img src="images/whatsapp.png" alt="whatsapp"></a></div>-->
    <main class="site-container is-outer">
        <header class="header">
            <div class="container"><a class="header__logo" href="#">
                <div class="icon"><img src="images/logo_2.png" alt="Логотип ТГПУ"></div>
				
                <div class="text">Томский государственный педагогический университет</div>
            </a><a class="menu-close" href="#">
                <svg>
                    <use xlink:href="images/sprites.svg#menu__close"></use>
                </svg>
            </a><a class="header__burger" href="#">
                <svg>
                    <use xlink:href="images/sprites.svg#burger"></use>
                </svg>
            </a>
            <div class="header__right">
                <div class="header__contacts"><a class="header__phone" href="tel:+73822311256">+7 3822 311-256</a>
                    <div class="header__adress"> Пн-Сб: 9:00&nbsp;- 19:00<br> <a class="header__adress" href="mailto:cps@tspu.edu.ru">cps@tspu.edu.ru</a></div>
                </div>
                <!--<a class="header__order" href="https://wa.me/79234173884" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp
                    WhatsApp
                </a>-->
            </div>
        </div>
        <div class="container">
                      <!--<div class="stroka">
                        <a class="lang-change" href="https://zubanov.tom.ru/">
                        RU
                        </a>
                        <a class="lang-change" href="https://zubanov.tom.ru/en/">
                        EN
                        </a>
                      </div>-->
                    </div>
    </header>
	
    <section class="first-screen">
	<div class="about-section about-section__right wow fadeInRight">
                <div class="swiper-container">
                    <div class="swiper-prev">
                        <svg>
                            <use xlink:href="images/sprites.svg#left-arrow"></use>
                        </svg>
                    </div>
                    <div class="swiper-next">
                        <svg>
                            <use xlink:href="images/sprites.svg#right-arrow"></use>
                        </svg>
                    </div>
                    <div class="swiper-wrapper">
                        
							<div class="swiper-slide"><a href="#contacts"><img src="images/slider/slide_1.jpg" alt="about-img"></a></div>
							
						

                    </div>
                </div>
            </div>
        <div class="main-menu">
		
		
            <div class="wrap">
			

			
			
                <ul>
                    <li><a href="#about">О нас</a></li>
                    <!--<li><a href="#edges">Почему ТГПУ</a></li>-->
                    <!--<li><a href="#programs">Программы обучения</a></li>-->
					<li><a href="#specialist">Наши специалисты</a></li>
                    <li><a href="#process">Как получить услугу</a></li>
                    <!--<li><a href="#testimonials">Отзывы</a></li>-->
                    <!--<li><a href="#procedure">Получатели услуги</a></li>-->
                    <li><a href="#comission">Центр поддержки семьи</a></li>
                    <li><a href="#questions">По каким вопросам можно обратиться</a></li>
					<li><a href="#specialist" ONCLICK="window.open('/cps/review.php ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=344,Height=1040');">Оставить отзыв</a></li>
                </ul>
                <div class="menu__bottom">
                    <div class="menu__bottom__contacts"><a class="menu__bottom__phone" href="tel:+73822311256">+7 3822
                    311-256</a>
                    <div class="menu__bottom__adress"> пн-сб: 9:00&nbsp;&mdash; 19:00</div>
                </div>
              <a class="header__order menu__bottom__order" href="https://wa.me/79234173884" target="_blank" style="background-color: transparent;">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
   <div class="container mobile">
        <h1 class="first-screen__heading">Центр поддержки семьи<!--<span>дистанционно</span>--></h1>
        <div class="first-screen__descr">Оказание справочной помощи, услуг психолого-педагогической, методической <br> и консультационной помощи родителям (законным представителям),<br> а также гражданам, желающим принять на воспитание в свои семьи<br> детей, оставшихся без попечения родителей
        </div>
        <div class="first-screen__buttons"><a class="request scrolled" href="#contacts">Записаться на<br> получение услуги</a>
            <!--                        <a class="directions scrolled" href="#programs">Направления подготовки</a>-->
        </div>
    </div>
    <div class="first-screen__edges">
        <!-- landing menu -->
        
<!-- landing menu -->

<div class="first-screen__edge">
    <div class="title"><a href="#aboutproject">О проекте</a></div>
    <!--<div class="descr">Уточняющая информация</div>-->
</div>
<div class="first-screen__edge">
    <div class="title"><a href="#canhelp">Чем мы можем помочь</a></div>
    <!--<div class="descr">Уточняющая информация</div>-->
</div>
<div class="first-screen__edge">
    <div class="title"><a href="#specialist">Наши специалисты</a></div>
    <!--<div class="descr">Уточняющая информация</div>-->
</div>
<div class="first-screen__edge">
    <div class="title"><a href="#questions">Часто задаваемые вопросы</a></div>
    <!--<div class="descr">Уточняющая информация</div>-->
</div>
</div>
</section>
<section class="about-section">
    <div class="container">
 <!--<h2 class="about-section__heading">Фотографии Томска и нашего университета</h2>-->
</p>
                <p align="justify">
                </p>
                <p>
                  </p>
            </div>
            
			<section class="process-section" id="process">
    <div class="container">
        <h2 class="process-section__heading">Как я могу получить услугу</h2>
        <div class="process-section__content">
            <div class="process-section__item wow fadeInLeft">
                <a href="#contacts"><div class="image"><i class="fa fa-users" aria-hidden="true" style="font-size:60px; margin-top: 20px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Очная консультация</div></a>
                    <!--<div class="descr">краткое описание очной консультации</div>-->
                </div>
            </div>
            <div class="process-section__item wow fadeInLeft">
                <a href="tel:+73822311256"><div class="image"><i class="fa fa-phone" aria-hidden="true" style="font-size:60px; margin-top: 24px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Консультация по телефону</div></a>
                    <!--<div class="descr">краткое описание консультации по телефону</div>-->
                </div>
            </div>
            <div class="process-section__item wow fadeInRight">
               <a href="#contacts"> <div class="image"><i class="fa fa-video-camera" aria-hidden="true" style="font-size:57px; margin-top: 23px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Видео консультация</div></a>
                   <!--<div class="descr">краткое описание консультации по видео</div>-->
                </div>
            </div>
            <div class="process-section__item wow fadeInRight">
                						<a href="#process" ONCLICK="window.open('/cps/mailanswer.php ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=344,Height=1040');"><div class="image"><i class="fa fa-envelope" aria-hidden="true" style="font-size:57px; margin-top: 23px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title"></i>Письменный <br class="hidepc"> ответ</div></a>
                    <!--<div class="descr">краткое описание письменной консультации</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="about-section__left wow fadeInLeft">
		


<h2 class="about-section__heading" id="about">Уважаемые родители и педагоги! </h2>

<p>
	Для выявления наиболее актуальных вопросов воспитания, образования и развития детей, заполните, пожалуйста, анкету:
						<ul class="anketblock ankets">
						<li><a href="https://forms.gle/8Kjd5urFCAkSyPJv5" target="_blank">Анкета для родителей детей начальной школы</a></li>
						<li><a href="https://forms.gle/HyDkdKR1RALDNjyPA" target="_blank">Анкета для родителей детей ДОУ</a></li>
						<li><a href="https://forms.gle/zVjGHwVEA9CFAQou7" target="_blank">Анкета для родителей детей с ОВЗ</a></li>
						<li><a href="https://forms.gle/SrCtC7Zi3FE3tRM97" target="_blank">Анкета для родителей детей СОШ</a></li>
						</ul>
						

	
<!--
 <p style="margin-bottom: 10px;">Зарегистрироваться на интересующие вас мероприятия можно по этой ссылке: </p><a class="anketblock" href="https://docs.google.com/forms/d/e/1FAIpQLSfOO1SOFeeC-MyzJxl_ixY410KsPI4OEz1y3oWsE-AXj1TlaQ/viewform" target="_blank"><strong style="border: 3px red solid; padding: 7px;">РЕГИСТРАЦИЯ НА ВЕБИНАР</strong></a> 
</p>
-->

<h3 style="margin-bottom: 10px; margin-top: 15px;">Программа мероприятий,  прошедших в рамках Всероссийской недели родительской компетентности</h3>

<div id="hiddenform">
<p>Уважаемые родители для получения доступа к просмотру записей мероприятий, просим Вас ввести свой <strong>e-mail</strong></p>
<form method="GET" action="records.php"><input type="email" required name="email"> <input type="submit"></form>
<br />
</div>

<div id="hiddentext" class="hiddennotauth">
<ul class="anketblock">
<li>
15 ноября 2021 года, 10:00-11:00 ( 6:00-7:00 МСК ) часов – «Мягкие игры для всех. Игровой домашний досуг».
<br/>
Спикеры: кандидат психологических наук, доцент Института детства и артпедагогики ТГПУ Файзуллаева Елена Дмитриевна и <br />Фицнер Татьяна Дмитриевна, магистр педагогики, разработчик игровых сенсорно-тактильных пособий «Мягкая среда».
<br/>
<!--
<a href="https://bbb.tspu.edu.ru/b/tzc-bh9-ili-dku" target="_blank"><strong>Ссылка на подключение</strong></a>  |  
-->

<a class="translation" href="https://youtu.be/dJPqgVWIFTY" target="_blank"><strong>Ссылка на трансляцию</strong></a>
</li>
<li>

16 ноября 2021 года, 12:00-13:00 ( 8:00-9:00 МСК ) часов – «Игровые методы в процессе подготовки детей к школе». <br/>
Спикер: кандидат педагогических наук, доцент Института детства и артпедагогики ТГПУ, Вахитова Галия Хамитовна.<br/>
<!--
<a href="https://bbb.tspu.edu.ru/b/gjk-pgp-dfh-2dl" target="_blank"><strong>Ссылка на подключение</strong></a>  |  
-->

<a class="translation" href="https://youtu.be/QpWHhRq2k44" target="_blank"><strong>Ссылка на трансляцию</strong></a>
</li>
<li>

17 ноября 2021 года, 12:00-13:00 ( 8:00-9:00 МСК ) часов – «Как исправить нежелательное поведение подростка».<br/>
Спикер: кандидат психологических наук, доцент факультета психологии и специального образования ТГПУ, Дергачева Евгения Владимировна.
<br/>

<!--
<a href="https://bbb.tspu.edu.ru/b/prr-0ky-38q-2sp" target=_"blank"><strong>Ссылка на подключение</strong></a>  | 
-->


 <a class="translation" href="https://youtu.be/m5lDaiDfj6o" target="_blank"><strong>Ссылка на трансляцию</strong></a>
</li><li>
19 ноября 2021 года, 16:00-17:00 ( 12:00-13:00 МСК ) часов – «Родители, дети и домашнее чтение». <br/>
Спикер: доктор педагогических наук, Поздеева Светлана Ивановна. 
<br/>

<!--
<a href="https://bbb.tspu.edu.ru/b/qwa-mb3-qaw-ugc" target="_blank"><strong>Ссылка на подключение</strong></a>  | 
-->

 <a class="translation" href="https://youtu.be/H4qNvD3Ei4c" target="_blank"><strong>Ссылка на трансляцию</strong></a>
</li>
</ul>
</div>
<br>
<hr />
<br>
<ul>
<?
if (isset($_SESSION['have_mail'])) {?>
	<script>
	document.getElementById("hiddentext").classList.remove('hiddennotauth');
	document.getElementById("hiddenform").className += " hiddennotauth";
	</script>
<?}?>
<a class="anketblock" href="https://tspu.edu.ru/cps/program.pdf" target="_blank"><strong>Всероссийская программа мероприятий</strong></a></li>

</ul>


					

		
		
		
            <h2 class="about-section__heading" id="about">О нас</h2>
            <div class="about-section__text">
                <p align="justify" id="aboutproject">
				В рамках федерального проекта «Современная школа» национального проекта «Образование» ТГПУ предоставляет услуги психолого-педагогической, методической и консультационной помощи родителям (законным представителям детей), а также гражданам, желающим принять на воспитание в свои семьи детей, оставшихся без попечения родителей. Консультации проводят для вас БЕСПЛАТНО (очно, дистанционно) профессиональные психологи, педагоги, логопеды, дефектологи. 
                </p>
				<p align="justify" id="canhelp">
				Служба по оказанию услуг психолого-педагогической, методической и консультационной помощи	 родителям (законным представителям детей), а также гражданам, желающим принять на воспитание в свои семьи детей, оставшихся без попечения родителей (далее – Служба), осуществляет свою деятельность в соответствии с нормативно-правовой базой оказания услуг, а также Положением о Службе.
				<br><br>
                    Целью деятельности Службы является повышение уровня психолого-педагогических компетенций родителей в вопросах современного семейного воспитания детей.
				</p></p>
				<p align="justify">
                    Консультирование проводят профессиональные специалисты высокого уровня квалификации:
					<li>Психологи</li>
					<li>Социальные педагоги</li>
					<li>Логопеды</li>
					<li>Дефектологи</li>
					<li>Методисты</li>
				</p>
				<p align="justify">
                    Центр поддержки семьи осущеcтвляет работу на основании следующих нормативных документов:
					<div style="margin-left: 20px;"><details close> <summary>Нормативные документы</summary>
					<li>Гражданский кодекс Российской Федерации</li>
					<li>Семейный кодекс Российской Федерации</li>
					<li>Федеральный закон Российской Федерации «Об образовании в Российской Федерации» от 29 декабря 2012 г. № 273-ФЗ</li>
					<li>Федеральный закон «Об основных гарантиях прав ребенка в Российской Федерации» от 24 июля 1998 г. № 124-ФЗ</li>
					<li>Федеральный закон «О персональных данных» от 27 июля 2006 г. № 152-ФЗ</li>
					<li>Закон Российской Федерации «О защите прав потребителей» от 7 февраля 1992 г. № 2300-1</li>
					<li>Указ Президента РФ от 29 мая 2017 г. № 240 «Об объявлении в Российской Федерации Десятилетия детства в  2018-2027 гг.»</li>
					<li>СанПиН 2.2.4.3359-16 «Санитарно-эпидемиологические требования к физическим факторам на рабочих местах», утвержденные постановлением Главного государственного санитарного врача Российской Федерации от 21 июня 2016 г. № 81</li>
					</details></div>
				</p>
        </div>
		<section class="questions-section" id="questions">
    <div class="container">
        <h2 class="questions-section__heading wow fadeInDown">По каким вопросам можно обратиться</h2>
        <div class="questions-section__descr wow fadeInDown">

        </div>
        <div class="group" data-accordion-group>
            <div class="accordion open" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">По каким вопросам можно обратиться в Центр поддержки семьи?</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        <ul>
<li>Консультационная поддержка будущих родителей.</li>
<li>Консультационная помощь педагогов и психологов по вопросам развития, воспитания и обучения детей дошкольного возраста, в том числе раннего возраста.</li>
<li>Консультирование по самым разным вопросам развития, воспитания, образования и социализации детей школьного возраста</li>
<li>Содействие в получении необходимой психолого-педагогической, методической и консультационной помощи в других организациях и службах.</li>
<li>Возрастные особенности (возрастные кризисы) детей.</li>
<li>Проблемы детско-родительских отношений.</li>
<li>Трудности в развитии коммуникативных качеств ребенка.</li>
<li>Эмоциональное и социальное неблагополучие ребенка.</li>
<li>Проблемы адаптации и готовности к школе</li>
<li>Школьные стрессы.</li>
<li>Логопедические проблемы, трудности в развитии речи ребенка.</li>
<li>«Особые» дети.</li>
<li>Одарённые дети.</li>
<li>Снижение учебной мотивации и успеваемости ребенка в школе.</li>
<li>Профориентация и профессиональные интересы ребенка.</li>
<li>Трудности в выборе профессии старшеклассниками.</li>
<li>Проблемы, связанные с дистанционным обучением.</li>
<li>Интернет-зависимость.</li>
</ul>

и другие проблемы.
<h3 class="ankets">Анкеты для родителей</h3>
						Уважаемые родители! Для повышения доступности предоставления консультационной помощи заполните, пожалуйста, анкету:
						<ul class="anketblock ankets">
						<li><a href="https://forms.gle/8Kjd5urFCAkSyPJv5" target="_blank">Анкета для родителей детей начальной школы</a></li>
						<li><a href="https://forms.gle/HyDkdKR1RALDNjyPA" target="_blank">Анкета для родителей детей ДОУ</a></li>
						<li><a href="https://forms.gle/zVjGHwVEA9CFAQou7" target="_blank">Анкета для родителей детей с ОВЗ</a></li>
						<li><a href="https://forms.gle/SrCtC7Zi3FE3tRM97" target="_blank">Анкета для родителей детей СОШ</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">В каком формате будет проходить консультация?</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Консультации могут быть проведены в очном формате, по телефону, онлайн (WhatsApp, Zoom, BigBlueButton) или посредством письменного обращения. <br><!--Для получения бесплатной консультации заполните, пожалуйста, <a href="https://forms.gle/Wu3ZtXEMX64b3RYNA" target="_blank"><strong>АНКЕТУ</strong></a> -->
						

                    </div>
                </div>
            </div>
        </div>
 <!--       <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">Могут ли иностранные студенты работать?</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Иностранные студенты могут работать в свободное от учёбы время.  Если студент прекращает обучение,
						то право работать тоже теряется и студент должен в трёхдневный срок покинуть Российскую Федерацию.
                    </div>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">Как можно получить стипендию для обучения в ТГПУ? </div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Иностранные студенты могут подать заявление на обучение в России в рамках квоты Правительства РФ.
						Для этого нужно обратиться в представительство Россотрудничества в своей стране.
						При подаче заявки необходимо выбрать ТГПУ  для обучения.
						<a href="https://rs.gov.ru/en/contacts" target="_blank""
                        style="color: #0096FF; border-bottom: 1px solid #BFE2FF;">https://rs.gov.ru/en/contacts</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">Возможно ли обучение на подготовительном отделении ?</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Да, обучение на подготовительном отделении проходит в течение 9 месяцев, стоимость обучения 94000-105000 рублей. После окончания  существует возможность поступления на основные образовательные программы, обучение по квотам Правительства РФ. Также возможно индивидуальное обучение в соответствии с уровнем знания языка слушателем.


                    </div>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">Возможно ли принять участие в сезонной школе?
                        </div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Да, ежегодно проходят <a href="https://www.tspu.edu.ru/en/summer-schools.html" target="_blank""
                        style="color: #0096FF; border-bottom: 1px solid #BFE2FF;">Сезонные школы </a>русского языка и культуры. Интенсивное изучение русского языка и знакомство с традициями на семинарах, мастер-классах, театральных тренингах, дегустации блюд русской кухни.

                    </div>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control cult">
                        <div class="text">Могут ли иностранные студенты участвовать в программах академического обмена?
</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus2"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <div class="text-content">
                        Да, если в требованиях к участнику программ академического обмена нет условия наличия гражданства РФ.
                    </div>
                </div>
            </div>
        </div>-->


    </div>
</section>
		 <h2 class="about-section__heading" id="specialist">Наши специалисты</h2>
		<div class="about-section__text specialist">
		
		
		
		
			<table style="word-break: break-word;" class="tablet_mod">
		<thead><h2 class="specialist_info">Психологи</h2></thead>
<tbody>
<tr>


<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23539?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/burtovaya.png" class="specialist_photo" alt="burtovaya" /></p>
<p><strong>Буртовая<br>Наталия Борисовна</strong></a><p class="regalii">психолог, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Буртовая Наталия Борисовна">Записаться</button></a></p>
</td>

<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23540?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/dudina.png" class="specialist_photo" alt="dudina" /></p>
<p><strong>Дудина<br>Елена Николаевна</strong></a><p class="regalii">психолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Дудина Елена Николаевна">Записаться</button></a></p>
</td>

<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23547?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/ivanova.png" class="specialist_photo" alt="ivanova" /></p>
<p><strong>Иванова<br>Алла Алимомедовна</strong></a><p class="regalii">психолог, психотерапевт, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Иванова Алла Алимомедовна">Записаться</button></a></p>
</td>

<td style="width: 25%; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23544?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/kupershlag.png" class="specialist_photo" alt="kupershlag" /></p>
<p><strong>Купершлаг<br>Ирина Геннадиевна</strong></a><p class="regalii">психолог</p><a href="#contacts"><button class="specialist1" value="Купершлаг Ирина Геннадиевна">Записаться</button></a></p>
</td>
</tr>
<tr>
<td style="width: 25%; vertical-align: top;" align="center">
</td>
<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23537?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/dergacheva.png" class="specialist_photo" alt="dergacheva" /></p>
<p><strong>Дергачёва<br>Евгения Владимировна</strong></a><p class="regalii">психолог, доцент, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Дергачёва Евгения Владимировна">Записаться</button></a></p>
</td>
<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/24058?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/oblozhko.png" class="specialist_photo" alt="dergacheva" /></p>
<p><strong>Обложко<br>Ульяна Алексеевна</strong></a><p class="regalii">магистр педагогики, психолог</p><a href="#contacts"><button class="specialist1" value="Обложко Ульяна Алексеевна">Записаться</button></a></p>
</td>
<td style="width: 25%; vertical-align: top;" align="center">
</td>

</tr>
<td style="width: 25%; vertical-align: top;" align="center">
</td>


<!--<td style="width: 25%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/4426?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/faizulaeva.png" class="specialist_photo" alt="faizulaeva" /></p>
<p><strong>Файзуллаева<br>Елена Дмитриевна</strong></a><p class="regalii">психолог, кандидат психологических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Файзуллаева Елена Дмитриевна">Записаться</button></a></p>
</td>
<td style="width: 25%; vertical-align: top;" align="center">
</td>-->

<tr>

</tr>
</tbody>
</table>


		<table style="word-break: break-word;" class="tablet_mod">
		<thead><h2 class="specialist_info">Логопеды</h2></thead>
<tbody>
<tr class="logoped">


<td style="width: 20%; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23534?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/medova.png" class="specialist_photo" alt="medova" /></p>
<p><strong>Мёдова<br>Наталия Анатольевна </strong></a><p class="regalii">логопед, кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Мёдова Наталия Анатольевна">Записаться</button></a>
</p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23536?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/obnosova.png" class="specialist_photo" alt="obnosova" /></p>
<p><strong>Обносова<br>Галина Петровна</strong></a><p class="regalii">логопед, дефектолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Обносова Галина Петровна">Записаться</button></a></p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23538?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/sergeeva.png" class="specialist_photo" alt="sergeeva" /></p>
<p><strong>Сергеева<br>Анна Иосифовна</strong></a><p class="regalii">логопед, дефектолог,<br> психолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Сергеева Анна Иосифовна">Записаться</button></a></p>
</td>

<td style="width: 21%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23535?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/gordeeva.png" class="specialist_photo" alt="gordeeva" /></p>
<p><strong>Гордеева<br>Екатерина Алексеевна</strong></a><p class="regalii">младший научный сотрудник, асс. кафедры дефектологии</p><a href="#contacts"><button class="specialist1" value="Гордеева Екатерина Алексеевна">Записаться</button></a></p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23541?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/baigulova.png" class="specialist_photo" alt="baigulova" /></p>
<p><strong>Байгулова<br>Наталья Алексеевна</strong></a><p class="regalii">психолог, логопед</p><a href="#contacts"><button class="specialist1" value="Байгулова Наталья Алексеевна">Записаться</button></a></p>
</td>
</tr>
</tbody>
</table>



<table style="word-break: break-word;" class="tablet_mod">
		<thead><h2 class="specialist_info">Педагоги и социальные педагоги</h2></thead>
<tbody>
<tr>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23545?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/vahitova.png" class="specialist_photo" alt="vahitova" /></p>
<p><strong>Вахитова<br>Галия Хамитовна</strong></a><p class="regalii">кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Вахитова Галия Хамитовна">Записаться</button></a></p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23543?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/liba.png" class="specialist_photo" alt="liba" /></p>
<p><strong>Лыба<br>Алла Анатольевна</strong></a><p class="regalii">социальный педагог</p><a href="#contacts"><button class="specialist1" value="Лыба Алла Анатольевна">Записаться</button></a></p>
</td>

<!--<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23548?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/sannikova.png" class="specialist_photo" alt="sannikova" /></p>
<p><strong>Санникова<br>Ирина Геннадьевна</strong></a><p class="regalii">кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Санникова Ирина Геннадьевна">Записаться</button></a></p>
</td>-->

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23814?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/semenova.png" class="specialist_photo" alt="semenova" /></p>
<p><strong>Семенова<br>Наталия Альбертовна</strong></a><p class="regalii">методист, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Семенова Наталия Альбертовна">Записаться</button></a></p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23542?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/titova.png" class="specialist_photo" alt="titova" /></p>
<p><strong>Титова<br>Галина Юрьевна</strong></a><p class="regalii">социальный педагог, кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Титова Галина Юрьевна">Записаться</button></a></p>
</td>

<td style="width: 20%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/24057?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/drozdeckaya.png" class="specialist_photo" alt="titova" /></p>
<p><strong>Дроздецкая<br>Ирина Александровна</strong></a><p class="regalii">кандидат педагогических наук,  социальный педагог</p><a href="#contacts"><button class="specialist1" value="Дроздецкая Ирина Александровна">Записаться</button></a></p>
</td>

</tr>
</tbody>
</table>



<table class="mobile_mod">
 		<thead><h2 class="specialist_info mobile_mod">Психологи</h2></thead>
<tbody>
<tr>


<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23539?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/burtovaya.png" class="specialist_photo" alt="burtovaya" /></p>
<p><strong>Буртовая<br>Наталия Борисовна</strong></a><p class="regalii">психолог, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Буртовая Наталия Борисовна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23540?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/dudina.png" class="specialist_photo" alt="dudina" /></p>
<p><strong>Дудина<br>Елена Николаевна</strong></a><p class="regalii">психолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Дудина Елена Николаевна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23547?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/ivanova.png" class="specialist_photo" alt="ivanova" /></p>
<p><strong>Иванова<br>Алла Алимомедовна</strong></a><p class="regalii">психолог, психотерапевт, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Иванова Алла Алимомедовна">Записаться</button></a></p>
</td>
</tr>
<tr>
<td style="width: 33%; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23544?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/kupershlag.png" class="specialist_photo" alt="kupershlag" /></p>
<p><strong>Купершлаг<br>Ирина Геннадиевна</strong></a><p class="regalii">психолог</p><a href="#contacts"><button class="specialist1" value="Купершлаг Ирина Геннадиевна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23537?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/dergacheva.png" class="specialist_photo" alt="dergacheva" /></p>
<p><strong>Дергачёва<br>Евгения Владимировна</strong></a><p class="regalii">психолог, доцент, кандидат психологических наук</p><a href="#contacts"><button class="specialist1" value="Дергачёва Евгения Владимировна">Записаться</button></a></p>
<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/24058?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/oblozhko.png" class="specialist_photo" alt="dergacheva" /></p>
<p><strong>Обложко<br>Ульяна Алексеевна</strong></a><p class="regalii">магистр педагогики, психолог</p><a href="#contacts"><button class="specialist1" value="Обложко Ульяна Алексеевна">Записаться</button></a></p>
</td>
</td>

</tr>



</tbody>
</table>


<table class="mobile_mod">
 		<thead><h2 class="specialist_info mobile_mod">Логопеды</h2></thead>
<tbody>
<tr>


<td style="width: 33%; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23534?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/medova.png" class="specialist_photo" alt="medova" /></p>
<p><strong>Мёдова<br>Наталия Анатольевна </strong></a><p class="regalii">логопед, кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Мёдова Наталия Анатольевна">Записаться</button></a>
</p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23536?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/obnosova.png" class="specialist_photo" alt="obnosova" /></p>
<p><strong>Обносова<br>Галина Петровна</strong></a><p class="regalii">логопед, дефектолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Обносова Галина Петровна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23538?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/sergeeva.png" class="specialist_photo" alt="sergeeva" /></p>
<p><strong>Сергеева<br>Анна Иосифовна</strong></a><p class="regalii">логопед, дефектолог, психолог, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Сергеева Анна Иосифовна">Записаться</button></a></p>
</td>
</tr>
<tr>
<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23535?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/gordeeva.png" class="specialist_photo" alt="gordeeva" /></p>
<p><strong>Гордеева<br>Екатерина Алексеевна</strong></a><p class="regalii">младший научный сотрудник, ассистент кафедры&nbsp;дефектологии</p><a href="#contacts"><button class="specialist1" value="Гордеева Екатерина Алексеевна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23541?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/baigulova.png" class="specialist_photo" alt="baigulova" /></p>
<p><strong>Байгулова<br>Наталья Алексеевна</strong></a><p class="regalii">психолог, логопед</p><a href="#contacts"><button class="specialist1" value="Байгулова Наталья Алексеевна">Записаться</button></a></p>
</td>
<td style="width: 33%; vertical-align: top;" align="center">

</td>
</tr>

</tbody>
</table>



<table class="mobile_mod">
<thead ><h2 class="specialist_info mobile_mod">Педагоги и социальные педагоги</h2></thead>
<tbody>
<tr>

<td style="width: 33; vertical-align: top;" align="center">
<p><a  ONCLICK="window.open('https://www.tspu.edu.ru/23545?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/vahitova.png" class="specialist_photo" alt="vahitova" /></p>
<p><strong>Вахитова<br>Галия Хамитовна</strong></a><p class="regalii">кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Вахитова Галия Хамитовна">Записаться</button></a></p>
</td>

<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23543?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/liba.png" class="specialist_photo" alt="liba" /></p>
<p><strong>Лыба<br>Алла Анатольевна</strong></a><p class="regalii">социальный педагог</p><a href="#contacts"><button class="specialist1" value="Лыба Алла Анатольевна">Записаться</button></a></p>
</td>

<!--<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23548?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/sannikova.png" class="specialist_photo" alt="sannikova" /></p>
<p><strong>Санникова<br>Ирина Геннадьевна</strong></a><p class="regalii">кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Санникова Ирина Геннадьевна">Записаться</button></a></p>
</td>-->
<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23814?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/semenova.png" class="specialist_photo" alt="semenova" /></p>
<p><strong>Семенова<br>Наталия Альбертовна</strong></a><p class="regalii">методист, кандидат педагогических наук</p><a href="#contacts"><button class="specialist1" value="Семенова Наталия Альбертовна">Записаться</button></a></p>
</td>
</tr>
<tr>


<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/23542?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/titova.png" class="specialist_photo" alt="titova" /></p>
<p><strong>Титова<br>Галина Юрьевна</strong></a><p class="regalii">социальный педагог, кандидат педагогических наук, доцент</p><a href="#contacts"><button class="specialist1" value="Титова Галина Юрьевна">Записаться</button></a></p>
</td>
<td style="width: 33%; vertical-align: top;" align="center">
<p><a ONCLICK="window.open('https://www.tspu.edu.ru/24057?tmpl=component ','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=800,Height=800');"><img src="images/specialist/drozdeckaya.png" class="specialist_photo" alt="titova" /></p>
<p><strong>Дроздецкая<br>Ирина Александровна</strong></a><p class="regalii">кандидат педагогических наук, социальный педагог</p><a href="#contacts"><button class="specialist1" value="Дроздецкая Ирина Александровна">Записаться</button></a></p>
</td>
<td style="width: 33%; vertical-align: top;" align="center">
</td>
</tr>
</tbody>
</table>


        </div>
    </section>
	<!--<section class="process-section" id="process">
    <div class="container">
        <h2 class="process-section__heading">Как я могу получить услугу</h2>
        <div class="process-section__content">
            <div class="process-section__item wow fadeInLeft">
                <div class="image"><i class="fa fa-users" aria-hidden="true" style="font-size:60px; margin-top: 20px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Очная консультация</div>
                    <div class="descr">краткое описание очной консультации</div>
                </div>
            </div>
            <div class="process-section__item wow fadeInLeft">
                <div class="image"><i class="fa fa-phone" aria-hidden="true" style="font-size:60px; margin-top: 24px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Консультация по телефону</div>
                    <div class="descr">краткое описание консультации по телефону</div>
                </div>
            </div>
            <div class="process-section__item wow fadeInRight">
                <div class="image"><i class="fa fa-video-camera" aria-hidden="true" style="font-size:57px; margin-top: 23px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title">Видео консультация</div>
                    <div class="descr">краткое описание консултации по видео</div>
                </div>
            </div>
            <div class="process-section__item wow fadeInRight">
                <div class="image"><i class="fa fa-envelope" aria-hidden="true" style="font-size:57px; margin-top: 23px; color: #056798;"></i></div>
                <div class="text">
                    <div class="title"></i>Письменный ответ</div>
                    <div class="descr">краткое описание письменной консультации</div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--<section class="procedure-section" id="procedure">
    <div class="container">
        <div class="procedure-section__content wow fadeInRight">
            <h2 class="procedure-section__heading">Получатели услуги:</h2>
            <div class="procedure-section__descr">

               <p align="justify">
                   <ul><b>Родители и законные представители детей, в том числе</b>
				   <li>Родители (законные представители) детей дошкольного возраста, не посещающих дошкольные образовательные организации.</li>
				   <li>Родители (законные представители), чьи дети находятся на семейном обучении.</li>
				   <li>Родители (законные представители) детей с ограниченными возможностями здоровья и инвалидностью.</li>
				   <li>Родители (законные представители), нуждающихся в помощи при воспитании детей, имеющих различные проблемы в поведении, развитии, социализации.</li>
				   <li>Граждане, желающие принять на воспитание в свои семьи детей, оставшихся без попечения родителей.</li>
				   </ul>
                   <p align="justify">
                </p>


            </div>
        </div>
    </div>
</section>-->
<!--<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="testimonials-section__heading">Отзывы</div>
        <div class="testimonials-section__slider wow fadeIn">
            <div class="swiper-prev-test">
                <svg>
                    <use xlink:href="images/sprites.svg#left-arrow"></use>
                </svg>
            </div>
            <div class="swiper-next-test">
                <svg>
                    <use xlink:href="images/sprites.svg#right-arrow"></use>
                </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image">
                        <img src="images/People-Kadimov.png" alt="">
                    <a class="icon" href="https://vk.com/rahmon_03_70" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
					</div>
                    <div class="text">
                        <div class="title">Рахмон Кадимов</div>
                        <div class="caption">Таджикистан, БХФ ТГПУ</div>
                        <div class="descr">
                            Салом! Ман Кадимов Рахмон Хусайнович, хатмкунандайи бакалавриати факултайи хим-биологи
                            Донишгохи давлатии омузгории шахри Томск хастам. Холо бошад, хонданро дар хамин факулта бо хайси магистр,
                            баъди нисфирузи идома додаистодаам ва сахаргохон бошад ба хайсии муалими химия дар мактаби миенаии
                            №12 кору фаолият дорам. Ман шахсан аз номи худам ва баъдан аз номи хатмкунандагони факултайи хим-биолог,
                            минатдории худро ба омузгорону рохбарони ДДОТ мерасонам. Сатхи илму амал омузии дар Донишгох бисер баландаст,
                            ва ногуфта намонад ки дар инчо танхо илм чойи намоенро мегирад ва баройи супоридани зачоту экзаменхо ягон сум лозим нест.
                            Гайр аз ин дар Донишгох шароити машку тамрин мухае хаст(ман хусусан дар Донишгох ба гурзбардории машгул хастам ва алакай КМС дорам,
                            багайр 3- маротиба голиби шахрии Томск шудам, ва даххо маротиба чойхоии намоенро ишгол кардам).

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image"><img src="images/people-Gen.png" alt="">


                        <a class="icon" href="https://vk.com/id331053446" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="text">
                        <div class="title">Genevieve Silk</div>
                        <div class="caption">United Kingdom, University of Bristol</div>
                        <div class="descr">
                            I truly couldn't have asked for better Russian teachers! They tailored their classes not only to our Russian ability
							but also to our interests and I would never have dreamed that my Russian would improve so much in such a short amount
							of time. Thanks to the focus on phonetics and vocabulary, I've often been complimented by Russian speakers on my accent
							and knowledge of slightly obscure Russian words. We covered all aspects of language learning and our teachers always pushed
							us to achieve our best, while still maintaining a relaxed and friendly atmosphere in the class. Studying Russian has never
							been so much fun!
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image"><img src="images/people-Gubayew.png" alt="">

                        <a class="icon" href="https://vk.com/go_only_straight" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="text">
                        <div class="title">Nurmyrat Gubayew</div>
                        <div class="caption">Türkmenistan, ТГПУ выпуск 2020</div>
                        <div class="descr">
                            Salam gadyrly, doslar men Nurmyrat Gubayew Turkmenistan dowletiniñ Tejen şäheriniñ ýaşaýyjysy,
							Rusiýa federasiyasynyñ Tomsk şäherinde Tomskyñ mugallymçylyk uniwersitetinde(ТГПУ) okap ýörenime
							eýýäm 3 ýyl bolup barýa , owadan we kone gotiçeski görnüşünde gurlan şäher, owadan parklar
							we dynç alynýan ýerler kän, uniwersitetde gowy okap ylym almak üçin ähli şertler bar,
							hemme zatlary aýtmak, ýazmak, beýän etmek üçin bir kitap az bolar şonuñ üçin hemmäñizi öz uniwersitetimize okuwa çagyraýan !!!
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image"><img src="images/people-wan.png" alt="">
                        <a class="icon" href="https://vk.com/id352829582" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="text">
                        <div class="title">王兴华</div>
                        <div class="caption">托姆斯克国立师范大学, 微信 w810512</div>
                        <div class="descr">
                            托木斯克国立师范大学作为俄罗斯亚洲及西伯利亚地区最古老的师范大学，历史厚重，名人辈出，师资强大！学校的国际排名逐年不断上升，
							托木斯克是一座包容且开放的城市，是一座来了就不想走的城市，是一座能给你温暖的城市！我在托木斯克等你！欢迎来托木斯克国立师范大学，带着梦想起航
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="image">
                        <img src="images/people-trang.png" alt="">
                        <a class="icon" href="https://vk.com/id382411282" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="text">
                        <div class="title">Huyền Trang</div>
                        <div class="caption">Việt Nam, Khoa ngoại ngữ, TSPU</div>
                        <div class="descr">
                            Tôi rất tự hào là sinh viên năm cuối của trường Đại học sư phạm quốc gia Tomsk (TSPU). Nơi đây có các thầy cô luôn tận tình,
							và rất nhiều kinh nghiệm giảng dạy, môi trường học tập sáng tạo và năng động. Trường có đa dạng các khoa và hệ đào tạo vì vậy sinh viên có nhiều sự lựa chọn ngành mình thích. Có thể nói,
							TSPU là ngôi trường đào tạo hệ Sư phạm dẫn đầu nước Nga và là sự lựa chọn rất tin tưởng cho các bạn sinh viên.
                        </div>
                    </div>
                </div>


                 <div class="swiper-slide">
                    <div class="image">
                        <img src="images/people-merri.png" alt="">
                        <a class="icon" href="https://vk.com/id516673007" target="_blank" rel="nofollow">
                            <svg>
                                <use xlink:href="images/sprites.svg#vk-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="text">
                        <div class="title">Merri-Yo Tarigan</div>
                        <div class="caption">Indonesia, TSPU</div>
                        <div class="descr">
                            Belajar di Tomsk State Padegogical University memberikan saya banyak pengalaman baru,
							dan pengetahuan baru tentang sistem belajar yang berbeda dengan sistem belajar di perguruan tinggi pada umumnya di Indonesia.
							Tenaga pengajar di universitas ini juga sangat profesional dan menguasai bidang mereka masing-masing.
							Belajar di ruangan yang nyaman dengan kelengkapan media pendukung di setiap ruangan menjadikan pembelajaran lebih efektif dan efesien.
							Hal lain yang tidak kalah penting, khususnya bagi mahasiswa asing adalah urusan administrasi.
							Pengurusan semua dokumen dan kebutuhan informasi diproses dengan cepat,
							dan terdapat banyak kontak yang bisa dihubungi sesuai dengan kebutuhan mahasiswa dan biasanya mereka selalu meresponnya dengan cepat.
                        </div>
                    </div>
                </div>

            <div class="swiper-slide">
                <div class="image"><img src="images/people-tif.png" alt="">

                    <a class="icon" href="https://vk.com/id325635268" target="_blank" rel="nofollow">
                        <svg>
                            <use xlink:href="images/sprites.svg#vk-logo"></use>
                        </svg>
                    </a>
                </div>
                <div class="text">
                    <div class="title">Tiefolo Sogoba </div>
                    <div class="caption">Mali, master 2 groupe 7901 muco, faculté d’économie et de gestion, TSPU</div>
                    <div class="descr">
                        Mes impressions personnelles sur l’université Pédagogique d’Etat de Tomsk.
•	Université Pédagogique d’Etat de Tomsk est classée la meilleure Université Pédagogique de toute la Russie.
Au cours de mes études j’ai eu l’agréable plaisir de croiser de très grands et brillants professeurs et une
administration toujours à l’écoute des étudiants surtout les étrangers.  Avec une formation théorique charnue
couronnée de pratiques l’Universitaires Pédagogique d’Etat de Tomsk offre des potentialités énormes.
Elle enseigne le savoir, le savoir faire et le savoir être.
•	L’université Pédagogique d’état de Tomsk est le meilleur choix pour les futurs candidats.
•	Je donne la mention excellente ⭐⭐⭐⭐⭐

                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="image"><img src="images/people-camil.png" alt="">

                    <a class="icon" href="https://www.instagram.com/cami_souzaa" target="_blank" rel="nofollow">
                        <svg>
                            <use xlink:href="images/sprites.svg#vk-logo"></use>
                        </svg>
                    </a>
                </div>
                <div class="text">
                    <div class="title">Camila Sobreira de Souza</div>
                    <div class="caption">Brasil, Instituto Federal de Minas Gerais</div>
                    <div class="descr">
                        Minha experiência em Tomsk foi inesquecível! A universidade e o setor de relações internacionais
						me deram suporte para tudo, do início ao fim de minha estadia. Tive a oportunidade
						de ter aulas maravilhosas sobre a cultura e a história da Rússia, experimentei comidas típicas,
						conheci museus e estudei o idioma com uma professora excelente, disposta a tirar minhas dúvidas
						e a tornar o momento em sala de aula agradável. Aprendi e me diverti bastante! Sem contar ainda
						o acesso liberado à biblioteca da Universidade! O contato com os outros estudantes também
						foi fundamental nesse processo de adaptação à cidade,
						onde pude aprender ainda mais sobre o idioma e os costumes locais. Assim que fui embora, já senti saudades da TSPU!
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</section>-->
<!--<section class="map-section bg--1">
    <div class="container">
        <h2 class="map-section__heading">Томский государственный педагогический университет</h2>
        <div class="map-section__content">
            <div class="left wow slideInLeft">
                        <div class="map-section__item mini usnewslogo">
                            <div class="image"><img src="images/usnewslogo.png" alt="QS logo"></div>
                            <div class="txt">
                                <div class="number" style="margin-bottom: 5px">один из 24</div>
                                <div class="txts">лучших университетов <br> России, в списке топ-200 университетов мира</div>
                            </div>
                        </div>
             <div class="map-section__item mini">
                <div class="image"><img src="images/qs-logo1.png" alt="QS logo"></div>
                <div class="txt">
                    <div class="number">1</div>
                    <div class="txts">место среди педагогических вузов России</div>
                </div>
            </div>
            <div class="map-section__item mini">
                <div class="image"><img src="images/webometrics.png" alt="QS logo"></div>
                <div class="txt">
                    <div class="number">1</div>
                    <div class="txts">место среди педагогических вузов России</div>
                </div>
            </div>
        </div>
        <div class="right wow slideInRight">
            <div class="map-section__item mini">
                <div class="year">1902</div>
                <div class="txtt">год основания ТГПУ <br>
                    старейший педагогический вуз России за&nbsp;Уралом
                </div>
            </div>
            <div class="map-section__item mini">
                <div class="year">Иностранные студенты со всего света</div>
                <div class="txtt">Китай, Великобритания, Польша, Чехия, Япония, Индонезия, Бразилия, Монголия, Вьетнам, Мали, страны СНГ
                </div>
            </div>
            <div class="map-section__item mini">
                <div class="year">84% преподавателей</div>
                <div class="txtt">кандидаты и доктора наук
                </div>
            </div>
        </div>
    </div>
</div>
</section>-->

    <!--<section class="video-section" id="edges">
 	 <div class="fullscreen-bg">
       <div class="overlay">
       <div class="overlay_center">
        <div class="overlay__descr">
          Наши иностранные студенты <br> расскажут вам о ТГПУ
          <div>
                    <a class="video__link" href="#link">Смотреть ролик на YouTube</a>
                    <a class="video__link" href="#link">Загрузить</a>
          </div>
        </div>
       </div>
       </div>
       <video loop="" muted="" autoplay="" poster="video/plane.jpg" class="fullscreen-bg__video">
           <source src="images/Video.mp4" type="video/mp4">
           <source src="images/Video.ogv" type="video/ogg">
       </video>
   </div>
    </section>-->

    <!--<section class="edges-section" id="edges">
        <div class="container">
            <h2 class="edges-section__heading">Почему ТГПУ</h2>
            <div class="edges-section__content wow fadeInUp">


                <div class="edges-section__item">
                    <div class="title">Широкая география обучающихся</div>
                    <div class="descr">21 страна мира</div>

                </div>
                <div class="edges-section__item">
                    <div class="title">4 научных журнала </div>
                    <div class="descr">Web of Science, Scopus, ВАК</div>
                </div>

                <div class="edges-section__item">
                    <div class="title">Сильная наука </div>
                    <div class="descr">25 научных направлений</div>
                </div>
                <div class="edges-section__item">
                    <div class="title">ТГПУ - открытый университет</div>
                    <div class="descr">90 международных договоров</div>
                </div>
                <div class="edges-section__item">
                    <div class="title">Образование будущего</div>
                    <div class="descr">Профессия учителя всегда востребована
</div>
                </div>
                <div class="edges-section__item">
                    <div class="title">Знаменитые ученые</div>
                    <div class="descr">топ-100 самых цитируемых учёных России  </div>
                </div>
                <div class="edges-section__item">
                    <div class="title">Знаменитые выпускники</div>
                    <div class="descr">Писатели, учёные Forbes, олимпийские чемпионы</div>
                </div>


            </div>
        </div>
    </section>-->
    <!--<section class="programs-section" id="programs">
        <div class="container">
            <h2 class="programs-section__heading wow fadeInDown">Программы обучения</h2>
            <div class="programs-section__descr wow fadeInDown">
                Обратите внимание! Все курсы предлагаются на русском языке, кроме профиля Русский язык как иностранный (бакалавриат). С Правилами приема на обучение по образовательным программам высшего образования - программам бакалавриата, программам специалитета, программам магистратуры можно ознакомиться <a href="https://abiturient.tspu.edu.ru/obr-prog/" target="_blank""
                        style="color: #0096FF; border-bottom: 1px solid #BFE2FF;">по ссылке</a>.
		Если вы не владеете русским языком, вы можете пройти обучение на подготовительном отделении и поступить на любую из представленных программ:
            </div>
            <div class="programs-section__content wow fadeInUp">
                <div class="programs-section__tabs">
                    <div class="programs-section__tabnav"><a class="active" href="#bak">Бакалавриат</a><a href="#mag">Магистратура</a>
                    </div>
                    <div class="programs-section__tabpane faded in active" id="bak">

                        <div class="group" data-accordion-group>
                            <div class="accordion open" data-accordion>
                                <div class="accordion__control" data-control>
                                    <div class="control inyaz">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#inyaz"></use>
                                            </svg>
                                        </div>
                                        <div class="text">Институт иностранных языков и международного сотрудничества
                                        </div>
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" data-content>
                                    <table class="accordion__table">
                                        <thead>
                                            <tr>
                                                <td class="code" data-label="Код">Код</td>
                                                <td class="dir" data-label="Направление подготовки">Направление подготовки
                                                </td>
                                                <td class="years" data-label="Срок обучения">Срок обучения</td>
                                                <td class="exam" data-label="Стоимость обучения">Стоимость обучения
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td class="code" data-label="Код">44.03.05</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong>
                                                         Иностранный (английский) язык и Иностранный (немецкий) язык
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >  5 лет</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong>
                                                </td>
                                            </tr>

  					<tr>
                                                <td class="code" data-label="Код">44.03.05</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong>
                                                          Иностранный (английский) язык и Иностранный (французский) язык
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >  5 лет</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong>
                                                </td>
                                            </tr>

 					 <tr>
                                                <td class="code" data-label="Код">44.03.05</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong>
                                                        Иностранный (английский) язык и Русский язык как иностранный
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >  5 лет</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="code" data-label="Код">45.03.02</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Лингвистика -</strong>  Перевод и переводоведение (английский язык – немецкий язык; английский язык – французский язык; английский язык – китайский язык)
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >  4 года</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong></span>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="group" data-accordion-group>
                            <div class="accordion" data-accordion>
                                <div class="accordion__control" data-control>
                                    <div class="control ist">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#ist"></use>
                                            </svg>
                                        </div>
                                        <div class="text">Историко-филологический факультет</div>
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" data-content>
                                    <table class="accordion__table">
                                        <thead>
                                            <tr>
                                                <td class="code">Код</td>
                                                <td class="dir">Направление подготовки</td>
                                                <td class="years">Срок обучения</td>
                                                <td class="exam">Стоимость обучения</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="code" data-label="Код">44.03.05</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong> Русский язык и Литература
                                                </div>
                                            </td>
                                            <td class="years" data-label="Срок обучения">5 лет</td>
                                            <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong></span>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="code" data-label="Код">44.03.05</td>
                                            <td class="dir" data-label="Направление подготовки">
                                                <div class="title"><strong>Педагогическое образование -</strong> История и Обществознание
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">5 лет</td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="group" data-accordion-group>
                    <div class="accordion" data-accordion>
                        <div class="accordion__control" data-control>
                            <div class="control psih">
                                <div class="icon">
                                    <svg>
                                        <use xlink:href="images/sprites.svg#psih"></use>
                                    </svg>
                                </div>
                                <div class="text">Факультет психологии и специального образования
                                </div>
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="images/sprites.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__content" data-content>
                            <table class="accordion__table">
                                <thead>
                                    <tr>
                                        <td class="code">Код</td>
                                        <td class="dir">Направление подготовки</td>
                                        <td class="years">
                                            <div align="center">Срок обучения</div>
                                        </td>
                                        <td class="exam">Стоимость обучения</td>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td class="code" data-label="Код">44.03.02</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                                Психология образования
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">4 года</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="code" data-label="Код">44.03.02</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                                Специальная психология и педагогика
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">4 года</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>142 000 - 161 000₽</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="code" data-label="Код">44.05.01</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Педагогика и психология девиантного поведения - </strong>Психолого-педагогическая профилактика девиантного поведения
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">специалитет 5 лет</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="code" data-label="Код">44.03.03</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Специальное (дефектологическое) образование -</strong> Логопедия
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">
                                        <div align="center">4 года</div>
                                    </td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong></span>
                                    </td>
                                </tr>
                                                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control dosh">
                        <div class="icon">
                            <svg>
                                <use xlink:href="images/sprites.svg#dosh"></use>
                            </svg>
                        </div>
                        <div class="text">Институт детства</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <table class="accordion__table">
                        <thead>
                            <tr>
                                <td class="code">Код</td>
                                <td class="dir">Направление подготовки</td>
                                <td class="years">Срок обучения</td>
                                <td class="exam">Стоимость обучения</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="code" data-label="Код">44.03.05</td>
                                <td class="dir" data-label="Направление подготовки">
                                    <div class="title"><strong>Педагогическое образование -</strong>
                                        Начальное образование и Дошкольное образование
                                    </div>

                                </td>
                                <td class="years" data-label="Срок обучения">5 лет</td>
                                <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                            Искусство и Дополнительное образование (на выбор: хореография, музыка, изобразительное искусство)
                                        </div>

                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
                                </tr>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control eco">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#eco"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет экономики и управления</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td class="code" data-label="Код">38.03.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Экономика -</strong> Финансы и кредит
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">4 года</td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="code" data-label="Код">38.03.02</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Менеджмент -</strong> Государственное и муниципальное управление
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">4 года</td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong></span>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                            Экономика и Право
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>142 000 - 161 000₽</strong>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control tech">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#tech"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет технологии и предпринимательства</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title">
                                            <strong>Педагогическое образование - </strong>
                                           Технология и Безопасность жизнедеятельности
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
</tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="code" data-label="Код">44.03.04</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title">
                                            <strong>Профессиональное обучение (по отраслям) -</strong>
                                           Декоративно-прикладное искусство и дизайн
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">4 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control fiz">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#fiz"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет физической культуры и спорта</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Физическая культура и Дополнительное образование
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control eco">
                            <div class="icon">
                                   <img src="images/bio.png"></use>
                             </div>
                            <div class="text">Биолого-химический факультет</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Биология и Химия
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
<tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Биология и География
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control ist">
                            <div class="icon">
                                   <img src="images/phys.png"></use>
                             </div>
                            <div class="text">Физико-математический факультет</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Математика и Физика
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
<tr>
                                    <td class="code" data-label="Код">44.03.05</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Математика и Информатика
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">5 лет</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
<tr>
                                    <td class="code" data-label="Код">09.03.02</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Информационные системы и технологии - </strong>Информационные технологии в образовании
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">4 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>142 000 - 161 000₽</strong></span>
                                        </td>
 </tr>
                            </tbody>
                        </table>
</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

             <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control tech">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#tech"></use>
                                </svg>
                            </div>
                            <div class="text">Подготовительное отделение</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code" </td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код"> </td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Русский язык как иностранный</strong>
                                                                                       </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">9 месяцев</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>94 000 - 105 000₽</strong></span>
                                        </td>

 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="programs-section__tabpane faded" id="mag">
             <div class="group" data-accordion-group>
                            <div class="accordion close" data-accordion>
                                <div class="accordion__control" data-control>
                                    <div class="control inyaz">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#inyaz"></use>
                                            </svg>
                                        </div>
                                        <div class="text">Институт иностранных языков и международного сотрудничества
                                        </div>
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" data-content>
                                    <table class="accordion__table">
                                        <thead>
                                            <tr>
                                                <td class="code" data-label="Код">Код</td>
                                                <td class="dir" data-label="Направление подготовки">Направление подготовки
                                                </td>
                                                <td class="years" data-label="Срок обучения">Срок обучения</td>
                                                <td class="exam" data-label="Стоимость обучения">Стоимость                                                    обучения
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td class="code" data-label="Код">44.04.01</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong>
                                                         Иностранный (английский–немецкий, английский–французский) язык
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >  2 года</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong>
                                                </td>
                                            </tr>

  					<tr>
                                                <td class="code" data-label="Код">44.04.01</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -</strong>
                                                          Лингвокультурология
                                                    </div>
                                                </td>
                                                <td class="years" data-label="Срок обучения" >2 года</td>
                                                <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="group" data-accordion-group>
                            <div class="accordion" data-accordion>
                                <div class="accordion__control" data-control>
                                    <div class="control ist">
                                        <div class="icon">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#ist"></use>
                                            </svg>
                                        </div>
                                        <div class="text">Историко-филологический факультет</div>
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="images/sprites.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" data-content>
                                    <table class="accordion__table">
                                        <thead>
                                            <tr>
                                                <td class="code">Код</td>
                                                <td class="dir">Направление подготовки</td>
                                                <td class="years">Срок обучения</td>
                                                <td class="exam">Стоимость обучения</td>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="code" data-label="Код">44.04.01</td>
                                                <td class="dir" data-label="Направление подготовки">
                                                    <div class="title"><strong>Педагогическое образование -
                                                    </strong> Историческое образование
                                                </div>
                                            </td>
                                            <td class="years" data-label="Срок обучения">2 года</td>
                                            <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong></span>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="code" data-label="Код">44.04.01</td>
                                            <td class="dir" data-label="Направление подготовки">
                                                <div class="title"><strong>Педагогическое образование -</strong> Филологическое образование
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">2 года</td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                                    </tr>
                                <tr>
                                            <td class="code" data-label="Код">44.04.01</td>
                                            <td class="dir" data-label="Направление подготовки">
                                                <div class="title"><strong>Педагогическое образование -</strong> Русский язык как иностранный
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">2 года</td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="group" data-accordion-group>
                    <div class="accordion" data-accordion>
                        <div class="accordion__control" data-control>
                            <div class="control psih">
                                <div class="icon">
                                    <svg>
                                        <use xlink:href="images/sprites.svg#psih"></use>
                                    </svg>
                                </div>
                                <div class="text">Факультет психологии и специального
                                    образования
                                </div>
                                <div class="plus">
                                    <svg>
                                        <use xlink:href="images/sprites.svg#plus"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__content" data-content>
                            <table class="accordion__table">
                                <thead>
                                    <tr>
                                        <td class="code">Код</td>
                                        <td class="dir">Направление подготовки</td>
                                        <td class="years">
                                            <div align="center">Срок обучения</div>
                                        </td>
                                        <td class="exam">Стоимость обучения</td>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td class="code" data-label="Код">44.04.02</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                                Практическая психология и педагогика
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">2 года</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="code" data-label="Код">44.04.02</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                                Педагогика и психология образования
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">2 года</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>153 000 - 170 000₽</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="code" data-label="Код">44.04.03</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Специальное (дефектологическое) образование -</strong> Логопедия
                                            </div>
                                        </td>
                                        <td class="years" data-label="Срок обучения">
                                            <div align="center">2 года</div>
                                        </td>
                                        <td class="exam" data-label="Стоимость обучения">
                                            <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="code" data-label="Код">44.04.03</td>
                                        <td class="dir" data-label="Направление подготовки">
                                            <div class="title"><strong>Специальное (дефектологическое)
                                            образование  -</strong> Педагогика и психология инклюзивного образования
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">
                                        <div align="center">2 года</div>
                                    </td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong></span>
                                    </td>
                               </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="group" data-accordion-group>
            <div class="accordion" data-accordion>
                <div class="accordion__control" data-control>
                    <div class="control dosh">
                        <div class="icon">
                            <svg>
                                <use xlink:href="images/sprites.svg#dosh"></use>
                            </svg>
                        </div>
                        <div class="text">Институт детства</div>
                        <div class="plus">
                            <svg>
                                <use xlink:href="images/sprites.svg#plus"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="accordion__content" data-content>
                    <table class="accordion__table">
                        <thead>
                            <tr>
                                <td class="code">Код</td>
                                <td class="dir">Направление подготовки</td>
                                <td class="years">Срок обучения</td>
                                <td class="exam">Стоимость обучения</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="code" data-label="Код">44.04.02</td>
                                <td class="dir" data-label="Направление подготовки">
                                    <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                        Психология и педагогика развития дошкольника
                                    </div>

                                </td>
                                <td class="years" data-label="Срок обучения">2 года</td>
                                <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code" data-label="Код">44.04.02</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Психолого-Педагогическое образование -</strong>
                                            Психология и педагогика начального образования
                                        </div>

                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                              	 <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                            Искусство (на выбор: хореография, музыка, изобразительное искусство)
                                        </div>

                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control eco">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#eco"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет экономики и управления</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование - </strong> Управление в сфере образования
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="code" data-label="Код">44.04.04</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Профессиональное обучение (по отраслям) -</strong> Государственное и муниципальное управление
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения"><span><strong>153 000 - 170 000₽</strong></span>
                                    </td>
                                </tr>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control tech">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#tech"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет технологии и предпринимательства</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title">
                                            <strong>Педагогическое образование - </strong>
                                           Безопасность жизнедеятельности
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
</tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title">
                                            <strong>Педагогическое образование -</strong>
                                           Профессиональное обучение
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control fiz">
                            <div class="icon">
                                <svg>
                                    <use xlink:href="images/sprites.svg#fiz"></use>
                                </svg>
                            </div>
                            <div class="text">Факультет физической культуры и спорта</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Физическая культура
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control eco">
                            <div class="icon">
                                   <img src="images/bio.png"></use>
                             </div>
                            <div class="text">Биолого-химический факультет</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Биолого-химическое образование
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="group" data-accordion-group>
                <div class="accordion" data-accordion>
                    <div class="accordion__control" data-control>
                        <div class="control ist">
                            <div class="icon">
                                   <img src="images/phys.png"></use>
                             </div>
                            <div class="text">Физико-математический факультет</div>
                            <div class="plus">
                                <svg>
                                    <use xlink:href="images/sprites.svg#plus"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__content" data-content>
                        <table class="accordion__table">
                            <thead>
                                <tr>
                                    <td class="code">Код</td>
                                    <td class="dir">Направление подготовки</td>
                                    <td class="years">Срок обучения</td>
                                    <td class="exam">Стоимость обучения</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="code" data-label="Код">01.04.02</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Прикладная математика и информатика -</strong>
                                               Прикладная информатика
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
<tr>
                                    <td class="code" data-label="Код">44.04.01</td>
                                    <td class="dir" data-label="Направление подготовки">
                                        <div class="title"><strong>Педагогическое образование -</strong>
                                               Физико-математическое образование
                                        </div>
                                    </td>
                                    <td class="years" data-label="Срок обучения">2 года</td>
                                    <td class="exam" data-label="Стоимость обучения">
                                        <span><strong>153 000 - 170 000₽</strong></span>
                                        </td>
 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</section>-->




<footer class="contacts bg--4" id="contacts">
    <div class="container">
        <div class="contacts__content wow fadeInRight">
            <h2 class="contacts__heading">Записаться на получение услуги</h2>
				<div class="social_auth">
				<div class="vkimage">
				<p>
				<?php
				echo $gimage;
				 if (strlen($vkphoto)>35) {
					
			echo $vkphoto; } 
			
				 //echo $vkauthlink = '<a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через ВКонтакте</a>';
				 $vkauth = $url . '?' . urldecode(http_build_query($params));
				?>
				
				</p>
				</div>
				<div class="authorized">
				<?php
				if (strlen($vkname)<2 AND strlen($googleid)<1) {
					$nologin = '<h3 class="auth_heading">Войти через:</h3>' . '<p><a href="'. $vkauth . '"><i class="fa fa-vk" aria-hidden="true"></i></a>' . $okauth . $gauth . '<p>' ;
					print_r($user->name);
					echo $nologin;
				} if (strlen($vkname)>3 OR strlen($googleid)>2)
				{
					echo '<h3 class="auth_heading login">Добро пожаловать,</h3>' . '<p class="helloname">' . $vkname . $googlename . '<p>'; 
				}
				
				?>
				
				</div>
			
				</div>
            <form class="contacts__form">
                <input type="hidden" name="project_name" value="ТГПУ">
                <input type="hidden" name="admin_email" value="infocent@tspu.edu.ru">
                <input type="hidden" name="form_subject" value="Заявка на обучение (тгпу-онлайн.рф)">
                <div class="big-input">
                    <input type="text" name="fio" placeholder="ФИО" value="<?php if (strlen($vkname)>5 OR strlen($googlename)>1) {
						echo $googlename;
			echo $vkname;
				 }  ?>">
                </div>
                <div class="small-input">
                    <input type="tel" name="phone" placeholder="Телефон">
                </div>
                <div class="small-input">
                    <input type="email" name="email" placeholder="E-mail" value="<?php if (strlen($googlemail)>1) {
						echo $googlemail;
					} ?>">
                </div>
                <div class="big-input">
                    <input type="text" name="question" placeholder="Содержание вопроса (тема обращения)">
                </div>
				<!--<div class="big-input">
                    <input type="text" name="problem" placeholder="Проблема">
                </div>-->
				<!--<div class="big-input">
                    <input type="text" name="specialist" placeholder="Специалист">
                </div>-->
				<div class="big-input">
				
                    <div class="drop education"><span>Специалист</span>
                        <div class="dropdown">
                            <ul>
                                <li><a href="#" id="elem">Гордеева Екатерина Алексеевна</a></li>
				<li><a href="#">Обносова Галина Петровна</a></li>
                                <li><a href="#" class="specialist2">Дергачёва Евгения Владимировна</a></li>
								<li><a href="#" class="specialist3">Сергеева Анна Иосифовна</a></li>
								<li><a href="#" class="specialist4">Буртовая Наталия Борисовна</a></li>
								<li><a href="#" class="specialist5">Дудина Елена Николаевна</a></li>
								<li><a href="#" class="specialist14">Дроздецкая Ирина Александровна</a></li>
								<li><a href="#" class="specialist15">Обложко Ульяна Алексеевна</a></li>
								<li><a href="#" class="specialist6">Байгулова Наталья Алексеевна</a></li>
								<li><a href="#" class="specialist7">Титова Галина Юрьевна</a></li>
								<li><a href="#" class="specialist8">Лыба Алла Анатольевна</a></li>
								<li><a href="#" class="specialist9">Семенова Наталия Альбертовна</a></li>
								<li><a href="#" class="specialist10">Поздеева Светлана Ивановна</a></li>
								<!--<li><a href="#" class="specialist11">Файзуллаева Елена Дмитриевна</a></li>-->
								<li><a href="#" class="specialist12">Купершлаг Ирина Геннадиевна</a></li>
								<li><a href="#" class="specialist13">Мёдова Наталия Анатольевна</a></li>
                            </ul>
                        </div>
                        <input type="text" name="specialist">
                    </div>
                </div>
				<div class="big-input">
				<div class="drop direction"><span>Ваш регион</span>
                        <div class="dropdown">
                            <ul>
                                <li><a href="#">Томская область</a></li>
								<li><a href="#">Алтайский край</a></li>
                                <li><a href="#">Кемеровская область</a></li>
								<li><a href="#">Республика Хакасия</a></li>
								<li><a href="#">Ханты-Мансийский автономный округ – Югра</a></li>
								<li><a href="#">Другой</a></li>
                            </ul>
                        </div>
                        <input type="text" name="region">
                    </div>
				</div>
				<div class="big-input">
                    <p class="wecallyou">Наш специалист свяжется с Вами для определения даты и времени консультации!</p>
					<!--<input type="text" name="timetotalk" placeholder="Как с вами связаться для определения времени консультации">-->
                </div>
                <div class="agreement">
                    <label>
                        <input type="checkbox" checked>
                        <div class="text">Я даю согласие на обработку и хранение моих персональных данных  </div>
                        </label>
                    </div>
                    <div class="button">
                        <button type="submit">Отправить</button>
						

                    </div>
                </form>
            </div>
        </div>
        
        </footer>
		<section class="comission-section" id="comission">
    <h2 class="comission-section__heading">Центр поддержки семьи ТГПУ</h2>
    <div class="comission-section__descr">Оказание услуг психолого-педагогической, методической
и консультационной помощи родителям (законным представителям),
а также гражданам, желающим принять на воспитание в свои семьи
детей, оставшихся без попечения родителей
    </div>
</section>
<section class="section-map" id="your-map-container">
    <div class="section-map__content">
        <h2 class="section-map__heading">Центр поддержки семьи ТГПУ</h2>
        <div class="section-map__descr"></div>
        <div class="section-map__adress">Томск, ул. Герцена, 66, каб.  110</div>
        <div class="section-map__schedule"><strong>Диспетчерская служба</strong> <br> Пн-Пт: 9:00 - 18:00
		<br>
		<strong>Специалисты</strong>
		<br> Пн-Сб: по предварительной записи
		</div><br/>
		<div class="section-map__schedule">Наши контакты<br/>
                    <a class="section-map__phone" href="tel:+73822311256" style="margin-top: 0px; margin-bottom: 0px;">+7 3822 311-256</a>
        <div class="section-map__schedule"><a href="mailto:cps@tspu.edu.ru">cps@tspu.edu.ru</a></div></div>

        
		
		<div class="section-map__schedule">Тел. горячей линии<br/> 8 800 555 89 81</a></div>
<div class="section-map__schedule"><a href="https://xn--80aidamjr3akke.xn--p1ai/" target="_blank">растимдетей.рф</a></div>
<div class="section-map__schedule insta">
<a class="instagram-btn" href="https://www.instagram.com/cps_tspu_tomsk/" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>&nbsp
            Instagram
        </a>
</div>

    </div>
    <div class="map-mobile" id="map-mobile"></div><div class="contacts__foot">
            <div class="container container-2">
                <div class="links"><a class="tgpu" href="https://www.tspu.edu.ru/en/" target="_blank" rel="nofollow">Сайт
                ТГПУ</a></div>
                <!--<a class="right" href="http://fresco.bz/" target="_blank">
                    <svg>
                        <use xlink:href="images/sprites.svg#fresco_white"></use>
                    </svg></a>-->
                </div>
            </div>
</section>
        <div class="hidden">
            <div class="order__modal"><a class="order__modal-close" href="#">
                <svg>
                    <use xlink:href="images/sprites.svg#close"></use>
                </svg>
            </a>
            <div class="order__modal-heading">Заказ звонка</div>
            <div class="order__modal-descr">В течение рабочего дня с Вами свяжется консультант и ответит на все вопросы
            </div>
            <form class="order__modal-form">
                <input type="hidden" name="project_name" value="ТГПУ">
                <input type="hidden" name="admin_email" value="infocent@tspu.edu.ru">
                <input type="hidden" name="form_subject" value="Заявка на звонок (тгпу-онлайн.рф)">
                <input type="tel" name="phone" placeholder="Телефон">
                <input id="check" name="check" type="hidden" value=""/>
                <button type="submit" onClick="document.getElementById('check').value = 'stopSpam';">Перезвоните мне
                </button>
            </form>
        </div>
        <div class="thanks__modal"><a class="thanks__modal-close" href="#">
            <svg>
                <use xlink:href="images/sprites.svg#close"></use>
            </svg>
        </a>
        <div class="thanks__modal-heading">Ваша заявка принята</div>
        <div class="thanks__modal-descr">В течение рабочего дня с Вами свяжется консультант и ответит на все вопросы
        </div>
    </div>
</div>
</main><a name="bottomOFThePage"></a>
<script src="js/vendor.js?v=1488"></script>
<script src="js/main.js?v=1488"></script>

<script>

$(document).ready(function(){
  // Добавить плавную прокрутку до всех ссылок
  $("a").on('click', function(event) {

    // Убедись в этом что .hash имеет значение перед переопределением поведения по умолчанию
    if (this.hash !== "") { 
      // Хранить хэш
      var hash = this.hash;
      // Использование метода animate() jQuery для добавления плавной прокрутки страницы
      // Необязательное число (800) указывает количество миллисекунд, необходимых для прокрутки до указанной области
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Добавить хэш (#) для URL-адреса после завершения прокрутки (поведение щелчка по умолчанию)
        window.location.hash = hash;
      });
    } // Конец, если
  });
});
</script>

</body>
</html>
<pre>
<?php
$str = json_encode($_SERVER);
$array = json_decode($str);
//print_r($array);
//echo $str;
?>
</pre>