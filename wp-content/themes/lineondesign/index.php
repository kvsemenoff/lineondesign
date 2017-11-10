<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="telephone=no" name="format-detection"/>

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<?php wp_head(); ?>
</head>
<body>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<script>
	    new WOW().init();
	</script>

	<?php wp_reset_query(); ?>
	<?php $wp_query = new WP_Query('page_id=6'); ?>
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<?php $telefon = get_field('телефон'); ?>
	<?php $email = get_field('email'); ?>

	<?php $fistekran_text1 = get_field('первый_экран_текст_1'); ?>
	<?php $fistekran_text2 = get_field('первый_экран_текст_2'); ?>

	<?php $id_gal = get_field('id_фотогалерии_'); ?>

	<?php $w_text1 = get_field('почему_текст_1'); ?>
	<?php $w_img1 = get_field('почему_картинка__1'); ?>

	<?php $w_text2 = get_field('почему_текст_2'); ?>
	<?php $w_img2 = get_field('почему_картинка_2'); ?>

	<?php $w_text3 = get_field('почему_текст_3'); ?>
	<?php $w_img3 = get_field('почему_картинка_3'); ?>

	<?php $glav_text = get_field('главный_дизайнер_текст'); ?>
	<?php $glav_foto = get_field('главный_дизайнер_фото'); ?>
     
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

	<section class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="logo-box">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="header_middle">
						<span class="tel"><?php echo $telefon; ?></span> <br>
						<a href="#zvonok" name="modal">Заказать обратный звонок</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="header-right">
						<span><?php echo $email; ?></span> <br>
						<a href="mailto:<?php echo $email; ?>">Напишите нам</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<span class="title"><?php echo $fistekran_text1; ?></span>
					<ul class="preim">
						<?php echo $fistekran_text2; ?>
					</ul>
					<a href="#infowin2" name="modal" class="button-1">Получить бесплатный расчет стоимости
</a>
				</div>
			</div>
		</div>
	</section>

	<section class="osnovatel">
 		<div class="container">
  			<div class="row">
   				<div class="col-md-3 col-sm-12 col-xs-12">
				    <div class="osnavatel__img">
     					<img src="<?php echo get_template_directory_uri(); ?>/img/dom2.png" alt="">
    				</div>
   				</div>
   				<div class="col-md-9">
    				<p>Основателем и главным дизайнером студии "LineOnDesign" Корсаковой Юлией, было разработано новое направление деятельности - "Готовые интерьерные решения".</p>

   					 <p>На данный момент Вашему вниманию представлены три варианта готовых интерьеров. 
   						 Алгоритм прост: Вы выбираете понравившийся «дизайн», который можно будет 
   						 адаптировать под Вашу, конкретную, планировку и получаете подробные архитектурные планы, коллажи и 3D эскизы по каждому помещению, а также помощь в ремонтных 
    					работах.</p> 
   				</div>
  			</div>
 		</div>
 	</section>

	
	<section class="page2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>НАШИ ГОТОВЫЕ ПРОЕКТЫ</h2>
					<span class="sub-title">Выберите понравившийся стиль</span>
				</div>
				
				<div class="col-md-4">
					<div class="project-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/t1.jpg" alt="">
						<a href="#package1" data-name="packageModal">Совеременная <br>классика</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/t2.jpg" alt="">
						<a  href="#package2" data-name="packageModal">Минимализм</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/t3.jpg" alt="">
						<a  href="#package3" data-name="packageModal">Чистые линии</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section>

	<section class="page3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>ПОЧЕМУ 65% КЛИЕНТОВ ПРИХОДЯТ К НАМ <br class="hidden-xs hidden-sm">
ПО РЕКОМЕНДАЦИИ ДРУЗЕЙ </h2>
				</div>
				<div class="w-item img-right">
					<div class="col-md-5 col-sm-12 col-xs-12 wow bounceInLeft" data-wow-duration="1.0s" data-wow-delay="0.2s">
						<?php echo  $w_text1; ?>
						<br>
						<a href="#infowin3" name="modal" class="button-1">Скачать готовый дизайн проект</a>
					</div>
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="w-img wow bounceInRight"  data-wow-duration="1.5s" data-wow-delay="0.5s">
							<img src="<?php echo $w_img1['url']; ?>" alt="">
						</div>		
					</div>
					<div class="clearfix"></div>		
				</div>
				<div class="w-item img-left">
					<div class="col-md-5  col-md-push-7 col-sm-12 col-xs-12 wow bounceInRight" data-wow-duration="1.0s" data-wow-delay="0.2s">
						<?php echo  $w_text2; ?>
						<a href="#infowin4" name="modal" class="button-1">Скачать пример плана</a>	
					</div>
					<div class="col-md-7 col-md-pull-5 col-sm-12 col-xs-12 ">
						<div class="w-img  wow bounceInLeft"  data-wow-duration="1.5s" data-wow-delay="0.5s">
							<img src="<?php echo $w_img2['url']; ?>" alt="">
						</div>		
					</div>
					<div class="clearfix"></div>	
				</div>
				<div class="w-item img-right">
					<div class="col-md-5 col-sm-12 col-xs-12  wow bounceInLeft"  data-wow-duration="1.0s" data-wow-delay="0.2s">
						<?php echo  $w_text3; ?>
						<a href="#infowin5" name="modal" class="button-1">Скачать пример спецификации</a>	
					</div>
					<div class="col-md-7  col-sm-12 col-xs-12">
						<div class="w-img  wow bounceInRight"  data-wow-duration="1.5s" data-wow-delay="0.5s">
							<img src="<?php echo $w_img3['url']; ?>" alt="">
						</div>		
					</div>
					<div class="clearfix"></div>	
				</div>
				

			</div>
		</div>
	</section>

	<section class="page5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>УЗНАЙТЕ, КАК МЫ ПОМОЖЕМ СОЗДАТЬ <br>ВАМ ИДЕАЛЬНЫЙ ИНТЕРЬЕР</h2>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4">
					<div class="findout-box">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p1.png" alt="">
						</div>	
						<div class="title-box">
							<span>НАШИ СПЕЦИАЛИСТЫ</span>
						</div>
						<ul class="text">

							<li>Имеют высшее профильное образование
								в сфере дизайна и архитектуры, 
								что позволит получить вам максимально 
								функционально-правильное пространство.
							</li>
							<li>
								Вся проектная документация будет
								выполнена на высоком профессиональном
								уровне и понятна как вам, так и строителям.
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="findout-box">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p2.png" alt="">
						</div>	
						<div class="title-box">
							<span>РАЦИОНАЛЬНОЕ  <br>БЮДЖЕТИРОВАНИЕ </span>
						</div>
						<ul class="text">

							<li>Мы сэкономим для вас до 50%
на комплектации за счет наших
прямых контактов с производителями.
							</li>
							<li>
								Не будем навязывать свое мнение,
подберем альтернативные решения,
поможем уложиться в бюджет.
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="findout-box">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p3.png" alt="">
						</div>	
						<div class="title-box">
							<span>ИНДИВИДУАЛЬНЫЙ ПОДХОД</span>
						</div>
						<ul class="text">
							<li>
								Проявляем гибкость в подборе
								необходимых услуг.
							</li>
							<li>
								Вы можете заказать эскизный 
								или полный дизайн-проект. 
							</li>
							<li>
								В любом случае, вы получаете 
								уникальный и качественный продукт. 
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 col-md-offset-2">
					<div class="findout-box">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p4.png" alt="">
						</div>	
						<div class="title-box">
							<span>АВТОРСКИЙ НАДЗОР</span>
						</div>
						<ul class="text">

							<li>Мы проконтролируем подбор материалов,
								ремонтно-строительных работ,
								соблюдение проекта.
							</li>
							<li>
								В итоге вы получаете идеальную
								реализацию!
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="findout-box">
						<div class="img-box">
							<img src="<?php echo get_template_directory_uri(); ?>/img/p5.png" alt="">
						</div>	
						<div class="title-box">
							<span>МНОГОПРОФИЛЬНОСТЬ</span>
						</div>
						<ul class="text">
							<li>Вы можете заказать любую услугу:
								3D визуализацию или декорирование 
								интерьера,
								согласование перепланировок,
								строительные работы и
								проектирование мебели.
							</li>
							<li>
								Мы воплотим ваши желания в жизнь!
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page4-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>5 СМЕЛЫХ ФАНТАЗИЙ </h2><span class="sub-title">Которые мы уже реализовали для наших клиентов</span>
				</div>
			</div>
		</div>
	</section>

	<section class="page4">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-7 col-sm-12 col-xs-12">
					<form action="#" class="black-form form3">
						<span class="close"></span>
						<span class="form-title">Пришлите нам свою <br> идею, и мы обязательно <br>ее реализуем</span>
						<input type="text" name="uname" placeholder="Введите Ваш имя">
						<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
						<textarea name="text" placeholder="Опишите Вашу идею"></textarea>
						<input type="hidden" name="form" value="Форма - 5 СМЕЛЫХ ФАНТАЗИЙ">
						<input type="hidden" name="page" value="<?php echo $page; ?>">
						<input type="submit" id="form3_submit" class="button-2" value="Отправить идею">
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="page6">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>ГЛАВНЫЙ ДИЗАЙНЕР </h2>
				</div>
				<div class="cleafix"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="page6_img">
						<img src="<?php echo $glav_foto['url']; ?>" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-8 col-xs-12">
					
					<div class="desc justify">
						<?php echo $glav_text; ?>
					</div>
				</div>
		
			</div>
		</div>
	</section>

	<section class="page7">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>ОТЗЫВЫ НАШИХ КЛИЕНТОВ </h2>
				</div>
				<div class="cleafix"></div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div id="owl-review" class="wow bounceInUp"  data-wow-duration="1s" data-wow-delay="0.2s">
						<?php wp_reset_query(); ?>
						<?php $wp_query = new WP_Query(array(
				        	'post_type' => 'review'
						)); ?>
						<?php $i=0; ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="item">
							<div class="item-inner">
								<div class="img-box">
									<?php the_post_thumbnail('large'); ?>
								</div>	
								<div class="desc">
									<span class="title"><?php the_title(); ?></span> <br>
									<div class="desc-text justify">
										<?php echo get_the_content(); ?>
									</div>
								</div>	
							</div>
						</div>	
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
					
					<a href="#infowin6" name="modal" class="button-2">Узнать цену</a>
				</div>
			</div>
		</div>
	</section>		

	<section class="page8">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-push-1 col-sm-12 col-xs-12">
					<form action="#" class="black-form form4">
						<span class="close"></span>
						<span class="form-title">
Вы не услышали ответа  <br> на свой вопрос? Задайте<br>его прямо сейчас!</span>
						<input type="text" name="uname" placeholder="Введите Ваш имя">
						<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
						<textarea name="text" placeholder="Вашу вопрос"></textarea>
						<input type="hidden" name="form" value="Форма - Вы не услышали ответа">
						<input type="hidden" name="page" value="<?php echo $page; ?>">
						<input type="submit" id="form4_submit" class="button-2" value="Отправить идею">
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="page9">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h3>Рассчитать стоимость дизайн-проекта</h3><br>
					<br>
				</div>
				<div class="clearfix"></div>
				<div class="page9_text">
					<div class="col-md-1 col-md-offset-3 col-sm-12 col-xs-12">
						<img src="<?php echo get_template_directory_uri(); ?>/img/domik.png" alt="">
					</div>
					<div class="col-md-5 col-sm-12 col-xs-12">
						<span class="title">При заказе дизайн-проекта вы получаете:</span>
						<p>3 Варианта планировки, рабочую документацию для строителей <br>подробную спецификацию комплектующих</p>
					</div>
					<div class="clearfix"></div>
					<form action="#" class="form5">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="form5_uname">
								<input type="text" name="uname" placeholder="Введите Ваш имя">
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="form5_tel">
								<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="form5_sub">
								<input type="hidden" name="form" value="Форма - Рассчитать стоимость дизайн-проекта">
								<input type="hidden" name="page" value="<?php echo $page; ?>">
								<input type="submit" id="form5_submit" class="button-2" value="Рассчитать дизайн проект">
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="logo-box">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt=""></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="footer_middle">
						<span class="tel">+7 911 745 1711</span> <br>
						<a href="#zvonok" name="modal">Заказать обратный звонок</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="footer-right">
						<span>lineondesign@mail.ru</span> <br>
						<a href="mailto:lineondesign@mail.ru">Напишите нам</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="mask"></div>

	<div id="zvonok" class="window"> 
		<form action="" class="common-form form1">
			<span class="close"></span>
			<span class="form-title">ОСТАВЬТЕ ВАШЕ ИМЯ И НОМЕР <br>
				ТЕЛЕФОНА И МЫ С ВАМИ <br>
				СВЯЖЕМСЯ В БЛИЖАШЕЕ <br>
				ВРЕМЯ</span>
			<input type="text" name="uname" placeholder="Введите Ваш имя">
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
			<input type="hidden" name="form" value="Форма - заказать звонок">
			<input type="submit" id="form1_submit" class="button-2" value="Заказать звонок">
		</form>
	</div>

	<div id="getPackage" class="window"> 
		<form action="" class="common-form form-getPackage">
			<span class="close"></span>
			<span class="form-title">ОСТАВЬТЕ ВАШЕ ИМЯ И НОМЕР <br>
				ТЕЛЕФОНА И МЫ С ВАМИ <br>
				СВЯЖЕМСЯ В БЛИЖАШЕЕ <br>
				ВРЕМЯ11</span>
			<input type="text" name="uname" placeholder="Введите Ваш имя">
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">
			<input type="text" name="email" placeholder="Введите Ваш email">
			<input type="hidden" name="form" value="Форма - купить интерьер">
			<input type="submit" id="form1_submit" class="button-2" value="Купить интерьер">
		</form>
	</div>



	<div id="package1" class="window package-window"> 
		<span class="close"></span>
		<div class="package__left">
			<div class="product-main-slider">
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_1.jpg" class="fancybox-img">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_1_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_2.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_2_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_3.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_3_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_4.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_4_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_5.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_5_big_thumb.jpg" alt="">
			      </a>
			    </div>
				
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_6.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_6_big_thumb.jpg" alt="">
			      </a>
			    </div>
	    	</div>
	    	<div class="product-thumb-slider row">

				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_1.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_1_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_2.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_2_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_3.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_3_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_4.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_4_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_5.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_5_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p1/p1_6.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p1/p1_6_sm_thumb.jpg" alt="">
					</a>
				</div>
				
			 
			</div>
		</div>
		<div class="package__right">
			<div class="center">	
				<h4>ГОТОВЫЙ ДИЗАЙНЕРСКИЙ ИНТЕРЬЕР <br>«СОВРЕМЕННАЯ КЛАССИКА»</h4>
			</div>
			<p>
				Этот элегантный интерьер создан в стилистике современной классики, которая, 
				как известно, «вне времени». В проекте использованы уникальные сочетания 
				материалов, предметы интерьера российских дизайнеров и мировых брендов, 
				благодаря чему достигается эксклюзивность и сохраняется функциональность.
			</p>
			<i>*Для тех, кто хочет получить детально продуманный и комфортный дизайнерский интерьер.</i>
			<div class="package-feachers">
				<div class="package-feachers__left">
					<b>В пакете:</b>
					<ul>
						<li>планировка (адаптация к Вашей, конкретной  планировке данного готового  интерьера)</li>
						<li>архитектурные чертежи, планы, развертки</li>
						<li>коллажи</li>
						<li>3D эскизы</li>
					</ul>
				</div>
				<div class="package-feachers__right">
					<b>Предусмотрены дополнительные услуги:</b>
					<ul>
						<li>спецификация с перечнем отделочных материалов, предметов интерьера и  мебели</li>
						<li>последующая помощь в осуществлении ремонтных работ и комплектации Вашего интерьера </li>
						<li>выезд дизайнера (при необходимости) на объект</li>
						<li>декорирование</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="center">
				<a href="#getPackage" name="modal" class="button-1 buyInterer">КУПИТЬ ИНТЕРЬЕР</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>


	<div id="package2" class="window package-window"> 
		<span class="close"></span>
		<div class="package__left">
			<div class="product-main-slider">
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_1.jpg" class="fancybox-img">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_1_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_2.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_2_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_3.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_3_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_4.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_4_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_5.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_5_big_thumb.jpg" alt="">
			      </a>
			    </div>
	    	</div>
	    	<div class="product-thumb-slider row">

				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_1.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_1_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_2.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_2_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_3.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_3_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_4.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_4_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p2/p2_5.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p2/p2_5_sm_thumb.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="package__right">
			<div class="center">	
				<h4>ГОТОВЫЙ ДИЗАЙНЕРСКИЙ ИНТЕРЬЕР <br> «МИНИМАЛИЗМ»</h4>
			</div>
			<p>
				Минимализм оформился в 70-х годах прошлого века как своеобразный протест против динамичного и кричащего поп-арта. Минимализм – немного больше, чем стиль в архитектуре и дизайне, это образ жизни.</p>
			<i>*Этот стиль выбирают для себя целостные натуры. Яркие акценты в этом интерьере помогают придать пространству особую индивидуальность.</i>
			<div class="package-feachers">
				<div class="package-feachers__left">
					<b>В пакете:</b>
					<ul>
						<li>планировка (адаптация к Вашей, конкретной  планировке данного готового  интерьера)</li>
						<li>архитектурные чертежи, планы, развертки</li>
						<li>коллажи</li>
						<li>3D эскизы</li>
					</ul>
				</div>
				<div class="package-feachers__right">
					<b>Предусмотрены дополнительные услуги:</b>
					<ul>
						<li>спецификация с перечнем отделочных материалов, предметов интерьера и  мебели</li>
						<li>последующая помощь в осуществлении ремонтных работ и комплектации Вашего интерьера </li>
						<li>выезд дизайнера (при необходимости) на объект</li>
						<li>декорирование</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="center">
				<a href="#getPackage" name="modal" class="button-1 buyInterer">КУПИТЬ ИНТЕРЬЕР</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="package3" class="window package-window"> 
		<span class="close"></span>
		<div class="package__left">
			<div class="product-main-slider">
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_1.jpg" class="fancybox-img">
			        <img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_1_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_2.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_2_big_thumb.jpg" alt="">
			      </a>
			    </div>

			    <div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_3.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_3_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				<div>
			      <a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_4.jpg" class="fancybox-img">
			          <img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_4_big_thumb.jpg" alt="">
			      </a>
			    </div>
			
				
	    	</div>
	    	<div class="product-thumb-slider row">

				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_1.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_1_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_2.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_2_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_3.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_3_sm_thumb.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a rel="group3" href="<?php echo get_template_directory_uri(); ?>/img/p3/p3_4.jpg" class="fancybox-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/p3/p3_4_sm_thumb.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="package__right">
			<div class="center">	
				<h4>ГОТОВЫЙ ДИЗАЙНЕРСКИЙ ИНТЕРЬЕР <br> «ЧИСТЫЕ ЛИНИИ»</h4>
			</div>
			<p>
				В основу этого решения легли лаконичные формы, сдержанная цветовая гамма, выверенные пропорции. Главной задачей данного стиля, в котором отражаются нотки скандинавского интерьера, является обустройство светлого и уютного помещения. 
			</p>
			<i>*Для тех, кто ценит лаконичность. Выгодное решение для квартир с небольшой площадью.</i>
			<div class="package-feachers">
				<div class="package-feachers__left">
					<b>В пакете:</b>
					<ul>
						<li>планировка (адаптация к Вашей, конкретной  планировке данного готового  интерьера)</li>
						<li>архитектурные чертежи, планы, развертки</li>
						<li>коллажи</li>
						<li>3D эскизы</li>
					</ul>
				</div>
				<div class="package-feachers__right">
					<b>Предусмотрены дополнительные услуги:</b>
					<ul>
						<li>спецификация с перечнем отделочных материалов, предметов интерьера и  мебели</li>
						<li>последующая помощь в осуществлении ремонтных работ и комплектации Вашего интерьера </li>
						<li>выезд дизайнера (при необходимости) на объект</li>
						<li>декорирование</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="center">
				<a href="#getPackage" name="modal" class="button-1 buyInterer">КУПИТЬ ИНТЕРЬЕР</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div id="infowin2" class="window"> 
		<form action="" class="common-form form2">
			<span class="close"></span>
			<span class="form-title">Получить бесплатный расчет стоимости</span>

			<input type="text" name="uname" placeholder="Введите Ваше имя" >
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">

			<input type="hidden" name="form" value="Форма - получить бесплатный расчет стоиомости">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
			<input type="submit" id="form2_submit" class="button-2" value="Получить расчет">
		</form>
	</div>

	<div id="infowin3" class="window"> 
		<form action="" class="common-form form6">
			<span class="close"></span>
			<span class="form-title">Напишите нам и мы отправим Вам пример готового дизайн проекта</span>
			
			<input type="text" name="uname" placeholder="Введите Ваше имя" >
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">

			<input type="hidden" name="form" value="Форма - пример готового дизайн проекта">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
			<input type="submit" id="form6_submit"  class="button-2" value="Заказать дизайн проект">
		</form>
	</div>

	<div id="infowin4" class="window"> 
		<form action="" class="common-form form7">
			<span class="close"></span>
			<span class="form-title">Напишите нам и мы отправим Вам пример готового плана</span>
			
			<input type="text" name="uname" placeholder="Введите Ваше имя" >
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">

			<input type="hidden" name="form" value="Форма - пример готового плана">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
			<input type="submit" id="form7_submit"  class="button-2" value="Заказать план">
		</form>
	</div>

	<div id="infowin5" class="window"> 
		<form action="" class="common-form form8">
			<span class="close"></span>
			<span class="form-title">Напишите нам и мы отправим Вам пример готовой спецификации</span>
			
			<input type="text" name="uname" placeholder="Введите Ваше имя" >
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">

			<input type="hidden" name="form" value="Форма - пример готовой спецификации">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
			<input type="submit" id="form8_submit"  class="button-2" value="Заказать спецификацию">
		</form>
	</div>

	<div id="infowin6" class="window"> 
		<form action="" class="common-form form9">
			<span class="close"></span>
			<span class="form-title">Узнайте цену</span>
			
			<input type="text" name="uname" placeholder="Введите Ваше имя" >
			<input type="text" name="tel" placeholder="Введите Ваш телефон" class="phone">

			<input type="hidden" name="form" value="Форма - узнать цену">
			<input type="hidden" name="page" value="<?php echo $page; ?>">
			<input type="submit" id="form9_submit"  class="button-2" value="Сделать расчет">
		</form>
	</div>



	<div id="thanks" class="window"> 
		<form action="" class="common-form">
			<span class="close"></span>
			<span class="form-title">СПАСИБО ЗА ВАШУ <br> ЗАЯВКУ!</span>
			<span class="form-subtitle">Наши специалисты с Вами свяжутся <br> в ближайшее время.</span>
		</form>
	</div>

	<a href="#thanks" name="modal"></a>

	<div class="toTop"><i class="fa fa-angle-up" aria-hidden="true"></i></div>


</body>
</html>