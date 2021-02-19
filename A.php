<?php


//class A
//{
//public $some_property;
//function some_method(){
//    echo "This method is defined inside class A";
////    echo $this->some_property;
//}
//}

//class B extends A{
//    function some_method(){
//        echo "This method is defined inside class B";
//    }
//}

class Person {
    protected $name;
    protected function set_name($new_name){
        if ($new_name != 'Jimmy Two Guns'){
            $this->name = strtoupper($new_name);
        }
    }
}

class Employee extends Person{
    protected function set_name($new_name)
    {
        if($new_name == "Stefan Sucks"){
            $this->name = $new_name;
        }
        else if($new_name == "Johnny Fingers"){
            Person::set_name($new_name);
//            parent::set_name($new_name);
        }
    }
}

