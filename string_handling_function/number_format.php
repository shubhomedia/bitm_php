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
            $number = 1234.56;

            // english notation (default)
            $english_format_number = number_format($number);
            // 1,235
            
            echo $english_format_number;
            echo "<br>";

            // French notation
            $nombre_format_francais = number_format($number, 2, ',', ' ');
            // 1 234,56
            echo $nombre_format_francais;
            echo "<br>";

            $number2 = 1234.5678;

            // english notation without thousands separator
            $english_format_number2 = number_format($number2, 2, '.', '');
            // 1234.57
            
            echo $english_format_number2;
            echo "<br>";
        ?>
    </body>
</html>
