<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наш сайт</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="/loftschool/dz3_2/assets/css/main.css">
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/loftschool/dz3_2">Главная</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Действия<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/loftschool/dz3_2/dz3/createfile/">Создать файл</a></li>
                            <li><a href="/loftschool/dz3_2/dz3/uploadfile/">Загрузить файл</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Домашнее задание<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/loftschool/dz3_2/dz1/">1-е Задание</a></li>
                            <li><a href="/loftschool/dz3_2/dz2/">2-е Задание</a></li>
                            <li><a href="/loftschool/dz3_2/dz3/">3-е Задание</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <?php include './app/views/' . $content_view; ?>
        </div>
    </div>
    <div class="empty"></div>
</div>


<footer class="footer">
    <p>&copy; 2016 Домашки LoftSchool by Aleksey Shipilov, Inc.</p>
</footer>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
</body>
</html>