<!DOCTYPE html>
<html>
  <head>
    <title>Rectangle</title>
  </head>
  <body>
    <h2>Rectangle:</h2>
    <?php
      
      function printRect($l, $w) {
        for($i=1;$i<=$l;$i++){
          for($j=1;$j<=$w;$j++){
            if($i==1 || $i==$l){
              echo "*";
            }else if($j==1 || $j==$w) {
              echo "*";
            } else {
              echo "&nbsp;&nbsp;";
            }
          }
          echo '</br>';
        }
      }

      printRect(10, 50);
      printRect(30, 90);
      
        
    ?>
<br>
    <a href="./calcinput.php">Go to Calculator</a>
    <br>
    <a href="./index.php"> Go to Multiplication Table</a>
  </body>
</html>
