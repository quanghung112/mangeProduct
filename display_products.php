<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("Location: Add_product.php");
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
            border-collapse: collapse;
            width: 100%;
        }

        .error {
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
            width: 200px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 10px;
            font-family: "Abyssinica SIL";

        }

        span {
            width: 150px;
            display: inline-block;
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
    <button type="submit">ADD_PRODUCT</button>
</form>
<h2>Danh sach san pham</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Name Product</th>
        <th>Information</th>
        <th>Cost</th>
        <th>Status</th>
    </tr>
    <?php
    require "class/App.php";
    $app = new App('products.json');
    $products = $app->readJSON();
    foreach ($products as $key => $value):
        ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['information']; ?></td>
            <td><?php echo $value['cost']; ?></td>
            <td><?php echo $value['status']; ?></td>
            <td>
                <form method="get" action="view/edit.php">
                    <button type="submit" name="<?php echo $key?>">Edit</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</body>