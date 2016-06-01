<ul>
    <li><a href='index.php'>Главная</a></li>
    <li><a href='create.php'>Создать файл</a></li>
    <li><a href='upload.php'>Загрузить файл</a></li>
</ul>

    <p>Имя файла: <?=$_GET['fname']?> </p>
    <label>Содержание</label>
    <p border= '1'><?=strip_tags(file_get_contents('./files/'.$_GET['fname'])) ?></p>