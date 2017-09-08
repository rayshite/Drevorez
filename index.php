<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Артель «Древорез»</title>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/drevorez/style.css">
    <link href="https://fonts.googleapis.com/css?family=Arsenal:400,700|Ruslan+Display|Tenor+Sans&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo get_theme_root_uri()?>/drevorez/js/fancybox/dist/jquery.fancybox.css">
	<script src="<?php echo get_theme_root_uri()?>/drevorez/js/fancybox/dist/jquery.fancybox.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
});
    </script>
    
</head>

<body>
	<header class="section">
	    <img src="<?php echo get_theme_root_uri()?>/drevorez/img/menu.png" id="menu" onclick="openMenu()">
		<menu>
			<ul>
			    <li><a href="javascript:void(0)" onclick="closeMenu()">&times;</a></li>
				<li><a href="http://arteldrevorez.ru">Главная</a></li>
				<li><a href="http://arteldrevorez.ru/our-works">Наши работы</a></li>
				<li><a href="http://arteldrevorez.ru/about-us">О нас</a></li>	
				<li><a href="http://arteldrevorez.ru/contact">Контакты</a>
			</ul>
		</menu>
		<h1>ДРЕВОРЕЗ</h1>
		<h2>Художественная резьба по дереву на заказ</h2>
		<img src="<?php echo get_theme_root_uri()?>/drevorez/img/arrows.png" id="scrollme">
	</header>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<div id="content" class="section">
                <?php the_content(); ?>
                </div>
	<?php endwhile; ?>
	<?php endif; ?>


	<footer>
	    
		<nav>
			<h5>ДРЕВОРЕЗ</h5> 
            <h6>Художественная резьба по дереву на заказ</h6>
			<ul>
                <li><a href="http://arteldrevorez.ru">Главная</a></li>
			    <li><a href="http://arteldrevorez.ru/our-works">Наши работы</a></li>
			    <li><a href="http://arteldrevorez.ru/about-us">О нас</a></li>	
			    <li><a href="http://arteldrevorez.ru/contact">Контакты</a>
            </ul>
		</nav>

		<div id="contacts">
                        <b>E-mail:</b></br> <a href="mailto:arteldrevorez@yandex.ru">arteldrevorez@yandex.ru</a><br/><br/>
                        <b>Тел.:</b><br/> +7 923-286-58-10<br/> +7 952-745-79-67<br/>

			<a href="https://www.instagram.com/arteldrevorez/" target="_blank">
				<img src="<?php echo get_theme_root_uri()?>/drevorez/img/inst.png" class="social">
			</a>
			<a href="https://vk.com/arteldrevorez" target="_blank">
				<img src="<?php echo get_theme_root_uri()?>/drevorez/img/vk.png" class="social">
			</a>
			<a href="https://www.livemaster.ru/arteldrevorez" target="_blank">
		 	        <img src="<?php echo get_theme_root_uri()?>/drevorez/img/yam.png" class="social">
			</a>
		</div>

		<p>2016-2017 &copy; all rights reserved.</p>
	</footer>

<script>
        $('#scrollme').click(function(){
            $("html, body").animate({ scrollTop: $(window).height()}, 600);
            return false;
        });
</script>
<script src="<?php echo get_theme_root_uri()?>/drevorez/js/menu.js"></script>
</body>
</html>

