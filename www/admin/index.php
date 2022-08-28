<html>
<h1>Currency Admin</h1>
<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

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

      updateDisplay($NZD, $AUD, $USD, $GBP, $KRW)

      ?>

      <?php    
      function updateDisplay($NZD, $AUD, $USD, $GBP, $KRW){
    ?>
    <!-- display each currency -->
    <h3>NZD : $<?php echo $NZD ?></h3>
    <h3>AUD : $<?php echo $AUD ?></h3>
    <h3>USD : $<?php echo $USD ?></h3>
    <h3>GBP : £<?php echo $GBP ?></h3>
    <h3>KRW : ₩ <?php echo $KRW ?></h3>
    <?php
 }
    ?>

    <hr>

    <!-- create form to update currency value -->
    <h2>Update Currency </h2>
    <form action="index.php" method="post">
            <p> Update Currency Value
            <select name="c">
          <option value="NZD" <?php $NZD ?>>New Zealand Dollar</option>
          <option value="AUD" <?php $AUD ?>>Australian Dollar</option>
          <option value="USD" <?php $USD ?>>United States Dollar</option>
          <option value="GBP" <?php $GBP ?>>Great British Pound</option>
          <option value="KRW" <?php $KRW ?>>South Korean Won</option>
        </select>

        <label for="to :">to :</label>
        <input type="number" id="newValue" name="newValue" placeholder="0.00">
        <input type="submit" name="Update" value="Update"></input>
        </form>

        <?php $newValue = $_GET['newValue'];
              $c = $_GET['c'] ?>

      <?php
        if(strcmp($_GET['c'], "NZD" ) == 0){
          $NZD = $newValue;
          echo $NZD;
        }
        if(strcmp($_GET['c'], "AUD" ) == 0){
          $AUD = $newValue;
          echo $AUD;
        }
        if(strcmp($_GET['c'], "USD" ) == 0){
          $USD = $newValue;
          echo $USD;
        }
        if(strcmp($_GET['c'], "GBP" ) == 0){
          $GBP = $newValue;
          echo $GBP;
        }
        if(strcmp($_GET['c'], "KRW" ) == 0){
          $KRW = $newValue;
          echo $KRW;
        }
        
        if($c && $newValue != null){
          updateDisplay($NZD, $AUD, $USD, $GBP, $KRW);
          }

          
          


          ?>
      </html>