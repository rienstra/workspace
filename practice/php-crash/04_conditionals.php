<?php

/* --- Operators ---

<   less than
>   greater than
<=  less then or equal to
>=  greater than or equal to
==  equal to
=== identical to
!=  not equal to
!== not identical to

--- If Statements ---

syntax:

if (condition) {
    code to be executed if it's true
}
*/

$age = 21;

if ($age >= 18) {
    echo "You are old enough to vote.";
} else {
    echo "Sorry, you're not old enough to vote.";
}

echo "<br>";

$t = date("H");
echo $t;
