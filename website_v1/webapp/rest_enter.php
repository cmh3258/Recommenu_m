<?php

echo $_POST['fname'];
/*
 * 
 * http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/
 * 
 * foreach($_POST['qty'] as $cnt => $qty) {
$sql = "INSERT INTO products (qty, name) VALUES ('$qty', '".$_POST['name'][$cnt]."');";
// run the query - with mysqli_query or whatever database wrapper you are using
// ...
}
 * 
 */



if(isset($_POST['email'])){
    
    $error="";
    $email_to = "chume@utexas.edu";
    $email_subject = "Recommenu: People Interested";
    
    function died($error){
        echo "There was an error. <br />";
        echo $error;
        die();
    }
    
    $email_from = $_POST['email'];
    //echo $echo_from;
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    $error_message = "";
    
    if(!preg_match($email_exp, $email_from)){
        $error_message .= 'The email address you entered does not appear to be valid.<br />';        
        //echo "here";
        echo $email_from;
    }
    if(strlen($error_message) > 0){
        
        ?>
        <html>
            <head>
                <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        
                <style type="text/css">
                    body{background-image: url('images/light_noise_diagonal.png');}
                    h1{font-size:2em;font-family:Lato;font-weight:300;margin-top:2em;text-align:center;}
                    img{display:block; margin-left:auto;margin-right:auto;margin-top:1em;width:13em;}
                    #rm{width:40em;margin-bottom:5em;margin-top:5em;}
                    a{color:black;font-size:2em;margin-top:;font-family:Lato;text-align:right;margin: 0 auto;}
                    .center{margin-left:auto;margin-right:auto;display:block;text-align:center;}
                </style>
                </head>
            <body>
              <div class="center">  
                
                <a href="index.html#interest">Go Back</a>
                <h1><?php died($error_message);?></h1>
              </div>  
               
            </body>
        </html>   
        
        
        <?php
    }
    
    // create email headers
/*$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();*/
//mail($email_to, $email_subject, $email_from); 
 /*   
   $to = "mail.recommenu@gmail.com";
   $subject = "Recommenu Interest";
   $message = "Interested in Recommenu. Give me updates.";
   $header = 'From:'.$email_from."\r\n";
   mail ($to,$subject,$message,$header);
*/
   /*
   $db = mysql_connect("fdb3.biz.nf","1520694_rmaildb","gokarts2013");
   if(!$db) die("Error connecting to MySQL database.");
   mysql_select_db("1520694_rmaildb" ,$db);
   */
    
   /*$db = mysql_connect("fdb3.biz.nf","1521682_rmaildb","gokarts2013");*/
   $db = mysql_connect("recommenublog.zzl.org","recommenublog_zzl_wpblog","Ch210526.","898288_rm");
   if(!$db) die("Error connecting to MySQL database.");
   mysql_select_db("1521682_rmaildb" ,$db); 
    
   $sql = "INSERT INTO interested_people     
       VALUES ( '$email_from' )"; 
   
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $db );
   if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
mysql_close($db);
   
   
}
//header("Location: http://recommenu.x10.mx?message=success");
header("Refresh: 3; url=rest_enter.html");

?>

<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,100italic,300italic,400italic' rel='stylesheet' type='text/css'>

        <style type="text/css">
            body{background-image:url('images/light_noise_diagonal.png');}
            h1{font-size:2em;font-family:Lato;font-weight:300;margin-top:2em;text-align:center;}
            img{display:block; margin-left:auto;margin-right:auto;margin-top:4em;width:13em;}
            #rm{width:40em;margin-bottom:5em;margin-top:5em;}
        </style>
        
    </head>
    <body>
        
        <h1>Thank you for your Interest.<br />You are now officially in the loop.<br /><br />You will now be taken Home...</h1>
    </body>
</html>    
