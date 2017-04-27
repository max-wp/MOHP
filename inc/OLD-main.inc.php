<?php
	echo 'Hello, World!'.''.' php it\'s works';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stelesheet" href="css/reset.css">		
		<link rel="stylesheet" href="css/style.css">
		<title> Корпоративный сайт АО "Мособлгидропроект"</title>
	</head>
	<body>
		<header>
			<div class="headerOne">
				<div class="logo"> 
					<a href="http://hd-web.mohp.ru/"> <img src="img/logo." alt="Логотип копмании" ></a>
				</div>
				<h1 class="nameSite">Корпоративный сайт АО"Мособлгидропроект"</h1>
			</div>
			<div class="headerTwo">	
				<span class="contacts"> Сайт находится на стадии разработки </span>
				<p class="quote"> Цитата дня: <br>"Время можно тратить, а можно проводить с пользой. Помните, что понимание ценности и планирование времени помогут организовать его максимально эффективно, что бы жить полной жизнью"</p>
			</div>	
		</header>
		<nav class="main-menu">
			<ul>
				<li><a href="#home">главная</a></li>
				<li><a href="#testing">тестирование</a></li>
				<li><a href="#about">план развития сайта</a></li>
			</ul>
		</nav>
		<div class="content">
			<h2>План развития сайта</h2>
			<table >
				<tr>
					<td> Запуск, настройка, тестирование web-сервера (IIS или Apache)</td>
					<td> <strong>1 неделя</strong> </td>
					<td class="data"> 05.10-12.10</td>
					<td><span class="label-success">выполнено </span></td>
				</tr>
				<tr>
					<td> Разработка структуры сайта</td>
					<td><strong>1 неделя</strong></td>
					<td class="data"> 22.10-30.10 </td>
					<td><span class="label-nosuccess">не выполнено </span></td>
				</tr>
				<tr>
					<td> Разработка шаблона сайта (ps html css)</td>
					<td><strong>1 месяц</strong></td>
					<td class="data"> 05.10-05.11 </td>
					<td><span class="label-suc">частично выполнено </span></td>
				</tr>
				<tr>
					<td> Разработка базы движка сайта (php mysql)</td>
					<td><strong>2 недели </strong></td>
					<td class="data"> 02.11-13.11 </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>
				<tr>
					<td> Наполнение контентом (тесты)</td>
					<td><strong> 2 дня</strong></td>
					<td class="data"> план </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>				
				<tr>
					<td>Настройка синхронизации пользователей БД Active Directory (либо создание базы пользователей, правил регистрации) </td>
					<td><strong> 1 неделя</strong></td>
					<td class="data"> план </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>					
				<tr>
					<td>Создание базы результатов тестирования на каждого пользователя </td>
					<td><strong>1 неделя </strong></td>
					<td class="data"> план </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>					
				<tr>
					<td> Расширение возможностей сайта (скрытый информационный раздел для админов, синхронизируемая база контактов, FAQ и т.д.)</td>
					<td><strong> постоянно</strong></td>
					<td class="data"> 05.10-05.12 </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>					
	
			</table>	
			<h2>План разработки курсов</h2>
			<table>
				<tr>
					<td>Курсы для работы в microsoft word, создание тестов </td>
					<td><strong>2 недели </strong></td>
					<td class="data"> 2016 </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>
				<tr>
					<td> Курсы для работы в microsoft excel, создание тестов</td>
					<td><strong>2 недели </strong></td>
					<td class="data"> 2016</td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>				
				<tr>
					<td> Курсы по работе в системе электронного документооборота Аскон, создание тестов</td>
					<td><strong> 2 недели</strong></td>
					<td class="data"> 2016 </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>				
				<tr>
					<td>Тестирование пользователей </td>
					<td><strong> 1 день</strong></td>
					<td class="data"> 2016 </td>
					<td><span class="label-nosuccess"> не выполнено </span></td>
				</tr>	
			</table>
		</div> <!--/content-->
		<footer>
			<div> Корпоративный сайт компании АО "Мособлгидропроект" 2015 г</div>
		</footer>
	</body>
</html>