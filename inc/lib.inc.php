﻿				<?php
				//Дата с месяцем в виде слова и в виде числа
				$month = array('','Января','Фревраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря');
				$data_mounth_word = date("d ".$month[date('n')]." Y");
				$data_mounth_number = date("d ".date('m')." Y");
				?>