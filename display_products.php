<?php
include "class/App.php";
include "class/Product.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("Location: view/Add_product.php");
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
        table {
            margin-left: 20%;
            border-collapse: collapse;
            width: 60%;
        }
        .status{
            color: red;
        }

        h2 {
            text-align: center;
        }

        div {
            width: 700px;
            height: 300px;
            border: 3px solid black;

        }

        input {
            width: 300px;
            height: 30px;
            border-radius: 3px;
            margin-top: 10px;
        }

        button {
            width: 100px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 10px;
            font-family: "Abyssinica SIL";
        }
        .add{
            width: 200px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 10px;
            font-family: "Abyssinica SIL";
            margin-left: 74%;
        }

        span {
            width: 150px;
            display: inline-block;
        }

         tr,td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h2>Danh sach san pham</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Name Product</th>
        <th>Information</th>
        <th>Status</th>
        <th>Price</th>
        <th>App</th>
    </tr>
    <?php
    $app=new App();
    $products=$app->readProducts();
    $arrayProduct=[];
    foreach ($products as $value) {
        $product = new Product($value['nameProduct'], $value['Information'], $value['statusProduct'], $value['price'],$value['id']);
        array_push($arrayProduct, $product);
    }
    foreach ($arrayProduct as $key => $value){
        ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value->getNameProduct(); ?></td>
            <td><?php echo $value->getInformation(); ?></td>
            <?php if ($value->getStatusProduct()=="Out Of Stock"){ ?>
                <td class="status"><?php echo $value->getStatusProduct(); ?></td>
            <?php } else { ?>
                <td><?php echo $value->getStatusProduct(); ?></td>
            <?php }?>
            <td><?php echo $value->getPrice(); ?></td>
            <td>
                <a href="view/edit.php?page=edit&id=<?php echo $value->getIdProduct()?>" >
                    <button type="submit">Edit</button>
                </a>
                <a href="view/delete.php?page=delete&id=<?php echo $value->getIdProduct()?>" >
                    <button type="submit">Delete</button>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
<form method="post">
    <button class="add" type="submit">ADD_PRODUCT</button>
</form>
</body>