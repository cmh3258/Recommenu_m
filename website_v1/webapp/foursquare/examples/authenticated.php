<?php session_start();
	require_once("../src/FoursquareAPI.class.php");
	$name = array_key_exists("name",$_GET) ? $_GET['name'] : "Foursquare";
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
<h1>Authenticated Request Example</h1>
<p>
	Search for users by name...
	<form action="" method="GET">
		<input type="text" name="name" />
		<input type="submit" value="Search!" />
	</form>
<p>Searching for users with name similar to <?php echo $name; ?></p>
<hr />
<?php 
	// Set your client key and secret
	$client_key = "NIVPQHGRVGDXDF01DNIG1VBEV0QFFMCN5HH3XIBBX3RIHZYH"; // Your Client ID
	$client_secret = "1LRSXS4DWKMI5VVK5MKUGJ03YBROKGSL55TVJM3W2QUIXGRK"; // Your Client Secret
	// Set your auth token, loaded using the workflow described in tokenrequest.php
	$auth_token = $_SESSION['auth_token'];
	// Load the Foursquare API library
	$foursquare = new FoursquareAPI($client_key,$client_secret);
	$foursquare->SetAccessToken($auth_token);
	
	// Prepare parameters
	$params = array("name"=>$name);
	
	// Perform a request to a authenticated-only resource
	$response = $foursquare->GetPrivate("users/search",$params);
	$users = json_decode($response);
	
	// NOTE:
	// Foursquare only allows for 500 api requests/hr for a given client (meaning the below code would be
	// a very inefficient use of your api calls on a production application). It would be a better idea in
	// this scenario to have a caching layer for user details and only request the details of users that
	// you have not yet seen. Alternatively, several client keys could be tried in a round-robin pattern 
	// to increase your allowed requests.
	
?>
	<ul>
		<?php foreach($users->response->results as $user): ?>
			<li>
				<?php 
					if(property_exists($user,"firstName")) echo $user->firstName . " ";
					if(property_exists($user,"lastName")) echo $user->lastName;
					
					// Grab user twitter details
					$request = $foursquare->GetPrivate("users/{$user->id}");
					$details = json_decode($request);
					$u = $details->response->user;
					if(property_exists($u->contact,"twitter")){
						echo " -- follow this user <a href=\"http://www.twitter.com/{$u->contact->twitter}\">@{$u->contact->twitter}</a>";
					}
					
				?>
			
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
