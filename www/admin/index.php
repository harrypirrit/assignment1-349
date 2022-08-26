<html>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(strcmp($_GET['currency'], "NZD" ) == 0){
      $NZD = 1;
      $base = 1;
      $converted = $base * $NZD;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "AUD" ) == 0){
      $AUD = 0.89;
      $base = 1;
      $converted = $base * $AUD;
      echo $converted;
    }
    
    if(strcmp($_GET['currency'], "USD" ) == 0){
      $base = 1;
      $USD = 0.62;
      $converted = $base * $USD;

      echo $converted;
      }

    if(strcmp($_GET['currency'], "GBP" ) == 0){
      $base = 1;
      $GBP = 0.52;
      $converted = $base * $GBP;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "KRW" ) == 0){
      $base = 1;
      $KRW = 807.31;
      $converted = $base * $KRW;
      echo $converted;
      }

      ?>
      </html>