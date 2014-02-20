<!--

Chris Hume
Recommenu Web Application

- application used to input restaurant menus

2/8/14

-->



<?php
session_start();
//http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/



//getting restaurant variables from the form.
$menu_section_name = $_POST['add_section_name'];
$_SESSION['HELP'] = $_POST['add_section_name'];
$menu_description = $_POST['add_section_desc'];
$menu_restaurant_name = $_POST['rest_name'];
$menu_restaurant_address = $_POST['rest_address'];
$menu_restaurant_city = $_POST['city_name'];
echo $menu_section_name,"<br>";
echo $menu_description,"<br>";
echo 'here1  ',"<br>";
echo $menu_restaurant_name,"<br>";
echo $menu_restaurant_address,"<br>";
echo $menu_restaurant_city,"<br>";
echo 'here',"<br>";

$pass_on = array(
    $menu_section_name,
    $menu_description,
    $menu_restaurant_name,
    $menu_restaurant_address,
    $menu_restaurant_city
);

//this is the loop for getting the menu items    
foreach($_POST['name'] as $cnt => $qty) {
//$sql = "INSERT INTO products (qty, name) VALUES ('$qty', '".$_POST['name'][$cnt]."');";
// run the query - with mysqli_query or whatever database wrapper you are using
// ...
    //echo $cnt;
    //echo "<br>";
    echo $qty;
    echo " : ";
    echo $_POST['desc'][$cnt];
    echo " : ";
    echo $_POST['price'][$cnt];
    echo "<br>";
    
    array_push($pass_on, $qty, $_POST['desc'][$cnt], $_POST['price'][$cnt]);
    
    //echo $_POST['add_section_name'];
    //echo "<br>";
    //echo $_POST['add_section_desc'];
    //echo "<br>";
    
    //for each of these we need to save.
    
}
//header("Refresh: 3; url=rest_enter.html");
echo '<br /><a href="rest_enter2.php">add another section</a>';
print_r($pass_on);  
$_SESSION['passer'] = $pass_on;
 ?>