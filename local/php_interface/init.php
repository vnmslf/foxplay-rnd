<?
include_once ($_SERVER['DOCUMENT_ROOT'].'/local/vendor/autoload.php');
if (isset($_GET['noinit']) && !empty($_GET['noinit']))
{
	$strNoInit = strval($_GET['noinit']);
	if ($strNoInit == 'N')
	{
		if (isset($_SESSION['NO_INIT']))
			unset($_SESSION['NO_INIT']);
	}
	elseif ($strNoInit == 'Y')
	{
		$_SESSION['NO_INIT'] = 'Y';
	}
}
if (!(isset($_SESSION['NO_INIT']) && $_SESSION['NO_INIT'] == 'Y')) {
	if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/autoload.php'))
		require_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/autoload.php');
}
AddEventHandler('main', 'OnEndBufferContent', 'deleteKernelJs');
function pre($data, $flag = true) {
	if($flag) {
		$bt = debug_backtrace();
		$bt = $bt[0];
		$dRoot = $_SERVER['DOCUMENT_ROOT'];
		$dRoot = str_replace('/','\\', $dRoot);
		$bt['file'] = str_replace($dRoot,'', $bt['file']);
		$dRoot = str_replace('\\','/', $dRoot);
		$bt['file'] = str_replace($dRoot,'', $bt['file']);?>
		<div style='font-size:12px; color:#000; background:#fff; border:1px dashed #000;'>
			<div style='padding:3px 5px; background:#99CCFF; font-weight:bold;'>File: <?=$bt['file']?> [<?=$bt['line']?>]</div>
			<pre style='padding:10px;'><?print_r($data)?></pre>
		</div>
	<?} else {
		echo '<pre>', print_r($data), '</pre>';
	}
}
function deleteKernelJs(&$content) {
	global $USER, $APPLICATION;
	if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
	if($APPLICATION->GetProperty("save_kernel") == "Y") return;
	$arPatternsToRemove = Array(
		'/<script.+?src=".+?kernel_main\/kernel_main\.js\?\d+"><\/script\>/',
//		'/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
		'/<script.+?>BX\.(setJSList)\(\[.+?\]\).*?<\/script>/',
		'/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
		'/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
		'/<script.+?src=".+?bitrix\/js\/main\/loadext\/loadext[^"]+"><\/script\>/',
		'/<script.+?src=".+?bitrix\/js\/main\/loadext\/extension[^"]+"><\/script\>/',
	);

	$content = preg_replace($arPatternsToRemove, "", $content);
	$content = preg_replace("/\n{2,}/", "\n\n", $content);
}
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', 'OnBeforeIBlockElementHandler');
AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', 'OnBeforeIBlockElementHandler');
AddEventHandler('iblock', 'OnBeforeIBlockSectionAdd', 'OnBeforeIBlockElementHandler');
AddEventHandler('iblock', 'OnBeforeIBlockSectionUpdate', 'OnBeforeIBlockElementHandler');
function OnBeforeIBlockElementHandler(&$arFields) {
	$t = new \Akh\Typograf\Typograf();
	$simpleRule = new class extends \Akh\Typograf\Rule\AbstractRule {
		public $name = 'Замена "при" и "это"';
		protected $sort = 1000;
		public function handler(string $text): string {
			$text = str_replace("при ", "при&nbsp;", $text);
			$text = str_replace("При ", "При&nbsp;", $text);
			$text = str_replace("это ", "это&nbsp;", $text);
			$text = str_replace("Это ", "Это&nbsp;", $text);
			return $text;
		}
	};
	$t->addRule($simpleRule);
	if(!empty($arFields['PREVIEW_TEXT'])) {
		$typoText = $t->apply($arFields['PREVIEW_TEXT']);
		$arFields['PREVIEW_TEXT'] = $typoText;
	} elseif(!empty($arFields['DESCRIPTION'])) {
		$typoText = $t->apply($arFields['DESCRIPTION']);
		$arFields['DESCRIPTION'] = $typoText;
	}
	if(!empty($arFields['DETAIL_TEXT'])) {
		$typoText = $t->apply($arFields['DETAIL_TEXT']);
		$arFields['DETAIL_TEXT'] = $typoText;
	}
}?>