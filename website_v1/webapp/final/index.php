<?php
// page2.php

session_start();

echo 'Welcome to Yo menu entering<br />';


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

    <h2>Instructions: make sure you follow them</h2>
    <ul>
        <li>You don't have to enter city or address</li>
        <li>Make sure you hit the button 'submit dish', or the dish will not be saved</li>
        <li>Make sure you hit the button 'add section', or the section will not be saved</li>
        <li>Make sure you hit the button 'submit menu', or the menu will not be saved</li>
        <li></li>
    </ul>
    <h3>If there are issues contact Mr. Webmaster 1000 to fix it</h3>
        
    
    <form id="section" action="get_restaurant.php" method="post">
        <fieldset>
            <input type="hidden" name="ajax" value="true" />
            <!--
            <p><label class="field" for="Name">Restaurant Name: </label><input type="text" name="fname" placeholder="eg. Starbucks, Chipotle, Taste of Texas" id="fname" class="textinput" value="" /></p>
            <p><label class="field" for="Name">City: </label><input type="text" name="lname" placeholder="eg. Austin, Boston" id="lname" class="textinput" value="" /></p>
            <p><label class="field" for="Name">Address: </label><input type="text" name="address" placeholder="eg.12511 Road rd" id="address" class="textinput" value="" /></p>       
            
            -->
            <p><label class="field" for="Name">Foursquare Id: </label><input type="text" name="fid" placeholder="eg. #" id="fid" class="textinput" value="" /></p>
            <input type="submit" id="SendButton" name="submit" class="textinput" value="Submit" />
            
        </fieldset>
    </form>	

   
    
</body>
</html>