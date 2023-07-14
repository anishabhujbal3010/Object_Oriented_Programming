<?php

class Employee {
    // Property
    private $name;

    // Methods
    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

$emp1 = new Employee();
$emp1->set_name('Anisha');
echo $emp1->get_name();

class Employee2 {
    // Property
    private $name = 'Anisha Bhujbal';

    // Method
    public function show_name() {
        echo $this->name;
    }
}

$emp2 = new Employee2();
$emp2->show_name();

?>
