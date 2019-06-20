<?php
include "../class/App.php";
include "../class/Product.php";
$idProduct = $_GET['id'];
$app = new App();
$productDB = $app->showProduct($idProduct);
$product = new Product($productDB['nameProduct'], $productDB['Information'], $productDB['statusProduct'], $productDB['price']);
$hasError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['Save'] == 'Save') {
        $name = $_POST['name'];
        $inform = $_POST['information'];
        $price = $_POST['cost'];
        $status = $_POST['status'];
        if (empty($name)) {
            $error = "Name Prouct is not required field";
            $hasError = true;
        }
        if (empty($inform)) {
            $error = "Information is not required field";
            $hasError = true;
        }
        if (empty($price)) {
            $error = "Price is not required field";
            $hasError = true;
        }
        if (!$hasError) {
            $product->setNameProduct($name);
            $product->setInformation($inform);
            $product->setStatusProduct($status);
            $product->setPrice($price);
            $app->editProduct($product, $idProduct);
        }
    }
    if ($_POST['Cancel']=='Cancel'){
        header('Location: ../display_products.php');
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
        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .eror {
            color: red;
        }

        div {
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

        .sub {
            width: 100px;
            height: 40px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 50px;
            font-family: "Abyssinica SIL";
            margin-left: 23%;
        }

        span {
            width: 150px;
            display: inline-block;
            margin-left: 17%;
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
        <h1>Edit Product</h1>
        <span>Ten san pham:</span>
        <input type="text" name="name" placeholder="Nhap ten san pham" value="<?php echo $product->getNameProduct() ?>">
        <br>
        <span>Thong tin san pham:</span>
        <input type="text" name="information" placeholder="Nhap thong tin"
               value="<?php echo $product->getInformation() ?>">
        <br>
        <span>Gia san pham</span>
        <input type="number" name="cost" placeholder="Nhap gia san pham" value="<?php echo $product->getPrice() ?>">
        <br>
        <span>Tinh trang sang pham</span>
        <select name="status">
            <option value="Out Of Stock">Out Of Stock</option>
            <option value="In Of Stock">In Of Stock</option>
        </select>
        <br>
        <input class="sub" type="submit" name="Save" value="Save">
        <input class="sub" type="submit" name="Cancel" value="Cancel">
    </div>
</form>
</body>
