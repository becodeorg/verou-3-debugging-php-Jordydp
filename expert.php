<?php


// declare(strict_types=1);

// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";
//Solution: x was not given to the function as a parameter
function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
};

new_exercise(2);

// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
// Solution: an array's first item starts at 0 not 1!!!!!

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);

// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
//Solution: WRONG QUOTES were used
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)
//SOlUTION:
//! --/In order to be able to directly modify array elements within the loop precede $value with &. In that case the value will be assigned by/--!

foreach($week as &$day)
{
    $day = substr($day, 0, -3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The result should be: "Copyright ?? <current year> - BeCode"
//Solution deleted int on line 63 + adding print @68
function copyright($year)
{
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date("Y"));

new_exercise(6);
// === Exercise 6 ===
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array
//solution 1: $arr = range("a","z") don't need for loop

$arr = [];
$letter =range("a","z");
    for ($i = 0 ; $i < count($letter)  ; $i++)
    {
        array_push($arr, $letter[$i]);
    }

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

new_exercise(7);

// === Exercise 7 ===
// Have the result of the function say: "Welcome John Smith" or "No access"
// Depending on the given information.
//solution || = or and && = and
function login(string $email, string $password)
{
    if($email == 'john@example.be' && $password == 'pocahontas')
    {
        echo "Welcome John";
        return " Smith <br>";
    }else
    {
    return "No access <br>" ;
    }
}
/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */


