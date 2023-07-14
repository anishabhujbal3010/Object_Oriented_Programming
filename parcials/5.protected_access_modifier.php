<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
        $this->describe();
    }

    protected function describe() {
        echo "Name of the programmer: $this->name <br>";
        echo "Salary of the programmer: $this->salary <br>";
        echo "Language of the programmer: $this->language <br>";

    }
}

class Programmer extends Employee {
    public $language = "php";

    public function __construct($name, $lang, $salary) {
        $this->name = $name;
        $this->salary = $salary;
        $this->language = $lang;
        $this->describe();
    }
}

$sharry = new Employee("Anisha", 3);
$rohan = new Programmer("Pavani", "Python", 30000);

?>
