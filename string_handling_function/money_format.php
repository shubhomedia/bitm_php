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

            // let's print the international format for the en_US locale
            setlocale(LC_MONETARY, 'en_US');
            echo money_format('%i', $number) .  "<br>";
            // USD 1,234.56

            // Italian national format with 2 decimals`
            setlocale(LC_MONETARY, 'it_IT');
            echo money_format('%.2n', $number) . "<br>";
            // Eu 1.234,56

            // Using a negative number
            $number2 = -1234.5672;

            // US national format, using () for negative numbers
            // and 10 digits for left precision
            setlocale(LC_MONETARY, 'en_US');
            echo money_format('%(#10n', $number2) . "<br>";
            // ($        1,234.57)
        ?>
    </body>
</html>
