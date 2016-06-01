<ul>
    <li><a href='index.php'>Главная</a></li>
    <li><a href='create.php'>Создать файл</a></li>
    <li><a href='upload.php'>Загрузить файл</a></li>
</ul>

<form action="index.php?action=create" method="post" >
    <label>Имя файла</label>
    <input name=fname value="">.txt
    <br>
    <label>Содержание</label>
    <textarea name="text" placeholder="Введите содержимое файла" rows="20"></textarea>
    <input type="submit" value="Создать">
</form>