<?php 

$name = "dav";
$age = 30;

echo $name;

echo $name, $age;

?>,
<?php 



function greet($name, $age){
    echo "Hey check $name out, she is $age years";
}
greet("Jojo", 50);




?>

<?php
$num = 10;

if ($num != 10){
    echo $num;
}
else{
    echo "No";
}
?>

<?php

$number = ["hut", "fot", "des", "teer"];


foreach($number as $num){
    echo $num , " ";
}

for ($i = 0; $i < count($number); $i++){
    echo $i;
}

?>

<?php

class Student{
    public $name;
    public $age;

    public function welcome(){
        echo "This is $this->name and she id $this->age student.";
    }
}
$student=new Student();
$student->name = "Doe";
$student->age = 40;
$student->welcome();
?>