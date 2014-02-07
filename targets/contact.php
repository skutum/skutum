<?php
if($_POST['phone'] == ""){
    if($_POST['email'] == ""){
    echo "<script>window.location = 'http://skutum.com' </script>";
    }
    else {
    $mailheader = "From: ".$_POST['email']."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST['email']."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Sent By: ".$_POST['name'] ."<br><br>Inquire: ".nl2br($_POST['inquire'])."";
    mail('robinsont@skutum.com', 'Inquire from SKUTUM', $MESSAGE_BODY, $mailheader);
    echo "<script> window.location = 'http://skutum.com'</script>";
    }
}
else {
    echo "<script>window.location = 'http://skutum.com' </script>";
}
?>