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