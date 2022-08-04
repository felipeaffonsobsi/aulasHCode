<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){
    echo json_encode(array(
        'date'=>date("Y-m-d H:i:s")
    ));
    //posso trazer as paginas html atraves do rain tpl

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>