<?php
require_once "./Example.php";


class Demo extends Example
{
    public $age=22;
    protected $location="Dhaka";
    private $mobile="01794114422";

    public function newOne()
    {
//        echo "In new one";
//        $this->addition();
        $this->subtraction();
//        $this->division();
    }
    protected function newTwo()
    {
        echo "In new two";
    }
    private function newThree()
    {
        echo "In new three";
    }
}