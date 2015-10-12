



<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
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
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
       
        <header>
            <div class="navbar" role="navigation"> 
                <div class="container-fluid">
                    <p class="navbar-text">
                        iChooseYou
                    </p>
                </div>
            </div>
        </header>
     <form action="ichooseyou.php" method="POST" role="form">
        <div class="form-group">
            <label for="contact-name">From</label>
            <input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Your Name">
        </div>
        <div class="form-group">
            <input type="email" name="contact-email" class="form-control" id="contact-email" placeholder="Email">
          </div>
        
        <div class="form-group">
            <label for="to">To</label>
            <input type="email" class="form-control" name="to" id="to" placeholder="Email">
        </div>

        <div class="form-group">
            <textarea  class="form-control"  name="contact-message" id="contact-message" rows="2" placeholder="I choose you today because..."></textarea>
        </div>
        <div class="form-group">
             <button type="submit" name="submit" id="submit" class="btn btn-success">Send</button>

        </div>
    </form>
    
        
    <footer>
           <div class="navbar navbar-horizontal navbar-fixed-bottom">
            <div class="container">
                
           </div>
        </footer>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>   
</html>
