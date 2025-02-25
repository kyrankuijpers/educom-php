<?php

// static methods and properties are the same for all instances. Because of this they can also be accessed without creating an instance.
class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  
  new greeting();

class A {
public static function welcome() {
    echo "Hello World!";
}
}

class B {
public function message() {
    A::welcome();
}
}

$obj = new B();
echo $obj -> message();

class pi{
    
    public static $value = 3.14159;

    public function staticValue(){
        return self::$value;
    }
}

echo pi::$value;
$pi = new pi();
echo $pi->staticValue();

class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();


?>