<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file));
    $data = array();

    while($row = fgets($file)){ // verifica linha a linha
       $rowData = explode(", ", $row);

       $linha = array();
       for($i=0; $i < count($headers); $i++){ //verifica conteudo da linha, percorrendo a mesma
            $linha[$headers[$i]] = $rowData[$i];

       }

       array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}

?>