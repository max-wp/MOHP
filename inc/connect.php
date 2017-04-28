<?php
try
{
$pdo = new PDO('mysql:host=localhost;dbname=mohp',mohp_admin, 'rfcgth');
        $pdo->exec('SET NAMES "UTF8"');
}
catch (PDOException $e)
{
    $output = 'Невозможно подключиться к серверу баз данных: '.$e->getMessage();
    echo $output;
    exit();
}
//try
//{
//    $sql ='select user,rang,unit,code,phone,mob
//        from phonebook
//        where user like '%$term%'
//        or rang like '$term%'
//        or unit like '%$term%'
//        or phone like '$term%'
//        order by id asc';
//    $pdo->exec($sql);
//}
//catch (PDOException $e)
//{
//    $output ='Ошибка обращения к базе: '.e$->getMessage();
//    echo '$output';
//}
?>