
<?php
include "../class/App.php";
$idProduct=$_GET['id'];
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if ($_POST['Yes']=='Yes'){
        $app=new App();
        $app->deleteProduct($idProduct);
    }
    if ($_POST['No']=='No'){
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
        h1{
            text-align: center;
            color: red;
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

        input {
            width: 100px;
            height: 40px;
            font-size: 18px;
            border-radius: 3px;
            margin-top: 50px;
            font-family: "Abyssinica SIL";
            margin-left: 16%;
        }
    </style>
</head>
<body>
<form method="post">
    <div>
        <h1>Do you want delete Product</h1>
        <input type="submit" name="Yes" value="Yes">
        <input type="submit" name="No" value="No">
    </div>
</form>

</body>