<?php

//include_once "Myclass.php";
//
//$myObject = new Myclass();
//$myObject->some_method();

//include_once "A.php";

//$b = new B();
//$b->some_property = 'Hello';
//$b->some_method();


class Customer
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

//$a = new Customer();
//$a->setName('name');
//echo $a->getName();
class DiscountCustomer extends Customer {
    private $discount;
    public function setData($name, $discount) {
       parent::setName($name);//this is storing $name to the
        $this->discount = $discount;
//class $name variable. This works
// as it is a protected variable
}
}

$dc = new DiscountCustomer();
$dc->setData("aaa",10);
echo $dc->getName();