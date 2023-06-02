<?php
include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<style>
   body{
      background-image: linear-gradient(pink, white);
      background-size: cover;
      background-repeat: no-repeat  ;
      height: 100vh;
   }
   .center{
      text-align: center;
   }

</style>
<body>
   
<?php include 'admin_header.php'; ?><br>

<section class="home">



<h1 class="title">Welcome to the Admin Page!</h1>
<div class="center">
<img src="images/logo.png" alt="" height="500" width="700">
</div>


</section>














<script src="js/script.js"></script>

</body>
</html>