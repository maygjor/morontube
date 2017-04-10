

<html>
<head>
<title>advanced mini title</title>
<link rel="stylesheet" type="text/css" href="includes/style.php"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
</head>
<body onload="init();">

<?php
  include("includes\header.php");
 ?>
<div id="container" dropzone="move" class="flex-container" style="position:fixed;" >
<a>
<div id="content" class="flex-container ">


 <div  id="contentleft" >
<?php 
$g=2;$t=49;
for($i=$g;$i<$t;$i++){
	include('includes/player.php');
	 if(is_null($name)){return;}
	
	 
}?>

</div><!--contentleft-->


</div><!--content-->
</a>
</div><!--container-->
 <div id="footer">
<?php
include("includes\\footer.php");

?>
</div><!--footer-->

</body>

</html>
