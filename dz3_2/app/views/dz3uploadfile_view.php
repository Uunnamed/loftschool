<h2>Загрузка файла</h2>

<form class="form-group" action="/loftschool/dz3_2/dz3/uploadfile/" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input name="MAX_FILE_SIZE" type="hidden" value="2000000">
    </div>
    <div class="form-group">
        <label>Загрузить файл </label>
        <input name="file" type="file">
    </div>
    <div class="form-group">
        <button class="btn btn-default" type="submit">Отправить файл</button>
    </div>
</form>


