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
        }
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
    <?php
        

        echo 'Welcome to page #2<br />';
        
        echo "here: ",$_SESSION['passer']; // green
        $pass_t = $_SESSION['passer'];
        print_r($pass_t); 
    
    ?>
    <form method="post" action="post_menu.php" id="section">
       <fieldset> 
           <input type="hidden" name="ajax" value="true" />
           <p><label class="field" for="Name">Restaurant Name: </label><input type="text" name="rest_name" placeholder="eg. Starbucks, Chipotle, Taste of Texas" id="fname" class="textinput" value="" /></p>
           <p><label class="field" for="Name">City: </label><input type="text" name="city_name" placeholder="eg. Austin, Boston" id="lname" class="textinput" value="" /></p>       
           <p><label class="field" for="Name">Address: </label><input type="text" name="rest_address" placeholder="eg. 2222 Street Name" id="lname" class="textinput" value="" /></p>    
           
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
        <input type="submit" id="SendButton2" name="submit" class="textinput" value="submit." />
        
        <input onclick="addSection(this.form);" type="button" value="Submit SEctino and add another" />
        
    </form>

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
    <form method="post">
        <input type="submit" id="SendButton" name="submit" class="textinput" value="Is the menu complete? Submit Menu" />
    </form>    
        
        
    
</body>
</html>