
<?php
include "../class/App.php";
$idProduct=$_GET['id'];
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $app=new App();
    $app->deleteProduct($idProduct);
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
        div {
            width: 400px;
            height: 200px;
            border: 3px solid black;
            position: absolute;
            left: 30%;
        }

        button {
            width: 100px;
            height: 30px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 30px;
            font-family: "Abyssinica SIL";
            margin-left: 18%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Do you want delete Product</h1>
        <form method="post">
            <button type="submit" >YES</button>
        </form>
        <a href="../display_products.php">
            <button type="submit">NO</button>
        </a>
    </div>
</body>