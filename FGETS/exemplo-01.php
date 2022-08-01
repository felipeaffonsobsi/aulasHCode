<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file));
    $data = array();

    while($row = fgets($file)){
       $rowData = explode(", ", $row);
       
    }

    fclose($file);
}

?>