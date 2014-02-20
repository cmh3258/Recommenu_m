<?php
// page2.php

session_start();

echo 'Welcome to page #2<br />';
/*
echo "here: ",$_SESSION['restaurant_name']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);
*/
/*
$rest_name = $_POST['fname'];
$city = $_POST['lname'];
 * 
 */
$address = $_POST['address'];
$fsid = $_POST['fsid'];
/*
echo $rest_name,"<br>";
echo $city,"<br>";
 * 
 */
echo "<div id=\"sidebar\">";
echo "<p>",$address,"</p><br>";
echo $fsid,"<br>";
echo $_SESSION['restaurant_fsid'];
echo $_SESSION['restaurant_name'];
echo "</div>";

$menu = array( $rest_name,  $city, $address, $fsid );
$_SESSION['new_menu'] = $menu;



// You may want to use SID here, like we did in page1.php
echo '<br /><a href="enter_section.php">Next</a>';
?>