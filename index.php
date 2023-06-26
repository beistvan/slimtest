<?php
 
require "vendor/autoload.php";

$app = new Slim\App();

$app->get("/",function(){

echo "Hello World";
});

$app->run();
//https://santhoshveer.com/install-slim-framework-on-windows-10/
?>