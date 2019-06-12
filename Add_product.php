<?php
require_once "class/Product.php";
require_once "class/App.php";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $inform=$_POST['information'];
    $cost=$_POST['cost'];
    $status=$_POST['status'];
    $product=new Product($name,$inform,$cost,$status);
    $addProducts=new App('products.json');
    $addProducts->addProductstoJSON($product);
    header('Location: display_products.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <style>
        h1{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        .eror{
            color: red;
        }
        div{
            border: black;
            width: 500px;
            height: 300px;
        }

        h2 {
            text-align: center;
        }

        div {
            width: 700px;
            height: 400px;
            border: 3px solid black;
            position: absolute;
            left: 30%;
        }

        input {
            width: 300px;
            height: 30px;
            border-radius: 3px;
            margin-top: 10px;
        }

        button {
            width: 200px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 50px;
            font-family: "Abyssinica SIL";
            margin-left: 30%;
        }

        span {
            width: 150px;
            display: inline-block;
            margin-left: 15%;
        }

        th, tr {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<form method="post">
    <div>
        <h1>Add new Product</h1>
        <span>Ten san pham:</span>
        <input type="text" name="name" placeholder="Nhap ten san pham">
        <br>
        <span>Thong tin san pham:</span>
        <input type="text" name="information" placeholder="Nhap thong tin">
        <br>
        <span>Gia san pham</span>
        <input type="number" name="cost" placeholder="Nhap gia san pham">
        <br>
        <span>Tinh trang sang pham</span>
        <input type="text" name="status" placeholder="Nhap tinh trang san pham">
        <br>
        <button type="submit">ADD_PRODUCT</button>
    </div>
</form>
</body>

