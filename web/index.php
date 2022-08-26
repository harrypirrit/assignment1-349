<!DOCTYPE HTML>
<html>
  <head>
    <h1 id="demo"> Currency Converter </h1>
  </head>

  <body>
  <p> <?php $currency = file_get_contents("http://192.168.2.13?currency=NZD");?></p>
  <p> New Zealand Currency: <?php echo "$currency"; ?></p>

  <p id="output"></p>
  <?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Convert'])){
        func();
    }

  function func(){
      $currency = $_POST['currency'];
      $database_host = '192.168.2.12';
      $database_name = 'currencies';
      $database_user = 'user';
      $databse_password = 'root123';

      $pdo_dsn = "mysql:host=$datab_host;dbname=$database_name";

      $pdo = new PDO($pdo_dsn, $database_user, $databse_password);

       $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

       if($currency == "NZD"){
        $NZD = file_get_contents("http://192.168.2.13?currency=NZD");
        $_SESSION['currencies'] = "<p> New Zealand Dollar: $NZD </p>";
        $q = $pdo->query("UPDATE currencies SET defaultCurrency = 'NZD' WHERE userID='User'");
      } else if($currency == "AUD"){
      $AUD = file_get_contents("http://192.168.2.13?currency=AUD");
      $_SESSION['currencies'] = "<p> Australian Dollar: $AUD </p>";
      $q = $pdo->query("UPDATE currencies SET defaultCurrency = 'AUD' WHERE userID='User'");

    } else if($currency == "USD"){
        $USD = file_get_contents("http://192.168.2.13?currency=USD");
        $_SESSION['currencies'] = "<p> United States Dollar: $USD </p>";
        $q = $pdo->query("UPDATE currencies SET defaultCurrency = 'USD' WHERE userID='User'");

    } else if($currency == "GBP"){
        $GBP = file_get_contents("http://192.168.2.13?currency=GBP");
        $_SESSION['currencies'] = "<p> Great British Pound: $GBP </p>";
        $q = $pdo->query("UPDATE currencies SET defaultCurrency = 'GBP' WHERE userID='User'");

    } else if($currency == "KRW"){
        $KRW = file_get_contents("http://192.168.2.13?currency=KRW");
        $_SESSION['currencies'] = "<p> South Korean Won: $KRW </p>";
        $q = $pdo->query("UPDATE currencies SET defaultCurrency = 'KRW' WHERE userID='User'");
    }
}

?>

<?php
    $database_host = '192.168.2.12';
    $database_name = 'currencies';
    $database_user = 'user';
    $databse_password = 'root123';

    $pdo_dsn = "mysql:host=$datab_host;dbname=$database_name";

    $pdo = new PDO($pdo_dsn, $database_user, $databse_password);


    $query = $pdo->query("SELECT * FROM currencies");

    while($row = $query->fetch()){
        $default_currency = $row['defaultCurrency'];

        if($default_currency == $currency){
            header('refresh: 0;');
        }
        }

        $_SESSION['currency'] = $default_currency;

        ?>
        
        <?php

        function getSelectSession($val, $val2)
        {
        if ($_SESSION[$val] == $val2) {
        echo "selected";
        }
        }
        ?>

        <form action="index.php" method="post">

            <p> Convert From NZD to:
            <select name="timezone">
          <option value="AUD" <?php getSelectSession("time", "AUD"); ?>>Australian Dollar</option>
          <option value="USD" <?php getSelectSession("time", "USD"); ?>>United States Dollar</option>
          <option value="GBP" <?php getSelectSession("time", "GBP"); ?>>Great British Pound</option>
          <option value="KRW" <?php getSelectSession("time", "KRW"); ?>>South Korean Won</option>
        </select>

        <input type="submit" name="Convert" value="Convert"></input>

        </form>


</body>
</html>
    