<?php
// page2.php

session_start();

echo 'Welcome to last step<br />';
/*
echo "here: ",$_SESSION['restaurant_name']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);
*/

$menu_final = $_SESSION['new_menu'];

print_r($menu_final);
echo '<br><br>';


//going through array and printing the entered menu
foreach ($menu_final as $i => $value){
    if(is_array($value)){
        foreach ($value as $j => $next){
            if(is_array($next)){
                echo '<br>';
                foreach ($next as $k => $last){
                    echo $last,'<br>';
                }
            }
            else{
                echo $next,'<br>';                 
            }
        
    
        }
        
    }
    else{
        echo $value,'<br>';
    }
    
}

// You may want to use SID here, like we did in page1.php
echo '<br /><a href="enter_section.php"></a>';
?>