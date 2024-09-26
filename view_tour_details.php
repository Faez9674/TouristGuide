<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


    $id = $_GET['id'];

       
    $sql = "SELECT * FROM touristplaces WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);


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




            

                <br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card">

            <div class="card-header" style="text-align: center; color: white; background-color: black;">
            

            <div class="row">
                <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Tourist Place Details</h2> </div>
                <div class="col-md-5" style="text-align: right;"><a href="tour_view.php" class="btn btn-danger">Back</a></div>
            </div>


                
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">

            <img src="touristplaces/<?php echo $row['image']; ?>" width="700px" height="100px">
            <br>
            <h2 style="font-size: 25px; text-align: center"><b><?php echo $row['tour_name']; ?></b></h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    
                    <h4><b>Address:</b> <?php echo $row['tour_address']; ?></h4>


                </div>
                <div class="col-md-6">
                    <label><b>Review</b></label>
                    <h2 style="font-size: 25px;"><?php echo $row['star']; ?></h2>
                    <br>
                    <!-- <a href="direction.php" class="btn btn-success">Direct</a> -->
                    <a href="direction2.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Direct</a>
                    <a href="tour_review.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Give Rate/Review</a>
                </div>
            </div>


            <br><br>

            <div class="row">
                <div class="col-md-12">
                    <label style="font-size: 20px;"><b>Description</b></label>
                    <h2 style="font-size: 20px;"><?php echo $row['description']; ?></h2>

                </div>
                
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <label style="font-size: 20px;"><b>Customer Review</b></label>
                    <?php 



                    $sql = "SELECT * FROM tour_review WHERE status = 'accepted' and tour_id = $id";



                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){

                        while($row = mysqli_fetch_array($result)){

                        ?>
                    <h2 style="font-size: 20px;">Review: <?php echo $row['review']; ?></h2>
                    <br>

                    <?php
                    
                        }
                    
                    }

                    ?>

                </div>
                
            </div>

            
            

            


            </div> 
            
            

           
            <div class="card-body" style="background-color: #D3D3D3;">

           

        
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