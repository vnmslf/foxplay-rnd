<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$icon['beget'] = file_get_contents($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/images/beget.svg');?>
	<footer class="dark-footer fixed-bottom">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto text-center">
					<?=date('Y')?> &copy; professional161.ru
				</div>
				<div class="col-lg-2 col-auto text-lg-right text-left">
					<!--noindex-->
					<div class="row no-gutters hosting">
						<div class="col-6">
							<a href="https://beget.com/" target="_blank">
								<span>Сайт работает</span><span>на хостинге</span>
							</a>
						</div>
						<div class="col-6">
							<a href="https://beget.com/" target="_blank">
								<?=$icon['beget']?>
							</a>
						</div>
					</div>
					<!--/noindex-->
				</div>
			</div>
		</div>
	</footer>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
		ym(91609234, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/91609234" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?/*    <script src="https://www.google.com/recaptcha/api.js?render=6Le2W6EcAAAAAKu5fMIalbLGCyKewfjgOQupreNm"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/gsap.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/test.js"></script>*/?>
</body>
</html>