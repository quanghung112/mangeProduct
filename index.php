<?php
include 'class/App.php';

$app=new App('products.json');
$app->addProductstoJSON();
$app->index();
?>