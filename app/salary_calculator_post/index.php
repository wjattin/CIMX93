<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Retro Salary Calculator</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Salary Calculator</h1>
    <?php
    $hourlyRate = 0.00; //FL min wage
    $hoursWorked = 0;
    $rateMultiplier = 1.5;
    $commissionRate = 0.0;
    $grossSales = 0.00;
    $bonus = 0;

        if(isset($_POST['hourly_rate'])){
          $hourlyRate = $_POST['hourly_rate'];
        }
        if(isset($_POST['hours_worked'])){
          $hoursWorked = $_POST['hours_worked'];
        }
        if(isset($_POST['rate_multiplier'])){
          $rateMultiplier = $_POST['rate_multiplier'];
        }
        if(isset($_POST['commission_rate'])){
          $commissionRate = $_POST['commission_rate'];
        }
        if(isset($_POST['gross_sales'])){
          $grossSales = $_POST['gross_sales'];
        }

    ?>
    <form class="" action="index.php" method="post">
      <p>
      <label for="hourly_rate">Hourly Rate:</label>
      <input type="text" name="hourly_rate" value="<?=$hourlyRate?>">
      </p>
      <p>
      <label for="hours_worked">Hours Worked:</label>
      <input type="text" name="hours_worked" value="<?=$hoursWorked?>">
      </p>
      <p>
      <label for="rate_multiplier">Rate Multiplier:</label>

      <select class="" name="rate_multiplier">
        <option value="<?=$rateMultiplier?>" selected><?=$rateMultiplier?></option>
        <option value="1.0">1.0</option>
        <option value="1.5">1.5</option>
        <option value="2.0">2.0</option>

      </select>
      </p>
      <p>
      <label for="commission_rate">Commission Rate:</label>
      <input type="text" name="commission_rate" value="<?=$commissionRate?>">
      </p>
      <p>
      <label for="gross_sales">Gross Sales:</label>
      <input type="text" name="gross_sales" value="<?=$grossSales?>">
      </p>
      <p class="submit">
      <input class="btn" type="submit" name="submit" value="Calculate">
      </p>
    </form>
    <?php

    $holidayRate = $hourlyRate * $rateMultiplier;

    $holidayPay = $holidayRate * $hoursWorked;
    // we only pay commission when you work 20 hours or more
    $commissionMessage = "";
    if($hoursWorked >= 20){
      $commission = $grossSales * $commissionRate;
    } else {
      $commission = 0;
      $commissionMessage = "<small>Not enough hours You need to work 20 hours or more</small>";
    }

    $salary = $holidayPay + $commission;
    // let's give this person a bonus
    if($grossSales >= 30000) {
      // we'll just double the commission
      $bonus = $commission;
      $salary += $bonus;
    }
    ?>
    <hr>
    <br>
    <!-- Combine html and php -->
    <div class="totals">
      <h2>Totals</h2>
      <p><strong>Holiday Pay :</strong><span>$<?=$holidayPay;  ?></span> </p>
      <p><strong>Commission:</strong> <span>$<?=$commission?> <?=$commissionMessage?></span></p>
      <?php if($bonus > 0):?>
      <p><strong>Bonus:</strong> <span>$<?=$bonus?> </span></p>
    <?php endif; ?>
      <p><strong>Salary :</strong> <span>$<?=$salary?></span></p> <!-- ?= shotcut for print or echo -->
      <!-- anything here is a comment -->


    </div>

  </body>
</html>


