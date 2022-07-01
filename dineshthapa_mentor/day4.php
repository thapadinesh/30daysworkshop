<?php 

// function sayHello()
// {
//     echo "Hello World";
// }

// sayHello();


// function member($name)
// {
//     echo $name;
//     echo "<br>";
// }

// member("Dinesh");
// member("Ram");
// member("Hari");
// member("Sita");
// member("Gita");

// function addition(&$num)
// {
//     $num+=10;
// }

// $number = 5;
// addition($number);
// echo $number;


// function add(int $a, int $b)
// {
//     return $a+$b;
// }

// echo add(5, "50");

// function findarea($l, $b)
// {
//     return $l*$b;
// }

// function findvolume($l, $b, $h)
// {
//     return $l*$b*$h;
// }

// $length = 4;
// $breadth = 5;
// $height = 4;
// echo "Area of rectangle is: ".findarea($length,$breadth);

// echo "Volume of rectange is: ".findvolume($length, $breadth, $height);

// $x = 75;
// $y = 25;

// function addition()
// {
//     $z = $x+$y;
//     // $GlOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z; //It prints 100


// function test()
// {
//     $a = 5;
//     $b = 6;
//     return $a+$b; //11
// }

// echo test();
// $a = 6;
// $b = 10;

// echo $a+$b;

// $para = "This is beautiful Nepal. Nepal is so beautiful. asdfadsf beautiful beautiful";

// $pattern = '/asdfaDsf/i';

// $pattern1 = '/beautiful/i';

// echo preg_match($pattern, $para); // if exist then 1, otherwise 0

// echo "<br>";

// echo preg_match_all($pattern1, $para); //no. of times that value exist

// echo "<br>";

// $pattern2 = "/Nepal/i";
// echo preg_replace($pattern2, "India", $para);


function student_names($students_lists)
{
    foreach($students_lists as $list)
    {
        echo $list;
    }
}

$names = array("Ram", "Hari", "Shyam", "Sita", "Gita");
student_names($names);

?>