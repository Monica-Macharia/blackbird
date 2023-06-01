<?php 

$name = "dav";
$age = 30;

echo $name;

echo $name, $age;

?>,
<?php 



function greet($name, $age){
    echo "Hey check $name out, she is $age years" ."\n";
}
greet("Jojo", 50);
greet("Joo", 40);




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

<?php
$location="Nanuki";


function hike(){
    global $location;
    echo "Hello, am in $location";
}
hike();
?>

<?php
$m = 500;
$n = 400;
function sum(){
    global $m, $n;
    echo $m + $n + $m + 4000;
}
sum();
echo "<br>";

function increment(){
    static $count = 0;
    $newCount = $count++;
    echo $count."\n";
    //new line
    echo $newCount. '\n';
}
increment();
increment();
increment();

class Animal{
    public $type;
    public $name;

    public function __construct($type, $name){
        $this->type = $type;
        $this->name = $name;
    }

    public function __destruct(){
      echo "This is $this->type and it is known as $this->name "; 
    }
}

$obj = new Animal("cat", "cheetah");


echo(strlen("Hello world"));
echo(strrev("Hello World"))."\n";
echo(str_replace("Hello word", "word", "Hello word earth"));
echo(str_word_count("Helloworld"))."\n";

echo(is_int(6))."\n";
echo(is_float(4556)). "\n";


echo intval("gh")."\n";
echo max([67, 3,566,446])."\n";
echo abs(-2.4);
echo sqrt(144);
echo round(3.30)."\n";
echo rand(20, 25);
$user = array('name' => 'John', 'age' => 30, 'email' => 'john@example.com');
echo $user["name"]."\n";
$num = [5,3,2,4,4,5,5,3,2,4,5,6,32,45,5];
$nums = sort($num);
print_r($nums);

$x = 75;
$y = 25; 

function addition() {
	global $x, $y;  
    global $z;
	return $z = $x + $y;
  
}

addition();
echo $z;


?>