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