<?php
// page2.php

session_start();

echo '<h1>Welcome to the Results</h1><br />';
/*
echo "here: ",$_SESSION['restaurant_name']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);
*/

$menu_final = $_SESSION['new_menu'];

//main ingredients for success
$sections_main = $_SESSION['sections_main'];
$restaurant_fsid = $_SESSION['restaurant_fsid'];
$restaurant_name = $_SESSION['restaurant_name'];

$news = array(
    "name" => $restaurant_name,
    "id" => (int)$restaurant_fsid,
    "menus" => array(
        array(
            "name" => "Main Menu",
            "sections" => $sections_main
        )
    )
);


echo  "<br>sections_array: ".json_encode($news, JSON_PRETTY_PRINT);
$json = json_encode(array(
     "name" => "venue Name",
        "menus" => array(array(
            "name" => "foos menu",
            "sections" => array(array(
                "name" => "ample section",
                "entries" => array(array(
                    "name" => "tacos",
                    "description" => "super delicious tacos",
                    "price" => 1.99
                )
            ))
                )
        )
            )        
        
     )
);

$full_menu = json_encode($news);
/*
'{"name""venue name", "menus":[{"name":"foos menus", 
        "sections":[{"name":"sample section", 
            "entries":[{"name":"taco", "description":"super delicious taco", "price":1.99}]}]}]}'
*/
$ch = curl_init('http://glacial-ravine-3577.herokuapp.com/api/v1/venue/');   
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $full_menu);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($full_menu))                                                                       
);                                                                                                                   
 
$result = curl_exec($ch);
echo '<br><br>results: '.$result;
echo '<br><br><h3>I am Done!!</h3>';
/*
$rest = substr($complete_string, 0, -1);
$complete_string = $rest."]}]}]}'";
echo $complete_string;
$output = null;
$return = null;

*/

//$complete_string = '\"hello\"';
/*
exec("python save_to_db.py $json", $output, $return);
$test = `python save_to_db.py`;
echo 'UEJK: '.$test;
echo "<br>finished<br>";

foreach ($output as $i => $value){
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
                        echo '<h4> hedre:',$next,'</h4>';
                        //$str = $str.$next."";
                    }
                }
            }
            else{
                echo 'hereee:<h2>',$value,'</h2>';
               
            }
        }
echo"<br>";
echo "o1ut: ",$output,"<br>";
echo "out: ",$return,"<br>";


echo "2: ",$return,"<br>";
$restaurant_name = $output[0];
$restaurant_fsid = $output[1];
        
 * 
 */
// You may want to use SID here, like we did in page1.php
echo '<br /><a href="enter_section.php"></a>';



?>