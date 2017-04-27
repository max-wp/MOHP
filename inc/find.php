<!--Подключаемя к базе-->
<?php
define(HOST, localhost);
define(USER, "root");
define(PW, "Qwerty1");
define(DB, "mohp");
$connect = mysql_connect(HOST,USER,PW)
or die('Нет подключения к серверу базы данных mysql server.' );
mysql_select_db(DB, $connect)
or die('Нет соединения с базой данных.');
//удаление из поискового термина всех тегов HTML и сокращения его размера
$term = strip_tags(substr($_POST['search_term'],0, 100));
$term = mysql_escape_string($term);
//Создание оператора SQL. Извлекаем из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, и др. после чего выполняется запрос mysql_query().
$sql = "select user,rang,unit,code,phone,mob
from phonebook
where user like '%$term%'
or rang like '$term%'
or unit like '%$term%'
or phone like '$term%'
order by id asc";
//Распечатка строки командной echo. Инициализируем переменную $string, чтобы сохранить результаты, затем используем mysql_num_rows() для проверки наличия в ответе любых строк. Если результаты для поискового термина не получены, $string будет содержать значение "Совпадений не найдено!" Если они есть, будет распечатано каждое имя и номер телефона из множества результатов. В конце процесса вся строка выводится на экран командой echo:
$result = mysql_query($sql);
$string = '';
if (mysql_num_rows($result) > 0){
  while($row = mysql_fetch_object($result)){
    $string .= "<tr>";
    $string .= "<td>"."<b>".$row->user."</b>"."</td>";
    $string .= "<td>".$row->rang."</td>";
    $string .= "<td>".$row->code."</td>";
    $string .= "<td>".$row->unit."</td>";
    $string .= "<td>"."<b>".$row->phone."</b>"."</td>";
    $string .= "<td>".$row->mob."   "."</td>";
    $string .= "<br/>\n";
    $string .= "</tr>";
  }
}else{
  $string = "Совпадений не найдено!";
} 
echo $string;
?>