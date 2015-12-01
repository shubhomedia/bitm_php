<!DOCTYPE html>
<!--
    MD.Owes Quruny Shubho
    http://shubho.info
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $people = array("Shubho", "Touhid", "Anwar", "Owes");
            print_r($people);
            echo"<br>";
            if (in_array("Shubho", $people))
              {
              echo "Match found";
              }
            else
              {
              echo "Match not found";
              }
            echo"<br>";
            
            $people2 = array("Shubho", "Touhid", "Anwar", "Owes");
            print_r($people2);
            echo"<br>";
            if (in_array("Rony", $people))
              {
              echo "Match found";
              }
            else
              {
              echo "Match not found";
              }
        ?>
    </body>
</html>
