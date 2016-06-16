<?php

class Controller_dz3 extends Controller
{
    function __construct()
    {
        $this->model = new Model_dz3();
        $this->view = new View();
    }

    public function action_index($message = '')
    {
        $data = $this->model->get_data();
        $this->view->generate_dz3('dz3_view.php', 'template_view.php', $data, $message);
    }

    public function action_viewfile()
    {
        if (isset($_GET['fname'])) {
            $data = $this->model->get_file($_GET['fname']);
            $this->view->generate('dz3viewfile_view.php', 'template_view.php', $data);
        } else {
            Route::ErrorPage404();
        }

    }

    public function action_editfile()
    {
        if (isset($_GET['fname'])) {
            $data = $this->model->get_file($_GET['fname']);
            $this->view->generate('dz3editfile_view.php', 'template_view.php', $data);
        } else {
            Route::ErrorPage404();
        }

    }

    public function action_createfile()
    {
        $this->view->generate('dz3createfile_view.php', 'template_view.php');
    }

    public function action_savefile()
    {
        if (isset($_POST['fname'])) {
            $text = '';
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
            }
            $result = $this->model->save_file($_POST['fname'], $text);
            $this->action_index($result);
        } else {
            Route::ErrorPage404();
        }

    }

    public function action_deletefile()
    {
        if (isset($_GET['fname'])) {
            $result = $this->model->delete_file($_GET['fname']);
            $this->action_index($result);
        } else {
            Route::ErrorPage404();
        }

    }

    public function action_downloadfile()
    {
        if (isset($_GET['fname'])) {

            $fname = trim($_GET['fname']);
            $name = $fname;

            if ($fname) {
                $fname = './src/files/' . $fname;
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

    }
    
    public function action_uploadfile(){
        if($_FILES==[]) {
            $this->view->generate('dz3uploadfile_view.php', 'template_view.php');
        }else {
            $result = $this->model->upload_file($_FILES);
            $this->action_index($result);
        }
        
    }
}