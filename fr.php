<?php
if (isset($_POST['makec'])){
  setcookie("gotos", "fr", time() + (86400 * 1000), "/");
}include("header.php");
?>

<!DOCTYPE html>
<title>Biass - Rightists</title>
<h1 style="font-family:Arial; font-size:20px; color:white">Are you a middle aged conservative or anything of the sort? This part of the site is for you!</h1>
<form action="fr.php" method="post">

  <input type="submit" name="makec" style="width:200px; height:25px; background-color:indianred; border-radius:10px; border-color:palevioletred; font-family:Arial; font-weight:bold; color:white; display:inline " value="Set this as your goto page">
</form>
<br>
<hr style="color:white; height:4px; border-width:5px">