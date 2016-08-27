<?php

$folder = '/files/';
$file = $folder.$_GET['file'];

if (!file_exists($file) && $_GET['file'] != '') {
    echo "File doesn't exists  $filen";
    exit(1);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        unlink($file);
        echo 'File was removed';
        break;

    case 'GET':
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($file));
        readfile($file);
        break;

    case 'POST':
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
            echo 'File  was  uploaded.';
        } else {
            echo 'Error during upload!';
        }
        break;
    }
