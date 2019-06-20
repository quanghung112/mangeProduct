<?php
include 'class/Connection.php';

$app=new Connection('products.json');
$app->addProductstoJSON();
$app->index();
?>