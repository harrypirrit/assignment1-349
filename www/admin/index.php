<html>
<h1>Currency Admin</h1>
<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

   // connect to DB
    $database_host = '192.168.2.12';
    $database_name = 'currencies';
    $database_user = 'user';
    $databse_password = 'root123';

    $pdo_dsn = "mysql:host=$database_host;dbname=$database_name";

    $pdo = new PDO($pdo_dsn, $database_user, $databse_password);

  // get the updateCount
    $NZDcount = $pdo->query("SELECT counts from counts WHERE ");



    // set the base and currency values 
    $base = 1;
    $NZD = 1;
    $AUD = 0.89;
    $USD = 0.62;
    $GBP = 0.52;
    $KRW = 807.31;

    // conditionals for each POSTed currency
    if(strcmp($_GET['currency'], "NZD" ) == 0){
      $converted = $base * $NZD;
      // $pdo->query("UPDATE 
      echo $converted;
      }

    if(strcmp($_GET['currency'], "AUD" ) == 0){
      $converted = $base * $AUD;
      echo $converted;
    }
    
    if(strcmp($_GET['currency'], "USD" ) == 0){
      $converted = $base * $USD;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "GBP" ) == 0){
      $converted = $base * $GBP;
      echo $converted;
      }

    if(strcmp($_GET['currency'], "KRW" ) == 0){
      $converted = $base * $KRW;
      echo $converted;
      }

          ?>
      </html>