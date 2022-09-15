<?php 

define('app_url', 'localhost');

class FileDirectory{

    public $age;

    function directory(){
        return app_url . '/assets/documents/aif.pdf';
    }
}

$file = new FileDirectory();
$app_url = $file->directory();
echo $app_url;
?>