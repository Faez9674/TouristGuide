<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){
    
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM restaurants WHERE id = '$id'";
    $result1 = mysqli_query($conn, $sql1);

    $row1 = mysqli_fetch_assoc($result1);

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
        <form action="res_review_add.php" method="POST" enctype="multipart/form-data">
            <div class="card-header" style="text-align: center; color: white; background-color: black;">
                <h2 style="font-size: 20px;">Add Restaurant Review</h2><br>
                
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
            <div class="row">
                <div class="col-md-6">
                    <label>Restaurant Name</label>
                    <input type="hidden" name="restaurant_id" class="form-control" value="<?php echo $row1['id'] ?>" >
                    <input type="text" name="restaurant_name" class="form-control" value="<?php echo $row1['restaurant_name'] ?>" readonly>



                </div>
                <div class="col-md-6">
                    <label>Rate</label>
                    <input type="text" name="rate" class="form-control" placeholder="Enter Number of Stars" required>
                    <label>Review</label>
                    <textarea class="form-control" rows="7" cols="2" name="review" placeholder="Enter Description" required></textarea>
                    <input type="hidden" name="status" class="form-control" value="pending">
                </div>
            </div>

            
            

            


            </div> 
            
            

           
            <div class="card-body" style="background-color: #D3D3D3;">

            <div  style="text-align: center">
            <!-- <div class="card-footer">Reach before 4PM</div> -->
            <button type="submit" name="submit" class="btn btn-success" style="background-color: green;">Add</button>
            <a href="home.php" class="btn btn-danger">Cancel</a>
            </div>

            </form>
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