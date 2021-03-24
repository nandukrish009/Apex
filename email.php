<?php /*
$ToEmail = 'sriramaneni.nandu@gmail.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["EMAIL"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["EMAIL"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["FNAME"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["EMAIL"].""; 
$MESSAGE_BODY .= "Phone: ".$_POST["PHONE"].""; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["MESSAGE"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); */
?>



<?php 
if ($_POST["EMAIL"]<>'') { 
    $ToEmail = 'sriramaneni.nandu@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["EMAIL"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["EMAIL"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["FNAME"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["EMAIL"].""; 
    $MESSAGE_BODY .= "Phone: ".$_POST["PHONE"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["MESSAGE"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
$Link = "<script> window.alert("mesage sent sucessfull") </script>";


<?php 
} else { 
?> 
echo "contact.html";
<?php 
}; 
?>