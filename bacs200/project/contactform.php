<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailFrom=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

$mailTo="ewin9631@bears.unco.edu";
$headers="From: Summit Youth Leadership".$mailFrom;
$txt="You have received an email from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
