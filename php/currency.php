<?php
$amount=htmlspecialchars($_POST['amount']);
$currency=htmlspecialchars($_POST['currency']);

if ($currency=="US Dollar") {
    $amt=$amount.$currency."=".round(($amount*63.495763), 2)."INR";
} elseif ($currency=="Euro") {
    $amt=$amount.$currency."=".round(($amount*72.343691), 2)."INR";
} elseif ($currency=="British Pound") {
    $amt=$amount.$currency."=".round(($amount*100.926470), 2)."INR";
} elseif ($currency=="Australian Dollar") {
    $amt=$amount.$currency."=".round(($amount*49.470005), 2)."INR";
} elseif ($currency=="Canadian Dollar") {
    $amt=$amount.$currency."=".round(($amount*51.840784), 2)."INR";
} elseif ($currency=="Singapore Dollar") {
    $amt=$amount.$currency."=".round(($amount*47.714950), 2)."INR";
} elseif ($currency=="Swiss Franc") {
    $amt=$amount.$currency."=".round(($amount*69.188719), 2)."INR";
} elseif ($currency=="Malaysian Ringgit") {
    $amt=$amount.$currency."=".round(($amount*17.020105), 2)."INR";
} elseif ($currency=="Japanese Yen") {
    $amt=$amount.$currency."=".round(($amount*0.517365), 2)."INR";
} elseif ($currency=="Chinese Yuan Renminbi") {
    $amt=$amount.$currency."=".round(($amount*10.254612), 2)."INR";
}

echo $amt;
/*2.Create an application for currency calculator
These are the available currencies,
Currencies
● US Dollar
● Euro
● British Pound
● Australian Dollar
● Canadian Dollar
● Singapore Dollar
● Swiss Franc
● Malaysian Ringgit
● Japanese Yen
● Chinese Yuan Renminbi
Checklist
❖ There should be a drop down showing all the above currencies (By default no one
should be selected)
❖ There should be a text field to enter the amount (Accept only numbers)
❖ Both fields should be mandatory
❖ There should be a submit button and cancel button
❖ On clicking Cancel all the fields to be reset to default
❖
❖ On submitting, convert the currency to INR, round the result to 2 digital place (Refer the
rates below), show the results in the same page
❖ For eg: If I select US Dollar and amount entered is 5, Result should be like 5 US Dollar =
317.55 INR
Rates
● US Dollar - 63.495763

● Euro - 72.343691
● British Pound - 100.926470
● Australian Dollar - 49.470005
● Canadian Dollar - 51.840784
● Singapore Dollar - 47.714950
● Swiss Franc - 69.188719
● Malaysian Ringgit - 17.020105
● Japanese Yen - 0.517365
● Chinese Yuan Renminbi - 10.254612

Use html5 validations, php-side validations, ajax for showing the results in the same page*/
