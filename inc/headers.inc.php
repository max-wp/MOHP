<?php
$title = 'Корпоративный сайт АО "Мособлгидропроект"';
$header = "Добро пожаловать на наш сайт!";
$id = strtolower(strip_tags(trim($_GET['id'])));//strtolower — Преобразует строку в нижний регистр; strip_tags — Удаляет HTML и PHP-теги из строки; trim - удаляет пробелы в начале и в конце;
// Инициализация заголовков страницы
switch($id){
	case 'home':
		$title = 'Главная страница';
		$header = 'Главная';
		break;
	case 'testing':
		$title = 'Проверка знаний';
		$header = 'Тесты';
		break;
	case 'plans':
		$title = 'Планы развития сайта';
		$header = 'Планы';
		break;
    case 'ascon':
		$title = 'Ascon - системный комплекс';
		$header = 'Ascon';
		break;
    case 'ascon-faq':
		$title = 'FAQ системы ЛОЦМАН-ПГС в МОСОБЛГИДРОПРОЕКТ';
		$header = 'Ascon';
		break;
    case 'autocad':
		$title = 'AutoCAD - система проектирования';
		$header = 'autocad';
		break;
    case 'autocad-options-user':
		$title = 'Настройка AutoCAD по стандарту предприятия для пользователя';
		$header = 'Настройка AutoCAD для пользователя';
		break;
    case 'autocad-options-admin':
		$title = 'Настройка AutoCAD по стандарту предприятия для администратора';
		$header = 'Настройка AutoCAD для администратора';
		break;
    case 'autocad-lic':
		$title = 'Сведения о наличии лицензий AutoDESK';
		$header = 'autocad-lic';
		break;
    case 'it':
		$title = 'Информация для ИТ';
		$header = 'it';
		break;
    case 'phonebook':
		$title = 'Адресная книга';
		$header = 'phonebook';
		break;
}