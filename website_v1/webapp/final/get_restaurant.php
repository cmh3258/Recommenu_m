<?php
// page2.php

session_start();

/*
echo "here: ",$_SESSION['restaurant_name']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);
*/

$fsid = $_POST['fid'];

//echo 'Welcome to page #2<br />';
    
$output = null;
$return = null;
//echo $fsid;
exec("python get_restaurant_name.py $fsid", $output, $return);
//echo "<br>finished<br>";
//echo "1: ",$output,"<br>";
//echo "2: ",$return,"<br>";
$restaurant_fsid = $output[0];
$restaurant_name = $output[1];

/*
$main_menu = array(
    "name" => $restaurant_fsid,
    "id" => $restaurant_name,
    "menus" => array(
        array(
            "name" => "Menu Name",
            "sections" => array(
                array(
                )
            )
        )
    )
);
 * 
 */

$_SESSION['restaurant_fsid'] = $restaurant_fsid;
$_SESSION['restaurant_name'] = $restaurant_name;
//$_SESSION['main_menu'] = $main_menu;

//making the array for the restaurant
$rest_array = array(
    "name" => $restaurant_name,
    "id" => $restaurant_fsid
);
$_SESSION['rest_array'] = $rest_array;
// You may want to use SID here, like we did in page1.php

?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <!DOCTYPE html>
<head>
    
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> 
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <title>Recommenu - Recommendations for individual food items</title>
    <meta name="keywords" content="Mobile App, Recommenu, Menu, Restaurant" />
    <meta name="description" content="A mobile app that allows you to never eat a bad meal again. Users can view recommendations and 
          ratings from friends, food bloggers, chefs and celebrities." />
    <meta name="revised" content="Designer: Katie Eldredge, Chris Hume. Coder: Chris Hume, 11/14/13" />
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
   
 <!--   <link  type="text/css" rel="stylesheet" href="stylesheet2_mobile.css" media="only screen and (max-device-width: 320px)" /> 
    -- <link type="text/css" rel="stylesheet" href="flexslider/flexslider.css" media="all" />
-->
    <link type="text/css" rel="stylesheet" href="stylesheet.css" media="all" />
    
    
</head>
<body>

    
    
    <form id="section" action="enter_section.php" method="post">
        <fieldset>
            <input type="hidden" name="ajax" value="true" />
            
            
            <?php
                echo '<p><label class="field" for="Name">restaurant id: </label>', $restaurant_name,'</p><br>';
                echo '<p><label class="field" for="Name">restaurant name: </label>', $restaurant_fsid, '</p>';
                 $_SESSION['is_first'] = TRUE;
            ?>
            <!--<p><label class="field" for="Name">Restaurant Name: </label><input type="text" name="fname" placeholder="eg. Starbucks, Chipotle, Taste of Texas" id="fname" class="textinput" value="" /></p>-->
            <p><label class="field" for="Name">City: </label><input type="text" name="lname" placeholder="eg. Austin, Boston" id="lname" class="textinput" value="" /></p>
            <p><label class="field" for="Name">Address: </label><input type="text" name="address" placeholder="eg.12511 Road rd" id="address" class="textinput" value="" /></p>       
            <!--<p><label class="field" for="Name">Foursquare Id: </label><input type="text" name="fsid" placeholder="eg.12511 Road rd" id="fsid" class="textinput" value="" /></p>-->       
            
            <input type="submit" id="SendButton" name="submit" class="textinput" value="Submit" />
            
        </fieldset>
    </form>	

   
    
</body>
</html>