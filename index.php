<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Outer-Tuning: tuning databases</title>
<meta http-equiv="content-type" content="text/html;charset=utf8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>    
<script type="text/javascript">
$("[title]").tooltip();
</script> 
<style type="text/css"> 

/* tooltip styling. by default the element to be styled is .tooltip  */
.tooltip {
    display:none;
    background:transparent url(https://dl.dropboxusercontent.com/u/25819920/tooltip/black_arrow.png);
    font-size:12px;
    height:70px;
    width:160px;
    padding:25px;
    color:#fff;
}
</style> 
</head>
<body>
<div id="content">
  <div id="header">
    <p id="top_info"><image src="images/puc-rio.png" height="70px"></p>
    <div id="logo">
      <h1><a href="#"><image src="images/outer_tuning.png" height="70px"></span></a></h1>
    </div>
  </div>
  <div id="tabs">
    <ul>
      <li><a href="index.php?page=h" <?php if(isset($_GET["page"]) and ($_GET["page"]=="h" or $_GET["page"]=="")) echo "class='current'";?> accesskey="h"><span class="key">H</span>euristic Selection</a></li>
      <li><a href="index.php?page=w" <?php if(isset($_GET["page"]) and ($_GET["page"]=="w")) echo "class='current'";?> accesskey="w"><span class="key">W</span>orkload capture</a></li>
      <li><a href="index.php?page=d" <?php if(isset($_GET["page"]) and ($_GET["page"]=="d")) echo "class='current'";?> accesskey="d"><span class="key">D</span>atabase Tuning</a></li>
      <li><a href="index.php?page=l" <?php if(isset($_GET["page"]) and ($_GET["page"]=="l")) echo "class='current'";?>  accesskey="l"><span class="key">L</span>og</a></li>
    </ul>
  </div>

<?php 
if(isset($_GET["page"])){
if($_GET["page"]=="w"){
	include "workload.php";
} else if($_GET["page"]=="d"){
	include "database_tuning.php";
} else if($_GET["page"]=="l"){
	include "log.php";
} else {
	include "heuristic_selection.php";
}} else {
include "heuristic_selection.php";
}?>

  <div class="footer">
    <p><a href="#">Help</a> &middot; <a href="#">About</a> <BR/>&copy; Copyright 2014 BioBD - PUC-RIO
  </div>
</div>
</body>
</html>
