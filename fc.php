<?php
if (isset($_POST['makec'])){
  setcookie("gotos", "fc", time() + (86400 * 1000), "/");
}include("header.php");
?>

<!DOCTYPE html>
<title>Biass - Centrists</title>
<h1 style="font-family:Arial; font-size:20px; color:white">Are you torn between leftist and rightist and want to be the Switzerland of the pack? This part of the site is for you!</h1>
  <form action="fc.php" method="post">

  <input type="submit" name="makec" style="width:200px; height:25px; background-color:indianred; border-radius:10px; border-color:palevioletred; font-family:Arial; font-weight:bold; color:white; display:inline " value="Set this as your goto page">
</form>
<br>
<hr style="color:white; height:4px; border-width:5px">