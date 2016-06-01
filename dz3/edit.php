<ul>
    <li><a href='index.php'>Главная</a></li>
    <li><a href='create.php'>Создать файл</a></li>
    <li><a href='upload.php'>Загрузить файл</a></li>
</ul>

<form action="index.php?action=update" method="post" >
    <label>Имя файла <?=$_GET['fname']?> </label>
    <input hidden name=fname value="<?=$_GET['fname']?>">
    <br>
    <label>Содержание</label>
    <textarea name="text" rows="20"><?=file_get_contents('./files/'.$_GET['fname']) ?></textarea>
    <input type="submit" value="Сохранить">
</form>