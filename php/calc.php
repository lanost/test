<?php
$num1=htmlspecialchars($_POST['number']);
$num2=htmlspecialchars($_POST['numberr']);
$oper=htmlspecialchars($_POST['operation']);

if ($oper=="add") {
    $sum=$num1+$num2;
    echo $sum;
} elseif ($oper=="sub") {
    $sum=$num1-$num2;
    echo $sum;
} elseif ($oper=="mul") {
    $sum=$num1*$num2;
    echo $sum;
} elseif ($oper=="div") {
    $sum=$num1/$num2;
    echo $sum;
}
/*1. Create an application for an online calculator
Checklist
● Create two text fields, only numbers should be allowed, both fields are mandatory
● Provide options to add,multiply,subtract,divide (as radio buttons, by default add should
be checked)
● There should be a submit button and cancel button
● On submitting show the results in same page somewhere below the buttons
● On clicking Cancel all the fields to be reset to default
Use html5 validations, php-side validations, ajax for showing the results in the same page
http://www.w3schools.com/html/html_form_attributes.asp*/
