echo " ------------------ FUNCTIONS --------------------------";

function hello()
{
echo "Hello World";
}

hello();



echo " ----------------- VARIABLES and FUNCTIONS ----------------"

function add()
{
global $c;
$a = 1;
$b = 2;
$sum = $a + $b + $c;
echo $sum;
}

$c = 3;
add();


echo "-------------- ARGUMENTS ----------------------------------";

function multiply($num1, $num2)
{
$result = $num1 * $num2;
echo $result;
}

multiply(3, 2);

echo "<br>";

multiply(5, 5);


echo " -----------------------Return SINGLE Value-------------------";

function uppercase($name1)
{

$result1 = strtoupper($name1);
return $result1;
}

echo uppercase("Smith");


echo " -------------- Return MULTIPLE Values -------------------";

function calculate($num1, $num2)
{
$add = $num1 + $num2;
$subtract = $num1 - $num2;
return [$add, $subtract];
}

$results = calculate(3, 2);

echo $results[0];
echo "<br>";
echo $results[1];