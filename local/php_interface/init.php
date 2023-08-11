<?
    if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/function.php"))
        require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/function.php");
	
AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss");
	function deleteKernelCss(&$content) {
	    global $USER, $APPLICATION;
	    if(strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
	    if($APPLICATION->GetProperty("save_kernel") == "Y") return;
	    $arPatternsToRemove = Array(
	        '/<link.+?href=".+?bitrix\/css\/main\/bootstrap.css[^"]+"[^>]+>/',
	        '/<link.+?href=".+?bitrix\/css\/main\/bootstrap.min.css[^"]+"[^>]+>/',
	    );
	    $content = preg_replace($arPatternsToRemove, "", $content);
		$content = preg_replace("/\n{2,}/", "\n\n", $content);}
?>
