<?php

if(isset($_POST['submit']))
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

$mailTo="ewin9631@bears.unco.edu";
$headers="From: Summit Youth Leadership".$mail;
$txt="You have received an email from ".$name."./n/n".$message;


mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
