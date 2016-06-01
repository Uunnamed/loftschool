<ul>
    <li><a href='index.php'>Главная</a></li>
    <li><a href='create.php'>Создать файл</a></li>
    <li><a href='upload.php'>Загрузить файл</a></li>
</ul>


<?php
$directory = './files/';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "create":
            if (isset($_POST['fname']) && isset($_POST['text'])) {
                file_put_contents($directory . $_POST['fname'].".txt", $_POST['text']);
            }
            break;
        case "update":
            if (isset($_POST['fname']) && isset($_POST['text'])) {
                file_put_contents($directory . $_POST['fname'], $_POST['text']);
            }
            break;
        case "edit":
            if (isset($_GET["fname"])) {
                edit($_GET["fname"]);
            }
            break;
        case "delete":
            if (isset($_GET["fname"])) {
                delete($_GET["fname"]);
            }
            break;
        case "upload":
            if (isset($_FILES['file'])) {
                echo upload();
            }
            break;
        default:
            echo "404, нет такого метода";
    }
}


function getFiles($directory)
{
    $result = '<table border="1"><tr><th>Имя файла</th><th>Действия</th></tr>';
    $files = scandir($directory);
    for ($i = 2; $i < count($files); $i++) {
        $result .= '<tr><td><a href="view.php?fname='.$files[$i].'">'.$files[$i].'</a></td>
        <td>
        <a href="edit.php?fname='.$files[$i].'">Редактировать</a>
        <a href="download.php?fname='.$files[$i].'">Скачать</a>
        <a href="index.php?fname='.$files[$i].'&action=delete">Удалить</a>
        </td></tr>';
    }
    return $result;
}

function edit($fname)
{

}

/**
 * @return string
 */
function upload()
{
    if ($_FILES['file']['error'] > 0) {
        $result = 'Проблема: ';

        switch ($_FILES['file']['error']) {
            case 1:
                $result .= 'размер файла больше 2Mb';
                break;
            case 2:
                $result .= 'размер файла больше 2Mb';
                break;
            case 3:
                $result .= 'загружена только часть файла';
                break;
            case 4:
                $result .= 'файл не загружен';
                break;
            default:
                $result .= ' есть при загрузке файла, мой падаван, но хз какая.';
        }
        return $result;
    }
//Проверка, имеет ли файл правильный MIME-тип
    if ($_FILES ['file']['type'] != 'text/plain') {
        return 'Проблема: файл не является текстовым';

    }
// Помещаем файл туда, куда нужно
    $upfile = './files/' . $_FILES['file']['name'];
    if ($_FILES['file']['tmp_name']) {
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $upfile)) {
            return 'Проблема: невозможно переместить файл в каталог назначения';

        }
    } else {
        return 'Проблема: возможна атака через загрузку файла. Файл: ' . $_FILES['file']['name'];
    }

// Переформатирование содержимого файла
    $fp = fopen($upfile, 'r');
    $contents = fread($fp, filesize($upfile));
    fclose($fp);
    $contents = strip_tags($contents);
    $fp = fopen($upfile, 'w');
    fwrite($fp, $contents);
    fclose($fp);
    getFiles('./files/');
    return 'Файл успешно загружен. <br><br>';
}


function delete($fname)
{
    if (file_exists('./files/' . $fname)) {
        unlink('./files/' . $fname);
        echo "Файл: $fname удален";
    } else {
        echo "Файл не существует";
    }

}

echo getFiles($directory);
?>

