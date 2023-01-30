 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" type="text/css" href="logout.css" >
 </head>
 <body>
   <?php
    session_start();
    if(session_destroy()){
      header("location:mainhome.html");
    }
    ?>
 </body>
 </html>
