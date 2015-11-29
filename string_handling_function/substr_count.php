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
            
            $text = 'This is a test';
            echo strlen($text); // 14

            echo substr_count($text, 'is'); // 2
            echo "<br>";    
            // the string is reduced to 's is a test', so it prints 1
            echo substr_count($text, 'is', 3);
            echo "<br>";
            
            // the text is reduced to 's i', so it prints 0
            echo substr_count($text, 'is', 3, 3);
            echo "<br>";
            
            // generates a warning because 5+10 > 14
            echo substr_count($text, 'is', 5, 10);
            echo "<br>";
            
            // prints only 1, because it doesn't count overlapped substrings
            $text2 = 'gcdgcdgcd';
            echo substr_count($text2, 'gcdgcd');
            
        ?>
    </body>
</html>
