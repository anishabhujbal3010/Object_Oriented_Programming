<?php
class Employee {
    public $name;
    public $surname;
  
    function __construct($name, $surname) {
      $this->name = $name;
      $this->surname = $surname;
    }
  
    function __destruct() {
        echo "Employee name is {$this->name} {$this->surname}.";
    }
}
  
$emp1 = new Employee("Shubham", "Sahu");
?>