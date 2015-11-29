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
            $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
            echo strip_tags($text);
            echo "<br>";

            // Allow <p> and <a>
            echo strip_tags($text, '<p><a>');
        ?>
    </body>
</html>
