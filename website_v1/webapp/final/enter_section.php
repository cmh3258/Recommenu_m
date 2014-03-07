<?php session_start(); ?>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <!--
    
    Script from: 
    http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/
    
    -->
    <script>
        //alert("New window");
        
        var rowNum = 0;
        function addRow(frm) {
            rowNum ++;
            var row = '<p id="rowNum'+rowNum+
                /*
                '">Menu Section Name <input type="text" name="fname[]" value"'
                +frm.add_name.value+
                '">Description of section <input type="text" name="lname[]" value"'  
                +frm.add_name.value+
                 */
                '">Item name: <input type="text" name="name[]" value="'
                +frm.add_name.value+
                '">Description: <input type="text" name="desc[]" value="'
                +frm.add_desc.value+
                '">Price: <input type="text" name="price[]" value="'
                +frm.add_price.value+
                '"><input type="button" value="Remove" onclick="removeRow('+rowNum+');"></p>';
            
            jQuery('#itemRows').append(row);
            /*frm.add_qty.value = '';*/
            //frm.add_section_name.value= '';
            //frm.add_section_desc.value= '';
            frm.add_name.value = '';
            frm.add_desc.value= '';
            frm.add_price.value= '';
        }
        
        function removeRow(rnum) {
            jQuery('#rowNum'+rnum).remove();
        }
        /*
        var sectionNum=0;
        function addSection(frm){
            sectionNum++;
            var row = '<p id="rowNum'+rowNum+
                '">Menu Section Name <input type="text" name="section_name[]" value"'
                +frm.add_name.value+
                '">Description of section <input type="text" name="section_desc[]" value"'
                +frm.add_name.value+
                '">Item name: <input type="text" name="name[]" value="'
                +frm.add_name.value+
                '">Description: <input type="text" name="desc[]" value="'
                +frm.add_desc.value+
                '">Price: <input type="text" name="price[]" value="'
                +frm.add_price.value+
                '"><input onclick="addRow(this.form);" type="button" value="Submit Dish & Add another Dish" /></p>';
            jQuery('#sectionNew').append(row); 
        }*/
    </script>
    <!--
    <script>
    $(document).ready(function()
		
		{
		
		//Store the URL value in a variable
		var client_id = "YZVWMVDV1AFEHQ5N5DX4KFLCSVPXEC1L0KUQI45NQTF3IPXT"
                var client_secret="2GA3BI5S4Z10ONRUJRWA40OTYDED3LAGCUAXJDBBEUNR4JJN"
                var callback=''
                
                //var client = foursquare.Foursquare(client_id, client_secret, redirect_uri='http://fondu.com/oauth/authorize')
                var url2 = "https://api.foursquare.com/v2/venues/40a55d80f964a52020f31ee3?oauth_token=2HHCFEID32IE4MEJDBQBHGZRJMVDYKIOBDQ31ZQAVT3VJK0G&v=20140215"
                auth_uri = client.oauth.auth_url()
		var url = "content.json";
		
		//Package the result-handling code
		//in its own function: it's more readable
		function processData(data){
		
		//This variable will hold the result
		//converted into a string for display
		var resultStr = "";
		
		//use jQuery .find() to extract the language
		//element from the returned data
		//and store it in an array
		var items = $(data).find('language');
		
		//loop over each language item with
		//jQuery .each() function
		$(items).each(function(i){		
                    
		//extract the text of each language item and
		//add it to the resultStr variable with a line break.
		//Notice the use of $(this)
		//to refer to the item currently being
		//inspected by the loop
		resultStr += $(this).text() + '<br />';
		
		//add the final string result to div elemen
		//with the id of result using .html()
		
		$('#result').html(resultStr);
		
		});
		
		}
		
		
		/****************************************/
		
		
		//Attach a click handler to the link element:
		
		//when the user clicks on the link, the AJAX
		
		//request is sent to the server:
		
		$('a').click(function()
		
		{
		
		//use $.get() passing the url variable and
		
		//the name of the result-handling function
		
		//as arguments:
		
		$.get(url, processData);
		
		});
		
		});
        
                </script>
    -->
    
    <script>
       // $document.ready(function(){

            alert("done"); 
       // });
    </script>
        
</head>
<body>
    
    <h1>Enter Menu</h1>	
    
    <!--
    <form id="section_2">    
        Menu Section Name <input type="text" name="fname" placeholder="ex: Starters, Burgers, Soup & Salad" id="fname" class="textinput" value="" />
        Description of section<input type="text" name="lname" placeholder="Dont have to put a discription" id="lname" class="textinput" value="" />
        
        <h2>Dishes</h2>
        Entry Id<input type="text" name="fname" placeholder="First Name" id="fname" class="textinput" value="" />
        Name<input type="text" name="lname" placeholder="Last Name" id="lname" class="textinput" value="" />
        Description<input type="text" name="lname" placeholder="Last Name" id="lname" class="textinput" value="" />
        Price<input type="text" name="lname" placeholder="Last Name" id="lname" class="textinput" value="" />
        <input type="submit" id="SendButton" name="submit" class="textinput" value="Submit" />
    </form>   
    -->
    
    
    <div class="main_section">
    <form method="post" action="save_section.php" id="section">
       <fieldset> 
           <!--
           <input type="hidden" name="ajax" value="true" />
           <p><label class="field" for="Name">Restaurant Name: </label><input type="text" name="rest_name" placeholder="eg. Starbucks, Chipotle, Taste of Texas" id="fname" class="textinput" value="" /></p>
           <p><label class="field" for="Name">City: </label><input type="text" name="city_name" placeholder="eg. Austin, Boston" id="lname" class="textinput" value="" /></p>       
           <p><label class="field" for="Name">Address: </label><input type="text" name="rest_address" placeholder="eg. 2222 Street Name" id="lname" class="textinput" value="" /></p>    
           -->
            <div id="sectionNew">   
                Menu Section Name <input type="text" name="add_section_name" placeholder="eg. Starters, Burgers, Soup & Salad" id="add_section_name" class="textinput" value="" />
                Description of section<input type="text" name="add_section_desc" placeholder="Dont have to put a discription" id="add_section_desc" class="textinput" value="" />
                
                <div id="itemRows">
                    <!--Item quantity: <input type="text" name="add_qty" size="4" />-->
                    Item name: <input type="text" name="add_name" placeholder="eg. Chicken Parmesian"/>
                    Description: <input type="text" name="add_desc" placeholder="eg. A lot of chicken with some noodles and yummy stuff"/>
                    Price: <input type="text" name="add_price" placeholder="eg. 9.00"/>
                    <input onclick="addRow(this.form);" type="button" value="Submit Dish & Add another Dish" />
                </div>
            </div>
        </fieldset>
        <input type="submit" id="SendButton2" name="submit" class="textinput" value="add section." />
        
        <!--<input onclick="addSection(this.form);" type="button" value="Submit SEctino and add another" />-->
        
    </form>
    <!--
    <p>
        Submit the section of the menu.
        Then comes up with the same page but cleared out.
        <br><br>
        Every time you go to post_menu.php you will save the dish to the current section. 
        <br><br>
        *Need a button that you can save menu
        <br><br>
        Will be saving the sections to the same restaurant you first typed in
        <br><br>
        so once hit "is the menu complete?" button, you will be 
        pushed off and back to the beginning. Before you hit the button
        make sure you have submitted the section. so the form should be all cleared. 
    </p>
    -->
    <form method="post" action="menu_save.php">
        <input type="submit" id="SendButton" name="submit" class="textinput" value="Is the menu complete? Submit Menu" />
    </form>    
    </div>    
     <?php
        echo "<div class=\"side_section\">";
        echo '<h1>Results:</h1><br /><br />';
        $is_first = $_SESSION['is_first'];
        if($is_first == TRUE){
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $sections_main = array();
        }
        $restaurant_name = $_SESSION['restaurant_fsid'];
        $restaurant_fsid = $_SESSION['restaurant_name'];
        $_SESSION['restaurant_fsid'] = $restaurant_fsid;
        $_SESSION['restaurant_name'] = $restaurant_name;
        echo $restaurant_name."<br>";
        echo $restaurant_fsid."<br>";
        
        $main_menu = $_SESSION['main_menu'];
        $rest_array = $_SESSION['rest_array'];
        
        $_SESSION['main_menu'] = $main_menu;
        $_SESSION['rest_array'] = $rest_array;
        //echo "here: ",$_SESSION['new_menu']; // green
        if($is_first == TRUE){
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $menu = array($restaurant_fsid,$restaurant_name);
            $_SESSION['new_menu'] = $menu;
            $sections_main = array();
        }
        if($is_first == FALSE){
            $menu = $_SESSION['new_menu'];
            $sections_main = $_SESSION['sections_main'];
            echo 'Sections main gettings passed';
            
        }
        //print_r($menu);
        
        foreach ($sections_main as $i => $value){
            if(is_array($value)){
                echo '<hr>';
                 echo "<h3>new section:</h3>";
                foreach ($value as $j => $next){
                   
                    if(is_array($next)){
                        //echo '<br>';
                        echo '<h3>new dish:</h3>';
                        foreach ($next as $k => $last){
                            //echo '<h5>',$last,'</h5>';
                            if(is_array($last)){
                                foreach ($last as $k => $pass){
                                    echo '<h5>',$pass,'</h5>';
                                }
                            }
                            else{
                                echo '<h5>',$last,'</h5>';   
                            }
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
        
        //$menu_main = $_SESSION['new_menu'];
        //$_SESSION['new_menu'] = $menu_main;
        //print_r($menu_main); 
    
        $output = null;
        $return = null;
        $name = 'chipotle';
        $location = 'austin, tx';
        exec("python call_fs_menu.py $name $location", $output, $return);
        //echo "here:<br>";
        //print_r($output); 
        //print_r($return) ;
        echo "</div>";
        $_SESSION['sections_main'] = $sections_main;
    ?>   
    
</body>
</html>