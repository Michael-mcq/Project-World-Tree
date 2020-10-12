<?php require('includes/config.php'); 

//if not logged in redirect to login page
if (! $user->is_logged_in()){
    header('Location: login.php'); 
    exit(); 
}

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Member only page - Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
				<p><a href='logout.php'>Logout</a></p>
                <p><a href='../home.html'>Back to home page</a></p>
				<hr>

		</div>
	</div>


</div>
<style>

  body { text-align: center; padding: 150px; }

  h1 { font-size: 50px; }

  body { font: 20px Helvetica, sans-serif; color: #333; }

  article { display: block; text-align: left; width: 650px; margin: 0 auto; }

  a { color: #dc8100; text-decoration: none; }

  a:hover { color: #333; text-decoration: none; }

</style>



<article>

    <h1>Under Construction We&rsquo;ll be back soon!</h1>

    <div>

        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance development at the moment. If you need to you can always <a href="mailto:Michael-McQ@outlook.com">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>

        <p>&mdash; Project: World Tree Dev</p>

    </div>

</article>
<?php 
//include header template
require('layout/footer.php'); 
?>
