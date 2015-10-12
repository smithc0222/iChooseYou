<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <title>iChooseYou</title>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67451525-1', 'auto');
  ga('send', 'pageview');
</script>
    </head>
 <body>
 <?php
 	if(isset($_POST["submit"]))
 	{
 		if(!empty($_POST["contact-name"]) || !empty($_POST["contact-message"]) || !empty($_POST["contact-email"]) || !empty($_POST["to"]))
 		{
 		
 			$message=$_POST['contact-message'];
			$email=$_POST['contact-email'];
			$email_to=$_POST['to'];
			$subject="You have an iChooseYou message!";
			$name=$_POST['contact-name'];
			$body= "You have a new message from $name \n\n $message \n\n Reply and tell $name why you choose them today at www.chasesmith.xyz/ichooseyou.html";
			mail ($email_to,$subject,$body);

			echo "You just made " . $email_to. "'s day." . "<br><br> Thank you for using iChooseYou. <br>";
			
			echo '<br><a href="app.php"><b>Click here to send another message.</b></a>';
			}
 		
 	else {
		echo '<a href="app.php"><b>You must fill out the whole form.</b></a>'; 
		}
	}	
?>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>