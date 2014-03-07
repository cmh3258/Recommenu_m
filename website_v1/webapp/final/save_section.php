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

//getting restaurant variables from the form.
$menu_section_name = $_POST['add_section_name'];
$menu_description = $_POST['add_section_desc'];

$main_menu = $_SESSION['main_menu'];
$sections_main = $_SESSION['sections_main'];

//$sections_main = array();
$full_entre_array = array();
$counter = 0;

echo $menu_section_name,"...<br>";
echo $menu_description,"<br>";

$section_array = array(
    "name" => $menu_section_name,
    "entries" => array()
);
$temp_array = array();

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
    
    //$item_array = array($qty, $_POST['desc'][$cnt], $_POST['price'][$cnt]);
    
    $temp_entrey = array(
        "name" => $qty,
        "description" => $_POST['desc'][$cnt],
        "price" => $_POST['price'][$cnt]
    );
    
    array_push($full_entre_array, $temp_entrey);
    
    //echo $_POST['add_section_name'];
    //echo "<br>";
    //echo $_POST['add_section_desc'];
    //echo "<br>";
    
    //for each of these we need to save.
    
}

//header("Refresh: 3; url=rest_enter.html");
echo"<br>printing full_entre:<br>";
        foreach ($full_entre_array as $i => $value){
            if(is_array($value)){
                echo '<hr>';
                 echo "<h3>new section:</h3>";
                foreach ($value as $j => $next){
                   
                    if(is_array($next)){
                        //echo '<br>';
                        echo '<h3>new dish:</h3>';
                        foreach ($next as $k => $last){
                            echo '<h5>',$last,'</h5>';
                        }
                    }
                    else{
                        echo '<h4>',$next,'</h4>';                 
                    }
                }
            }
            else{
                echo '<h2>',$value,'</h2>';
            }
        }

        $new_section = array(
            "name" => $menu_section_name,
            "entries" => $full_entre_array
        );
        
array_push($sections_main, $new_section);
echo json_encode($sections_main);

        
echo '<br /><a href="enter_section.php">add another section</a><br>';

$restaurant_fsid = $_SESSION['restaurant_fsid'];
        $restaurant_name = $_SESSION['restaurant_name'];
        $_SESSION['restaurant_fsid'] = $restaurant_fsid;
        $_SESSION['restaurant_name'] = $restaurant_name;

 $_SESSION['new_menu'] = $menu_main;
 $_SESSION['is_first'] = FALSE;
 $_SESSION['main_menu'] = $main_menu;
 $_SESSION['sections_main'] = $sections_main;

 ?>