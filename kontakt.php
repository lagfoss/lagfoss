<?php

if (isset($_POST['submit'])){
  $name = $_POST['navn'];
  $subject = $_POST['besked'];
  $mailFrom = $_POST['email'];



  $mailTo = "rani@lagfoss.com, lagfoss@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "Du har modtaget en mail fra ".$name.".\n\n".$subject;

  mail($mailTo, $subject, $txt, $headers);
  header("Location:takkontakt.html");
}

?>
