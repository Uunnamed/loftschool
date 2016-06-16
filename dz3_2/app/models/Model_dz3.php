<?php

class Model_dz3 extends Model
{
    public $directory = './src/files/';

    public function get_data()
    {
        if (!file_exists($this->directory)) {
            mkdir($this->directory,0755,1);
        }
        $result = scandir($this->directory);
        $result = array_splice($result, 2);
        return $result;
    }

    public function get_file($fname)
    {
        $fpath = $this->directory . $fname;
        if (!file_exists($fpath)) {
            return 'Файл не сущеcтвует, либо удален';
        }
        $result = htmlspecialchars(file_get_contents($fpath));
        return $result;
    }

    public function save_file($fname, $text)
    {
        $fpath = $this->directory . $fname;
        $result = (file_put_contents($fpath, $text)) ? "Файл $fname сохранен" : "Ошибка сохранения файла";
        return $result;
    }

    public function delete_file($fname)
    {
        if (file_exists($this->directory . $fname)) {
            unlink($this->directory . $fname);
            $result = "Файл: $fname удален";
        } else {
            $result = "Файл не существует";
        }
        return $result;
    }

    public function upload_file($files)
    {
        if ($files['file']['error'] > 0) {
            $result = 'Проблема: ';

            switch ($files['file']['error']) {
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
        if ($files ['file']['type'] != 'text/plain') {
            return 'Проблема: файл не является текстовым';

        }
// Помещаем файл туда, куда нужно
        $upfile = $this->directory . $files['file']['name'];
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
        return 'Файл успешно загружен.';
    }

}