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
            $meals = array('breakfast' => array('Walnut Bun','Coffee'),
               'lunch'     => array('Cashew Nuts', 'White Mushrooms'),
               'snack'     => array('Dried Mulberries','Salted Sesame Crab'));

            $lunches = array( array('Chicken','Eggplant','Rice'),
                              array('Beef','Scallions','Noodles'),
                              array('Eggplant','Tofu'));

            $flavors = array('Japanese' => array('hot' => 'wasabi',
                                                 'salty' => 'soy sauce'),
                             'Chinese'  => array('hot' => 'mustard',
                                                 'pepper-salty' => 'prickly ash'));
            
            
            echo"<pre>";
            print_r($meals);
            echo"<pre>";
            
            echo"<pre>";
            print_r($lunches);
            echo"<pre>";
            
            echo"<pre>";
            print_r($flavors);
            echo"<pre>";
        ?>
    </body>
</html>
