<?php

if (isset($_GET['fname'])) {

    $fname = trim(@$_GET['fname']);
    $name = $fname;

    if ($fname) {
        $fname = $_SERVER['DOCUMENT_ROOT'] . '/loftschool/dz3/files/' . $fname;
        if (file_exists($fname)) {
            ob_clean();
            if (preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT']) && !preg_match("/Opera/i", $_SERVER['HTTP_USER_AGENT'])) {
                header('Content-Disposition: inline; filename="' . $fname . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Pragma: public');
            } else {
                header('Content-Disposition: attachment; filename="' . $name . '"');
                header('Expires: 0');
                header('Pragma: no-cache');
            }
            header('Content-Length: ' . filesize($fname));
            header('Content-Type: <MIME_TYPE>');
            readfile($fname);
            exit;
        } else {
            header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
            header('Status: 404 Not Found');
        }
    }
}