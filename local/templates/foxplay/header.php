<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\UI\Extension;
use Bitrix\Main\Page\Asset;
Extension::load('ui.bootstrap4');
/*CJSCore::RegisterExt(
	'jquery3',
	array(
		'js' => SITE_TEMPLATE_PATH.'/js/jquery-3.5.1.min.js',
		'rel' => array('jquery'),
		'skip_core' => true
	)
);*/
CJSCore::Init(array('jquery'));
/*CJSCore::RegisterExt(
	'jquery_fix',
	array(
		'js' => SITE_TEMPLATE_PATH.'/js/jquery-migrate-3.0.0.min.js',
		'rel' => array('jquery'),
		'skip_core' => true
	)
);
CJSCore::Init(array('jquery_fix'));*/
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/script.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/imagesloaded.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/infinite-scroll.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/masonry.pkgd.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.stellar.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
//Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/custom.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/all.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/slick.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/ionicons.min.css');
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="alternate" hreflang="x-default" href="https://dariaphoto161.ru/" />
	<?$APPLICATION->ShowHead();?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=SITE_TEMPLATE_PATH?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="yandex-verification" content="3d6de5ebf5ec0c71" />
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="cursor"></div>
	<div id="preloader">
		<div class="loading-area">
			<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип" />
			<span>загрузка...</span>
		</div>
		<div class="left-side"></div>
		<div class="right-side"></div>
	</div>
	<div class="overlay-menu d-flex align-items-start flex-column">
		<nav class="navbar navbar-light">
			<div class="container">
				<a class="navbar-brand text-white" href="/">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип" />
				</a>
				<div class="close-icon">
					<i class="fas fa-times"></i>
				</div>
				<ul class="social-icons light list-inline">
					<li class="list-inline-item">
						<a href="tg://resolve?domain=miberezkin" target="_blank">
							<i class="fab fa-telegram"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<?$APPLICATION->IncludeComponent(
			'bitrix:menu',
			'top_menu',
			Array(
				'ALLOW_MULTI_SELECT' => 'N',
				'CHILD_MENU_TYPE' => 'left',
				'DELAY' => 'N',
				'MAX_LEVEL' => '4',
				'MENU_CACHE_GET_VARS' => array(
					0 => '',
				),
				'MENU_CACHE_TIME' => '3600',
				'MENU_CACHE_TYPE' => 'A',
				'MENU_CACHE_USE_GROUPS' => 'Y',
				'MENU_THEME' => 'blue',
				'ROOT_MENU_TYPE' => 'top',
				'USE_EXT' => 'Y',
			),
			false
		);?>
		<footer class="text-center mt-auto">
			<div class="container">
				<span class="copyright">© <?=date('Y')?> professional161.ru</span>
			</div>
		</footer>
	</div>
	<div class="site-wrapper">
		<header>
			<nav class="navbar navbar-light">
				<div class="container d-flex">
					<a class="navbar-brand" href="/">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Логотип" />
					</a>
					<div class="menu-icon justify-content-end">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class="social-icons list-inline">
						<li class="list-inline-item">
							<a href="tg://resolve?domain=miberezkin" target="_blank" title="Связаться со мной в Telegram">
								<i class="fab fa-telegram"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>