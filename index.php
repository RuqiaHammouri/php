<!-- 1 -- Write a function to calculate the factorial of a number (non-negative integer) -->
<?php
function factorial($number)
{
    if ($number == 0) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    };
};
?>

<!-- 2-- Write a function to reverse a string -->
<?php
function reverse($string)
{
    return strrev($string);
}
echo reverse("helloworld")
?>

<!-- 3 --  Write a PHP script to that inserts a new item in an array in any position -->
<?php
$name = array("ruqaia", "radi");
array_push($name, "hammouri");
print_r($name);
?>

<!-- 4 --  Write a PHP script to sort an array using case-insensitive natural ordering -->
<?php
$roro = array("r15", "R10", "r1", "R22", "r2");
natcasesort($roro);
echo "Natural order case insensitve: ";
print_r($roro);
?>

<!-- 5 -- Write a PHP script to check the largest number among three integers -->
<?php
function largest($x, $y, $z)
{
    $max = $x;
    if ($y >  $x) {
        $max = $y;
    };
    if ($z > $x) {
        $max = $z;
    };
    return $max;
}
print_r(largest(200, 500, 10))
?>

<!-- 6-- Write a PHP script to see if a year is a leap year or not -->
<?php
function leap($year)
{
    if ($year % 4 ===  0) {
        print_r("is a leap year ");
    } else {
        print_r("is NOT a leap year ");
    }
}
print_r(leap(2020))
?>

<!--7-- Write a PHP script using for loop to add all the integers between 0 and 30 and display the total -->
<?php
function add($number)
{
    $total = 0;
    for ($i = $number; $i <= 30; $i++) {
        $total += $number;
    }
    return $total;
}
// print_r(add(30))
?>

<!-- 9 -- Write a PHP script that display 1-2-3-4-5-6-7-8-9-10 on one line, there will not be a hyphen in the starting anf ending position -->
<?php
for ($x = 1; $x <= 10; $x++) {
    if ($x !== 1) {
        print_r("-$x");
    } else {
        print_r("$x");
    }
}
?>

<!-- 10-- Write a PHP script to print letters from 'a' to 'z' -->
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
    echo chr($x);

?>