<!DOCTYPE html> 
<html lang="ja"> 
<head> 
    <meta http-equiv="content-type" charset="utf-8"> 
    <link ret="stylesheet" href="style.css"> 
    <title>Suresh Mayanglambam</title>
</head> 
<body> 
    <?php

            $name=$_POST["name"];
            $email=$_POST["email"]; 
            $subject=$_POST["subject"];
            $comment=$_POST["comment"];

     mb_language("Japanese");
     mb_internal_encoding("UTF-8"); 

     $to = "sureshnecrobutcher@gmail.com"; 
     $title = "Test"; 
     $message =  "NAME:" .$_POST['name']; 
     $message .="\n";
     $message .= "comment" .$_POST["comment"];

     $headers = "From: " . $_POST["email"]; 
    echo $message;
    echo $headers;
     if(mb_send_mail($to, $title, $message, $headers)) 
{
    echo"e-mail sent";
}
else { 
echo "e-mail not sent"; 
} ?>
 </body> 
 </html>