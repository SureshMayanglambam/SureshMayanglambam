<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Suresh Mayanglambam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  

 
</head>

<body>
        <?php
        $link = mysqli_connect("127.0.0.1","ib200031","Q5TSOn0xZW","ib200031");
        //if (mysqli_connect_error()) {
           // die("data:" .mysqli_connect_error());}
      // else{
           // echo "data. \n";
          // }
            $name=$_POST["name"];
            $email=$_POST["email"]; 
            $subject=$_POST["subject"];
            $comment=$_POST["comment"];

            
            
            //$sql="INSERT INTO portfolio (name,email,subject,comment,) VALUES ("; 
           // $sql .= "'" . $name . "','" . $email . "','" . $subject .  "','" . $comment ."')";
            //$sql .= $Prefcd . ",'" . $addr ."','" . $mess ."','" . $createdate . "')" ; 
            $sql="INSERT INTO portfolio (name, email, subject, comment) VALUES ('$name', '$email', '$subject', '$comment')";
            //echo $sql;
            

    
         $res = mysqli_query($link,$sql);
        
            if ($res){  ?>
               <center> <h1> <?php echo " Your Message was sucessfully sent Thank you"; ?> </h1></center>
               <?php
            } else {
                //echo "false..";
             // echo "sucess";
            }


            mb_language("Japanese");
            mb_internal_encoding("UTF-8"); 
       
            $to = "sureshnecrobutcher@gmail.com"; 
            $title = "Test"; 
            $message =  "NAME:" .$_POST['name']; 
            $message .="\n";
            $message .= "comment:" .$_POST["comment"];
       
            $headers = "From: " . $_POST["email"]; 
          // echo $message;
          // echo $headers;
            if(mb_send_mail($to, $title, $message, $headers)) 
       {
          // echo"e-mail sent";
       }
       else { 
       echo "e-mail not sent"; 
       } ?>
       <br>
             
     <center>   <a href="index.php"><button type="button" class="btn btn-success">Back to Home</button></a></center>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
            