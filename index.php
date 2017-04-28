<?php ob_start();
include 'inc/headers.inc.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stelesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400&subset=cyrillic" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <title>
            <?=$title ?>
        </title>
    </head>
    <!--  Создаем функцию для предотвращения типичного поведения поисковой формы.
функция slideUp() используется для временного сокрытия элемента DOM search_results. Для обращения к этому элементу по имени применяется функция $().каждый раз при нажатии кнопки Search или вводе символов в поле search_term анонимная функция предотвращает поведение по умолчанию и переадресует приложение к функции ajax_search()-->
    <script type='text/javascript'>
        $(document).ready(function () {
            $("#search_results").slideUp();
            $("#search_button").click(function (e) {
                e.preventDefault();
                ajax_search();
            });
            $("#search_term").keyup(function (e) {
                e.preventDefault();
                ajax_search();
            });
        });
        //       Функция ajax_search() .Нам нужно показать элемент DOM search_results (как вы помните, сначала мы его спрятали), ввести значение из входного поля search_term, передать его функции ($.post()), которая асинхронно исполняет файл find.php, и ждать ответа. Когда ответ появится (как вы помните, мы сделали так, чтобы find.php возвращала ответ в любом случае, даже если совпадений не обнаружено), jQuery помещает этот ответ в элемент DOM search_results.
        function ajax_search() {
            $("#search_results").show();
            var search_val = $("#search_term").val();
            $.post("inc/find.php", {
                search_term: search_val
            }, function (data) {
                if (data.length > 0) {
                    $("#search_results").html(data);
                }
            })
        }
    </script>

    <body>
        <?php require 'inc/lib.inc.php'; ?>
            <!-- ШАПКА САЙТА -->
            <header>
                <?php require 'inc/header.inc.php'; ?>
            </header>
            <!-- навигация -->
            <div class="main-menu-box">
                <?php include 'inc/menu.inc.php'; ?>
            </div>
            <!-- ОБЛАСТЬ ОСНОВНОГО КОНТЕНТА -->
            <div class="content">
                <?php include 'inc/content.inc.php'; ?>
            </div>
            <!-- ПОДВАЛ САЙТА -->
            <footer>
                <?php require 'inc/footer.inc.php'; ?>
            </footer>
    </body>

    </html>