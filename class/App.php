<?php
include_once "Connection.php";

class App
{
    private $connection;

    public function __construct()
    {
        $connection= new Connection("mysql:host=localhost", "dbname=Productmagne", "root", "123456@Abc");
        $this->connection = $connection->connect();
    }

    public function addProduct($Product)
    {
        try{
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $sql = "INSERT INTO `Products` (`nameProduct`,`Information`,`statusProduct`,`price`) 
                     VALUES (?,?,?,?)";
            $array = [$Product->getNameProduct(),$Product->getInformation(),$Product->getStatusProduct(),$Product->getPrice()];
            $this->connection->prepare($sql)->execute($array);
           header('Location: ../display_products.php');
        }catch (PDOException $e){
            echo 'Error: ',  $e->getMessage(), "\n";;
       }
    }

    public function readProducts()
    {
        try {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM Products";
            $stml = $this->connection->query($sql)->fetchAll();
            return $stml;
        } catch (PDOException $e) {
            echo 'Error: ', $e->getMessage(), "\n";;
        }
    }
    public function showProduct($idProduct){
        try {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM Products WHERE id= $idProduct";
            $stml = $this->connection->query($sql)->fetch();
            return $stml;
        } catch (PDOException $e) {
            echo 'Error: ', $e->getMessage(), "\n";;
        }
    }
    public function editProduct($product,$idProduct){
        try{
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $sql = "UPDATE Products SET nameProduct=?, Information=?, 
                    statusProduct=?, price=? WHERE id=$idProduct";
            $array = [$product->getNameProduct(),$product->getInformation(),$product->getStatusProduct(),$product->getPrice()];
            $this->connection->prepare($sql)->execute($array);
            header('Location: ../display_products.php');
        }catch (PDOException $e){
            echo 'Error: ',  $e->getMessage(), "\n";;
        }
    }
    public function deleteProduct($idProduct){
        try{
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $sql = "DELETE FROM `Products` WHERE id=$idProduct";
            $this->connection->prepare($sql)->execute();
            header('Location: ../display_products.php');
        }catch (PDOException $e){
            echo 'Error: ',  $e->getMessage(), "\n";;
        }
    }
}