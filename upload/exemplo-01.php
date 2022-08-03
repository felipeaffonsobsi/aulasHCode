<form method="POST" enctype="multipart/form-data"> 

    <input name="fileUpload" type="file">
    <button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $file = $_FILES["fileUpload"];
    if($file["error"]){
        throw new Exception("ERROR: " . $file["error"]);
        
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "upload realizado com sucesso!";
    }else{
        throw new Exception("Não foi possível realizar upload");
        
    }
}

?>

