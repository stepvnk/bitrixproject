<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent("bitrix:main.register", "register", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => "",	// Поля, обязательные для заполнения
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => "",	// Поля, которые показывать в форме
		"SUCCESS_PAGE" => "/login/profile.php",	// Страница окончания регистрации
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>