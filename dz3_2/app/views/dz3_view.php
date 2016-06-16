<h2>3-я Домашка</h2>
<div class="col-xs-9">
    <?=$message?>
<table class="table table-bordered col-xs-6">
    <thead >
    <tr >
        <th>Имя файла</th>
        <th>Действия</th>
    </tr>
    </thead>

    <?php

    foreach ($data as $row) {
        echo "<tbody><tr><td><a href=\"/loftschool/dz3_2/dz3/viewfile/?fname=$row\">$row</a></td>
              <td>
                <a href='/loftschool/dz3_2/dz3/editfile/?fname=$row'>Редактировать</a>
                <a href='/loftschool/dz3_2/dz3/deletefile/?fname=$row'>Удалить</a>
                <a href='/loftschool/dz3_2/dz3/downloadfile/?fname=$row'>Скачать</a>
              </td>
              </tr></tbody>";

    }
    ?>
</table>
</div>