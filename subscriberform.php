<?php
if($_POST["Message"]) {
mail("karthickdurai587@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: karthickdurai587@gmail.com");
}
?>
