<?php 
session_start();
	require_once("../src/FoursquareAPI.class.php");
	
	// This file is intended to be used as your redirect_uri for the client on Foursquare
	
	// Set your client key and secret
	$client_key = "NIVPQHGRVGDXDF01DNIG1VBEV0QFFMCN5HH3XIBBX3RIHZYH"; // Your Client ID
	$client_secret = "1LRSXS4DWKMI5VVK5MKUGJ03YBROKGSL55TVJM3W2QUIXGRK"; // Your Client Secret
	//$redirect_uri = "http://localhost/xampp/htdocs/Recommenu/web%20app/foursquare/examples/tokenrequest.php";
	$redirect_uri = "http://localhost/Recommenu/webapp/foursquare/examples/tokenrequest.php";
	// Load the Foursquare API library
	$foursquare = new FoursquareAPI($client_key,$client_secret);
	
	// If the link has been clicked, and we have a supplied code, use it to request a token
	if(array_key_exists("code",$_GET)){
		$token = $foursquare->GetToken($_GET['code'],$redirect_uri);
	}
	
?>
<!doctype html>
<html>
<head>
		<title>Foursquare API integration with PHP Site: devzone.co.in</title>
            <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43091346-1', 'devzone.co.in');
  ga('send', 'pageview');

</script>
</head>
<body>
<h1>Token Request Example</h1>
<p>
	<?php 
	// If we have not received a token, display the link for Foursquare webauth
	if(!isset($token)){ 
		echo "<a href='".$foursquare->AuthenticationLink($redirect_uri)."'>Connect to this app via Foursquare</a>";
	// Otherwise display the token
	}else{

$_SESSION['auth_token']=$token;
header('location:authenticated.php');
 
	}
	
	?>
	
</p>
<hr />
<?php 
	
?>
</body>
</html>
