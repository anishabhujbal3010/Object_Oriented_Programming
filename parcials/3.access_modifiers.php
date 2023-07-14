<?php 

/* 1. Public -
class Employee{
    //property
    public $name;

    //methods
    public function set_name($name) {
        $this->name = $name;
      }
    function get_name() {
        return $this->name;
      }
  }
  
$emp1 = new Employee();
$emp1->set_name('Anisha');
echo $emp1->get_name(); */



// 1. Private -
class Employee{
    //property
    private $name='Anisha Bhujbal';

    //methods
    public function show_name() {
        echo $this->name;
      }
  }
  
$emp1 = new Employee();
$emp1->show_name();


?>