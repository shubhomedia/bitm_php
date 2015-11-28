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
            $code = "A 'quote' is <b>bold</b>";

            // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
            echo htmlentities($code);
            echo htmlentities($code, ENT_QUOTES);

        ?>
    </body>
</html>
