<?php 

try{

    throw new Exception ("Houve um erro", 400); //posso fazer uma documentação de erro para ter um controle maior sobre o código.

} catch(Exception $e) {
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}

?>