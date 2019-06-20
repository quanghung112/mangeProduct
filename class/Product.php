<?php


class Product{
    private $nameProduct;
    private $Information;
    private $statusProduct;
    private $price;
    private $idProduct;
    public function __construct($name,$information, $status, $price,$idProduct=''){
        $this->nameProduct=$name;
        $this->Information=$information;
        $this->statusProduct=$status;
        $this->price=$price;
        $this->idProduct=$idProduct;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }
    /**
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->Information;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getStatusProduct()
    {
        return $this->statusProduct;
    }

    /**
     * @param mixed $nameProduct
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }

    /**
     * @param mixed $Information
     */
    public function setInformation($Information)
    {
        $this->Information = $Information;
    }

    /**
     * @param mixed $statusProduct
     */
    public function setStatusProduct($statusProduct)
    {
        $this->statusProduct = $statusProduct;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

































