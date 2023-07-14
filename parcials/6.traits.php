<?php 
    trait FirstTrait
    {
        public function infol()
        {
            return "From First Trait.";
        }
    }
    trait SecondTrait
    {
        public function info2()
        {
            return "From Second Trait.";
        }
    }
    class MyClass
    {
        use FirstTrait, SecondTrait;
    }
    
$obj = new MyClass();
echo $obj->infol();
echo '<br>';
echo $obj->info2();

?>