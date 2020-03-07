<?php

class Person
{
    public $name;
    private $nid;
    public $address;
    public $age;

    public function __construct($name = "N/A", $nid = "0000")
    {
        $this->name = $name;
        $this->nid = $nid;
        $this->address = "N/A";
        $this->age = -1;
    }

    public function talk()
    {
        echo "I am talking" . "\n";
    }

    public function walk($speed = 0)
    {
        $this->talk();
    }
}

class Teacher extends Person
{
    public $salary;
}

$person1 = new Person("jalaluddin", "02830223");
$person2 = new Person("hasan", "433434343");
$person3 = new Person();


$teacher1 = new Teacher("tareq", "02302302");
$teacher1->salary = 25000;

echo $person1->name . "\n";
echo $person2->name . "\n";
echo $person3->name . "\n";

echo $teacher1->name . "\n";
echo $teacher1->salary . "\n";

$teacher1->talk();


