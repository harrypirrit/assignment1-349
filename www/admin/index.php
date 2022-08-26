<?php
    if(strcmp($_GET['currency'], "NZD" ) == 0){
      $NZD = 1;
      $converted = 1 * $NZD;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "AUD" ) == 0){
      $aud = 0.89;
      $converted = 1 * $aud;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "USD" ) == 0){
      $USD = 0.62;
      $converted = 1 * $USD;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "GBP" ) == 0){
      $GBP = 0.52;
      $converted = 1 * $GBP;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "KRW" ) == 0){
      $KRW = 807.31;
      $converted = 1 * $KRW;
      echo $converted;
      }
    else {
      $NZD = 1;
      $converted = 1 * $NZD;
      echo $converted;
      }

      ?>