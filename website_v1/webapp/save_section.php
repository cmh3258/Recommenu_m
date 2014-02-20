<!--

Chris Hume
Recommenu Web Application

- application used to input restaurant menus

2/8/14

-->



<?php
session_start();
//http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/

$menu_main = $_SESSION['new_menu'];
print_r($pass_t);

//getting restaurant variables from the form.
$menu_section_name = $_POST['add_section_name'];
$menu_description = $_POST['add_section_desc'];

echo $menu_section_name,"<br>";
echo $menu_description,"<br>";

$section_array = array(
    $menu_section_name,
    $menu_description
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
    
    $item_array = array($qty, $_POST['desc'][$cnt], $_POST['price'][$cnt]);
    array_push($section_array, $item_array);
    
    //echo $_POST['add_section_name'];
    //echo "<br>";
    //echo $_POST['add_section_desc'];
    //echo "<br>";
    
    //for each of these we need to save.
    
}
//header("Refresh: 3; url=rest_enter.html");
echo '<br /><a href="enter_section.php">add another section</a>';

array_push($menu_main, $section_array);

print_r($menu_main);  
$_SESSION['new_menu'] = $menu_main;
 $_SESSION['is_first'] = FALSE;
 ?>