<?php


class Product{
    public $name;
    public $information;
    public $cost;
    public $status;
    public function __construct($name,$information,$cost,$status){
        $this->name=$name;
        $this->cost=$cost;
        $this->status=$status;
        $this->information=$information;
    }


    public function getName(){
        return $this->name;
    }


    public function setName($name){
        $this->name = $name;
    }


    public function getInformation(){
        return $this->information;
    }


    public function setInformation($information){
        $this->information = $information;
    }


    public function getCost(){
        return $this->cost;
    }


    public function setCost($cost){
        $this->cost = $cost;
    }

    public function getStatus(){
        return $this->status;
    }


    public function setStatus($status){
        $this->status = $status;
    }
}

































