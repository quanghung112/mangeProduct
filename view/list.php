<?php
include "../class/Connection.php";
include "../class/Product.php";
include "../class/App.php";
$Product=new Product("iphone","222314","In Of Stock",20000000);
//$conn=new Connection("mysql:host=localhost","dbname=Productmagne","root","123456@Abc");
//$connection= $conn->connect();
//$sql='INSERT INTO `Products` (`nameProduct`,`Information`,`statusProduct`,`price`)
//VALUES (:nameProduct,:Information,:statusProduct,:price)';
//$array=(array)$Product;
////var_dump($array);
//$connection->prepare($sql)->execute($array);
//echo "success";
$a=new Connection("mysql:host=localhost", "dbname=Productmagne", "root", "123456@Abc");
$idProduct=4;
//$name='iphone';
//$inform='222314';
//$status="In Of Stock";
//$price=23213;
try{
   $conn=$a->connect();
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "DELETE FROM `Products` WHERE id=$idProduct";
    $conn->prepare($sql)->execute();
    echo 'success';
}catch (PDOException $e){
    echo 'Error: ',  $e->getMessage(), "\n";;
}
