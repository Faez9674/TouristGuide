<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

    if(isset($_POST['submit'])){

        
        $restaurant_name = $_POST['restaurant_name'];
        $restaurant_address = $_POST['restaurant_address'];
        $restaurant_phone = $_POST['restaurant_phone'];

        $star = $_POST['star'];
        $description = $_POST['description'];

        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

        move_uploaded_file($tempname, './restaurants/' . $filename);
        

    
    
        $sql = "INSERT INTO restaurants (`restaurant_name`,`restaurant_address`,`restaurant_phone`,`star`, `description`, `image`) VALUES ('$restaurant_name', '$restaurant_address', '$restaurant_phone', '$star', '$description', '$filename')";

        $result = mysqli_query($conn, $sql);

        
        
        // if (mysqli_query($conn, $sql)) {
        //     header("location: final_booking.php");
        // } else {
        //         echo "Something went wrong. Please try again later.";
        // }
        
    }

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Tourist Guide</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
      <script src="https://kit.fontawesome.com/a24879a822.js"></script>

<style>
	.error{
		background-color: red;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin: 20px auto;
	}
</style>

</head>
<body style="background-image: url('images/img-19.png'); background-repeat: no-repeat; background-size: cover; ">




            

<br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">Restaurant Added Successfully</h1>
          
            <br>

            <a href="home.php" class="btn btn-success">Go Back To Home</a>
         
        </div>
        </div>
  
    </div>
  
</div>
            
              
<br><br>
           

           


</body>
</html>


<?php

}else{
    header("location: login.php");
    exit();
}
?>