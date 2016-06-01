<?php

require 'corei.inc.php';
include 'connect.inc.php';




if(!loggedin()){


header('Location: index.php');

}else if (loggedin()){


$result = mysql_query("SELECT * FROM user WHERE id=".$_SESSION['user_id']);

while($row = mysql_fetch_array($result))
  {
  
  $fullname = $row['fullname']; 
// $lastname = $row['lastname']; 
// $mix = $firstname.' '. $lastname;





  }

//require_once('./envolve_api_client.php');
//echo(envapi_get_html_for_reg_user('136880-UDl4pUxPWLF5sfB7DzEDOwfWXmNk39Jh', $fullname, '', 'images/user.jpg', true, "Hello Friend"));


 
date_default_timezone_set('UTC/GMT +5:30 hours');
$datenow = date('m/d/Y h:i:s a', time());


if(isset($_POST['styled-textarea'])){

$data1 = $_POST['styled-textarea'];
$file = rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";

move_uploaded_file($file_loc,$folder.$file);

if(!empty($data1)){

//$query = "insert into aims(user,today,tom,date) valuesset data = '".$data."' where id = ".$_SESSION['user_id'];


$query = "insert into posts (user,post,date,name,file,type,size) VALUES('".mysql_real_escape_string($_SESSION['user_id'])."','".mysql_real_escape_string($data1)."','".mysql_real_escape_string($datenow)."','".mysql_real_escape_string($fullname)."','".mysql_real_escape_string($file)."','".mysql_real_escape_string($file_type)."','".mysql_real_escape_string($file_size)."')";


if($mysql_run = mysql_query($query)){


header("Location: home.php");
}



}else{


echo 'You havent Typed Any Targets';
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
	 <link rel="stylesheet" href="css/normalize.css">
   	 <link rel="stylesheet" href="css/foundation.css">
   	 <link rel="stylesheet" href="css/grid-5.css">

 	 <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<!-- Header and Nav -->
 
  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h2>&#3512;&#3538;&#3501;&#3540;&#3515;&#3540; &#3524;&#3512;&#3540;&#3520;</h2>
      </div>
    </div>
  </div>
  <!-- End Header and Nav -->
  <div class="row">
 <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 columns ">
      <div class="panel">
        <a href="#"><img src="images/user.jpg" height="62" width="92"/></a><br>

<br>
        <h5><a href="home.php"><?php  echo $fullname;           ?></a></h5>

 <h5><a href="logout.php">&#3465;&#3520;&#3501;&#3495; &#3514;&#3505;&#3530;&#3505;</a></h5>

          <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">

          
        </div>
 
      </div>
    </div>
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-6 columns">
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><img src="images/user.jpg" height="42" width="42"/></div>
        <div class="large-10 columns">
          <form action = "home.php" method = "POST" enctype="multipart/form-data">
	 
<textarea name="styled-textarea" id="styled" onfocus="this.value=''; setbg('#e5fff3');" onblur="setbg('white')">&#3512;&#3546; &#3512;&#3548;&#3524;&#3548;&#3501;&#3546; &#3461;&#3503;&#3524;&#3523;&#3482;&#3530;...</textarea>

</textarea>
Upload Your Tutes

<input type="file" name="file" /><br>	
<input type = "Submit" class="success button" name="btn-upload"	  value = "&#3512;&#3540;&#3503;&#3535; &#3524;&#3515;&#3538;&#3505;&#3530;&#3505;">
<br>

</form>

         
 </div>
       
     
 
 
<?php

$query = "select * from posts ORDER BY ID DESC LIMIT 10";

if($query_run = mysql_query($query)){

$query_num_rows = mysql_num_rows($query_run);

if($query_num_rows == 0){

echo '<h3 id = "current"> Sorry Currently there aren\'t any Posts</h3>';

}else{

for($i = $query_num_rows - 1 ;$i > 0;$i--){


     
      echo'<div class="row">';
        echo'<div class="large-2 columns small-3"><img src="images/user.jpg" height="42" width="42" /></div>';
        echo'<div class="large-10 columns">';
          echo'<p><strong>'.mysql_result($query_run,$i,name).' said:</strong>'.mysql_result($query_run,$i,post).' on '.mysql_result($query_run,$i,date).'</p>';
          echo'<ul class="inline-list">';
          echo '<li><a href="uploads/'.mysql_result($query_run,$i,file).'"">view file</a></li>';
            echo'<li><a href="">Reply</a></li>';
            echo'<li><a href="">Share</a></li>';
          echo'</ul>';
        echo'</div>';
      echo'</div>';
     
 
     echo' <hr />';
 

 
  
   

}
}
}
?>
 </div> </div>

    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-3 columns hide-for-small">
      
    </aside>
 
  </div>
 
 
  <!-- Footer -->
 
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-5 columns">
          <p> ©2013 Designed By ASAK</p>
        </div>
        <div class="large-7 columns">
          <ul class="inline-list right">
            <li><a href="#">Section 1</a></li>
            <li><a href="#">Section 2</a></li>
            <li><a href="#">Section 3</a></li>
            <li><a href="#">Section 4</a></li>
            <li><a href="#">Section 5</a></li>
            <li><a href="#">Section 6</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>

<?php 	

}

?>
