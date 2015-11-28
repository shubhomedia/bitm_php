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
            $array = array('lastname', 'email', 'phone');
            $comma_separated = implode(",", $array);

            echo $comma_separated; // lastname,email,phone
        ?>
    </body>
</html>
