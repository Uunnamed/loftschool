<h2>Редактирование файла</h2>

<form class="form-group" action="/loftschool/dz3_2/dz3/savefile/" method="post">
    <div class="form-group">
        <label>Имя файла <?=$_GET['fname']?> </label>
        <input class="form-control" type="hidden" name=fname value="<?= $_GET['fname'] ?>">
    </div>
    <div class="form-group">
        <label>Содержание</label>
        <pre><textarea class="form-control" name="text"
                  rows="20"><?=$data?></textarea></pre>
    </div>
    <div class="form-group">
        <button class="btn btn-default" type="submit">Сохранить</button>
    </div>
</form>