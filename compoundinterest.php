<!DOCTYPE html>
<html>
<head>
<h3><title>Calculate Compound Interest</title></h3>
</head>
  <body bgcolor="lemon">
    <div style="width:300px;margin:0 auto;border: 20px solid teal; padding:50px">

  <font color="darkred">

    <?php
    $principal = 0;
    $rate = 0;
    $years = 10;
    $comperiod = 1;
    ?>

    <?php echo "<form action='calculatorcom.php' method='post'>" ?>
    <p>Principal, #:<?php echo "<input type='number' name='principal' value= ".$principal." required/>" ?><br><br></p>
      Rate, %:<?php echo "<input type='number' step='0.01' name='rate' value= ".$rate." />" ?><br><br>
      Compounded Periods per annum :<?php echo "<input type='number'  name='n' value= ".$comperiod." />" ?><br><br>
      How many years?:<?php echo "<input type='number'  name='No of years' value= ".$years." min='1' required/>" ?><br><br>
      <p> <input type="submit" value="Calculated Compound Interest"/> </p>
    </form> </body> </html>

    <?php
    if (isset($_POST["principal"])){$principal=$_POST["principal"];}
    if (isset($_POST["rate"])){$rate=$_POST["rate"];}
    if (isset($_POST["comperiod"])){$years=$_POST["comperiod"];}
    if (isset($_POST["years"])){$n=$_POST["years"];}
    if (isset($_POST["principal"]))
       {echo "After ". $years. " years, Calculated interest is #". compound_interest($principal,$years,$rate,$comperiod)."\n";}

        function compound_interest($principal,$years,$rate=10,$comperiod=1){
        $accumulated =0;
        if ($years > 1){
          $accumulated=compound_interest($principal,$years-1,$rate,$comperiod);}
        $accumulated += $principal;
        $accumulated = $accumulated * pow(1 + $rate/(100 * $comperiod),$comperiod);
        return $accumulated;}
      ?>
    </div>
