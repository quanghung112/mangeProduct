<?php
include "../class/Product.php";
include "../class/Connection.php";
include "../class/App.php";
$hasError=false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $inform=$_POST['information'];
    $price=$_POST['cost'];
    $status=$_POST['status'];
    if (empty($name)){
        $error="Name Prouct is not required field";
        $hasError=true;
    }
    if (empty($inform)){
        $error="Information is not required field";
        $hasError=true;
    }
    if (empty($price)){
        $error="Price is not required field";
        $hasError=true;
    }
    if (!$hasError){
        $product=new Product($name,$inform,$status,$price);
        $appProduct=new App();
        $appProduct->addProduct($product);
    }
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
        select {
            width: 300px;
            height: 30px;
            border-radius: 3px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form method="post">
    <div>
        <h1>Add new Product</h1>
        <span>Ten san pham:</span>
        <input type="text" name="name" placeholder="Nhap ten san pham">
        <?php if (empty($name)):?>
            <span class="eror"><?php echo $error?></span><?php endif;?>
        <br>
        <span>Thong tin san pham:</span>
        <input type="text" name="information" placeholder="Nhap thong tin">
        <?php if (empty($inform)):?>
            <span class="eror"><?php echo $error?></span><?php endif;?>
        <br>
        <span>Gia san pham</span>
        <input type="number" name="cost" placeholder="Nhap gia san pham">
        <?php if (empty($price)):?>
            <span class="eror"><?php echo $error?></span><?php endif;?>
        <br>
        <span>Tinh trang sang pham</span>
        <select name="status">
            <option value="Out Of Stock">Out Of Stock</option>
            <option value="In Of Stock">In Of Stock</option>
        </select>
        <br>
        <button type="submit">ADD_PRODUCT</button>
    </div>
</form>
</body>

