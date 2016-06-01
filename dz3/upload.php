<ul>
    <li><a href='index.php'>Главная</a></li>
    <li><a href='create.php'>Создать файл</a></li>
    <li><a href='upload.php'>Загрузить файл</a></li>
</ul>


<form action="index.php?action=upload" method="post" enctype="multipart/form-data">
    <input name="MAX_FILE_SIZE" type="hidden" value="2000000">
    Загрузить файл <input name="file" type="file">
    <input name="" type="submit" value="Послать файл">
</form>

