<?php


class App
{
    public $files;

    public function __construct($files)
    {
        $this->files=$files;
    }


    public function addProductstoJSON($product){
        $arrJson=$this->readJSON();
        array_push($arrJson,$product);
        $jsondata = json_encode($arrJson);
        file_put_contents($this->files, $jsondata);
    }

    public function readJSON()
    {
        $dataJson = file_get_contents($this->files);
        $arrData = json_decode($dataJson, true);
        return $arrData;
    }

}