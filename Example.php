<?php


class Example
{
    public $name="Minhaj";
    protected $city="Dhaka";
    private $country="Bangladesh";
    private $value;

//    public function __construct($data)
//    {
////        echo $data;
//        $this->value=$data;
//    }
    public function __construct()
    {
//        echo $data;
//        $this->value=$data;
//        echo "In construct";

    }


    public function addition()
    {
//        echo "In addition";
//        echo $this->country;
//        echo $this->value;
//            echo $data;
//           echo $this->value;
           echo "In addition";

    }
//    protected function subtraction()
//    {
////        echo "In subtraction";
//
//    }
    protected function subtraction()
    {
//        echo "In subtraction";
//            echo $data;
//            echo $this->value;
            echo "In subtraction";
    }
    private function division()
    {
        echo "In division";
    }
}