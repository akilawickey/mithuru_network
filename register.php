<?php

require 'corei.inc.php';
require 'connect.inc.php';
$username = '';
$firstname = '';
$surname = '';

if(!loggedin()){
  if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['fullname'])&&isset($_POST['styled-textarea'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $password_hash = md5($password);
    $fullname = $_POST['fullname'];
    $about = $_POST['styled-textarea'];

  if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($fullname)&&!empty($about)){
    if($password != $password_again){
      echo 'Password Do not match';
    }else if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
      echo "E-mail is not valid";
    }else{
      $query = "SELECT username FROM user WHERE username = '$username'";
      $query_run = mysql_query($query);
      if(mysql_num_rows($query_run)==1){
        echo 'The username '.$username.' already exists';
      }else{

        $query1 = "INSERT INTO user(username,password,fullname,about) VALUES ('".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($fullname)."','".mysql_real_escape_string($about)."')";
        //$query2 = "ALTER TABLE user ADD COLUMN ".$username." varchar(40) default 'no'";
        //if(($query_run = mysql_query($query1))&&($query_run2 = mysql_query($query2))){
        // $to = $username;
        // $subject = "Mithuru Registration Successfull";
        // $message = "Hello ! Thanks you for your idea to be a part of this Network ....  Your account has been created please login from here http://mithuru.host22.com/ use your Email address as the Account name .... Enjoy this... Thanks
        //              (Your Regards Designer)  ";

        // $from = "admin@mithuru.host22.com";
        // $headers = "From: " . $from;
        // mail($to,$subject,$message,$headers);
          // echo "Mail Sent.";
          if($query_run = mysql_query($query1)){
            header('Location: register_sucess.php');
          }
          else{
            echo 'Sorry We Could not register you at this time Try Again later';
          }
      }
    }
  }
  else{
    echo 'All Fields are required';
  }
  }

?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>&#3512;&#3538;&#3501;&#3540;&#3515;&#3540; &#3524;&#3512;&#3540;&#3520;</title>


  <link rel="stylesheet" href="css/foundation.css">


  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h2>&#3512;&#3538;&#3501;&#3540;&#3515;&#3540; &#3490;&#3535;&#3517;&#3514;&#3495; &#3473;&#3482;&#3501;&#3540;&#3520;&#3545;&#3505;&#3530;&#3505;</h2>
			<p>&#3462;&#3514;&#3540;&#3510;&#3549;&#3520;&#3505;&#3530;</p>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
			<h3>&#3512;&#3545;&#3514; &#3508;&#3540;&#3515;&#3520;&#3505;&#3530;&#3505;</h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
	<div id = "form">
<form action ="<?php echo $current_file; ?>" method = "POST">


 <b>     <form  action = "register.php" method = "POST">
Email Address :<input type = "text" name = "username" maxlength = "45" value = "<?php if(isset($username)) {echo $username;} ?>"> <br><br>



Fullname :<input type = "text" name = "fullname" maxlength = "45" value = "<?php if(isset($fullname)){echo $fullname; }?>"> <br><br>

About Me :<textarea name="styled-textarea" id="styled" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">eg :- i'm a Good person</textarea>

Password :<input type = "password" name = "password"> <br><br>

Password Again :<input type = "password" name = "password_again"> <br><br>


<input type ="submit" value = "Register" class="button">

</form>

<form action="index.php">
    <input type="submit" class="success button" value="Back To Login">
</form>

</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">

				</div>
				<div class="large-6 columns">

				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">

				</div>
				<div class="large-4 columns">

				</div>
				<div class="large-4 columns">

				</div>
			</div>



		</div>

		<div class="large-4 columns">
			<h4>&#3512;&#3548;&#3482;&#3482;&#3530;&#3503; &#3512;&#3546;&#3482;?</h4>
			<p>&#3463;&#3501;&#3530;&#3501;&#3495;&#3512; &#3512;&#3546; &#3520;&#3545;&#3510;&#3530; &#3508;&#3538;&#3495;&#3540;&#3520; &#3508;&#3535;&#3520;&#3538;&#3488;&#3530;&#3488;&#3538; &#3482;&#3515;&#3517; &#3473;&#3503;&#3538;&#3505;&#3503;&#3535; &#3465;&#3517;&#3482;&#3530;&#3482;&#3514;&#3505;&#3530; &#3476;&#3514;&#3484;&#3548;&#3517;&#3530;&#3517;&#3505;&#3530;&#3495; &#3482;&#3517;&#3512;&#3505;&#3535;&#3482;&#3515;&#3505;&#3514; &#3482;&#3515;&#3484;&#3505;&#3530;&#3505; &#3508;&#3540;&#3517;&#3540;&#3520;&#3505;&#3530; ...</p>

			<h4>&#3520;&#3536;&#3503;&#3484;&#3501;&#3530;</h4>
			<p>&#3461;&#3508;&#3538;&#3495; &#3503;&#3520;&#3523;&#3546; &#3482;&#3548;&#3488;&#3530;&#3488;&#3515; &#3523;&#3535;&#3515;&#3530;&#3502;&#3482;&#3501;&#3530;&#3520;&#3514;&#3482;&#3530; &#3517;&#3536;&#3510;&#3540;&#3520;&#3503; &#3461;&#3508;&#3495; &#3520;&#3540;&#3505;&#3540; &#3461;&#3497;&#3540;&#3508;&#3535;&#3497;&#3540; &#3510;&#3517;&#3535;&#3484;&#3505;&#3530;&#3505;&#3501;&#3530; &#3508;&#3540;&#3517;&#3540;&#3520;&#3505;&#3530; ...</p>
<p>&#3473;&#3520;&#3484;&#3546;&#3512; &#3512;&#3538;&#3501;&#3540;&#3515;&#3505;&#3530; &#3523;&#3512;&#3484; &#3473;&#3482;&#3530; &#3520;&#3539;&#3512;&#3495;&#3501;&#3530; &#3476;&#3510;&#3495; &#3508;&#3540;&#3517;&#3540;&#3520;&#3505;&#3530;.....</p>

		</div>
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>

  <script src="js/foundation.min.js"></script>
  <!--

  <script src="js/foundation/foundation.js"></script>

  <script src="js/foundation/foundation.interchange.js"></script>

  <script src="js/foundation/foundation.abide.js"></script>

  <script src="js/foundation/foundation.dropdown.js"></script>

  <script src="js/foundation/foundation.placeholder.js"></script>

  <script src="js/foundation/foundation.forms.js"></script>

  <script src="js/foundation/foundation.alerts.js"></script>

  <script src="js/foundation/foundation.magellan.js"></script>

  <script src="js/foundation/foundation.reveal.js"></script>

  <script src="js/foundation/foundation.tooltips.js"></script>

  <script src="js/foundation/foundation.clearing.js"></script>

  <script src="js/foundation/foundation.cookie.js"></script>

  <script src="js/foundation/foundation.joyride.js"></script>

  <script src="js/foundation/foundation.orbit.js"></script>

  <script src="js/foundation/foundation.section.js"></script>

  <script src="js/foundation/foundation.topbar.js"></script>

  -->

  <script>
    $(document).foundation();
  </script>
</body>
</html>

<?php



}

else if(loggedin()){

echo 'You are Already registered and Logged in';
}
















?>
