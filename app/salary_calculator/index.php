<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Salary Calculator</title>
  </head>
  <body>
    <h1>Salary Calculator</h1>


    <?php
    $hourlyRate = 8.46; //FL min wage
    $hoursWorked = 40;
    $rateMultiplier = 1.5;
    $commissionRate = 0.10;
    $grossSales = 400.00;
    $bonus = 0;

    $holidayRate = $hourlyRate * $rateMultiplier;
    print("Holiday rate: $holidayRate");
    print("<br>");
    $holidayPay = $holidayRate * $hoursWorked;
    print("Holiday Pay: $holidayPay");
    print("<br>");
    $commission = $grossSales * $commissionRate;
    print("Commission: $commission");
    print("<br>");
    $salary = $holidayPay + $commission;
    print("Salary: $salary");
    ?>
    <hr>
    <br>
    <!-- Combine html and php -->
    <strong>Holiday Pay :</strong> <?php print($holidayPay);  ?><br>
    <strong>Salary :</strong> <?=$salary?><br> <!-- ?= shotcut for print or echo -->
    <!-- anything here is a comment -->

  </body>
</html>


