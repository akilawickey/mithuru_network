<?php

if(isset($_POST['username']) && isset($_POST['password'])){

$username = $_POST['username'];

$password = $_POST['password'];

$password_hash =  md5($password);

         

if(!empty($username) && !empty($password)){



  
$query = "SELECT id FROM user WHERE username = '".mysql_real_escape_string($username)."' AND password = '".mysql_real_escape_string($password_hash)."'";



if($query_run = mysql_query($query)){


$query_num_rows = mysql_num_rows($query_run);	


if($query_num_rows == 0){
echo '<h3 id = "error">සමාවන්න ඔබ ලබා දුන් ගිණුම් නාමය හො මුර පදය වැරදියි</h3>';

}else if($query_num_rows == 1){


 $user_id = mysql_result($query_run,0,'id');
$_SESSION['user_id'] = $user_id;

header('Location: index.php');
}

}
}else if(empty($username) && empty($password)){
echo '<h3 id = "error">ගිණුම් නාමය හා මුර පදය මිතුරු ජාලයට එක් වීම සදහා ලබා දෙන්න.<h3>';
}

}

?>





<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>මිතුරු හමුව</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h1>මිතුරු හමුව</h1>
			<p>&#3462;&#3514;&#3540;&#3510;&#3549;&#3520;&#3505;&#3530; &#3512;&#3538;&#3501;&#3540;&#3515;&#3540; &#3524;&#3512;&#3540;&#3520;&#3495; &#3523;&#3535;&#3503;&#3515;&#3514;&#3545;&#3505;&#3530; &#3508;&#3538;&#3517;&#3538;&#3484;&#3505;&#3538;&#3512;&#3540; &#3465;&#3517;&#3482;&#3530;&#3482;&#3514;&#3505;&#3530; &#3523;&#3508;&#3540;&#3515;&#3535;&#3484;&#3505;&#3538;&#3512;&#3540; ...</p>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
			<h3></h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<div id = "form">


<form action ="<?php echo $current_file; ?>" method = "POST">

<br><br><br><br>
  <label for="username"><b>ගිණුමේ නම : </b></label><input type = "text" class = "lab" name = "username" id ="username"><br> 
 <label for="password"><b> මුර පදය :  </b></label><input type ="password" class = "lab "name = "password" id = "password">


    <input type = "Submit" class="success button"  value = "ඇතුලු වීම">

	  
	 <p><a href="register.php" class="button">එකතුවෙන්න</a></p>
	


</form>

</div>


    

</form>
					</div>
				</div>
			</div>



<div class="large-12 columns">
					<div class="panel">
						<p>අද දවසේ අලුත් දේ....





</p>
					</div>
				</div>
			<div class="row">
				
				
			</div>
			<div class="row">
				
				
				
			</div>

		


		</div>

		<div class="large-4 columns">
			<h4>මොකක්ද මේක?</h4>
			<p>ඇත්තටම මේ වෙබ් පිටුව පාවිච්චි කරල එදිනදා ඉලක්කයන් ඔයගොල්ලන්ට කලමනාකරනය කරගන්න පුලුවන් ...</p>

			<h4>වැදගත්</h4>
			<p>අපිට දවසේ කොච්චර සාර්ථකත්වයක් ලැබුවද අපට වුනු අඩුපාඩු බලාගන්නත් පුලුවන් ...</p>
<p>එවගේම මිතුරන් සමග එක් වීමටත් ඔබට පුලුවන්.....</p>
			
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

<p align="center">©2013 Designed By ASAK</p>
</html>
