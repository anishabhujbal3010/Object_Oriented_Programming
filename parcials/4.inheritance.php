<?php

class Employee {
    public $name = "Anisha";
    private $salary = 12000;
    private $grade = 3;

    public function set_salary($salary) {
        $this->salary = $salary;
    }

    public function get_salary() {
        echo "The salary of employee $this->name is $this->salary <br>";
    }

    public function show_name() {
        echo "The name of this employee is $this->name <br>";
    }
}

class Programmer extends Employee {
    private $language = "php";

    public function changeLanguage($lang) {
        $this->language = $lang;
    }
}

$rohan = new Employee();
$rohan->name = "Rohan";
$rohan->set_salary(100);
$rohan->get_salary();
$rohan->show_name();

$shubham = new Employee();
$shubham->name = "Shubham";
$rohan->set_salary(10000);
$rohan->get_salary();
$rohan->show_name();

$geeta = new Programmer();
$geeta->name = "Geeta";
$rohan->set_salary(10000);
$rohan->get_salary();
$rohan->show_name();
?>
