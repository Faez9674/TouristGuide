
<?php 
include "dbconn.php";



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


   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


 


      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

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




<?php 


if(isset($_GET['search_item'])){


    if($_GET['search_item'] == 'Tourist Place' || $_GET['search_item'] == 'tourist place' || $_GET['search_item'] == 'tourist places' || $_GET['search_item'] == 'tourist' || $_GET['search_item'] == 'Tourist' || $_GET['search_item'] == 'Tourist Places'){

    
$sql = "SELECT * FROM touristplaces ORDER BY star DESC";



$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    ?>

        <br><br><br>

<div class="container">
<div class="row">

<div class="col-md-12">

<div class="card">
    <div class="card-header" style="text-align: center; color: white; background-color: black;">

    <div class="row">
        <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Tourist Place List</h2> </div>
        <div class="col-md-5" style="text-align: right;"><a href="index.html" class="btn btn-danger">Back</a></div>
    </div>

        
       
        
    </div>
    <div class="card-body" style="background-color: #D3D3D3;">
    <table id="example">
        <thead>
        <tr>
            <th style="text-align: center;">Tourist Place Name</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Review Point</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <?php
        while($row = mysqli_fetch_array($result)){



           

            ?>
        <tbody style="text-align: center;">
        
        <tr>
            <td><?php echo $row['tour_name'] ?></td>
            <td><?php echo $row['tour_address'] ?></td>
            <td><?php echo $row['star'] ?></td>
            <td>
                <a href="view_tour_details1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
            </td>
        </tr>
       
        </tbody>
        <?php } ?>
    </table>
    </div> 

    
    <!-- <div class="card-footer">Reach before 4PM</div> -->
</div>
</div>

</div>

</div>
    


<?php
  
        

}else{
    echo "Data Not Found!";
}



}
elseif($_GET['search_item'] == 'Hotel' || $_GET['search_item'] == 'hotel'){

    $sql = "SELECT * FROM hotels ORDER BY star DESC";



$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    ?>

        <br><br><br>

<div class="container">
<div class="row">

<div class="col-md-12">

<div class="card">
    <div class="card-header" style="text-align: center; color: white; background-color: black;">

    <div class="row">
        <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Hotel List</h2> </div>
        <div class="col-md-5" style="text-align: right;"><a href="index.html" class="btn btn-danger">Back</a></div>
    </div>

        
       
        
    </div>
    <div class="card-body" style="background-color: #D3D3D3;">
    <table id="example">
        <thead>
        <tr>
            <th style="text-align: center;">Hotel Name</th>
            <th style="text-align: center;">Address</th>
            <th style="text-align: center;">Review Point</th>
            <th style="text-align: center;">Action</th>
        </tr>
        </thead>
        <?php
        while($row = mysqli_fetch_array($result)){



           

            ?>
        <tbody style="text-align: center;">
        
        <tr>
            <td><?php echo $row['hotel_name'] ?></td>
            <td><?php echo $row['hotel_address'] ?></td>
            <td><?php echo $row['star'] ?></td>
            <td>
                <a href="view_hotel_details1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
            </td>
        </tr>
       
        </tbody>
        <?php } ?>
    </table>
    </div> 

    
    <!-- <div class="card-footer">Reach before 4PM</div> -->
</div>
</div>

</div>

</div>
    


<?php
  
        

}else{
    echo "Data Not Found!";
}




}
elseif($_GET['search_item'] == 'Restaurant' || $_GET['search_item'] == 'restaurant'){


    $sql = "SELECT * FROM restaurants ORDER BY star DESC";



    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
    
        ?>
    
            <br><br><br>
    
    <div class="container">
    <div class="row">
    
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header" style="text-align: center; color: white; background-color: black;">
    
        <div class="row">
            <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Restaurant List</h2> </div>
            <div class="col-md-5" style="text-align: right;"><a href="index.html" class="btn btn-danger">Back</a></div>
        </div>
    
            
           
            
        </div>
        <div class="card-body" style="background-color: #D3D3D3;">
        <table id="example">
            <thead>
            <tr>
                <th style="text-align: center;">Restaurant Name</th>
                <th style="text-align: center;">Address</th>
                <th style="text-align: center;">Review Point</th>
                <th style="text-align: center;">Action</th>
            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result)){
    
    
    
               
    
                ?>
            <tbody style="text-align: center;">
            
            <tr>
                <td><?php echo $row['restaurant_name'] ?></td>
                <td><?php echo $row['restaurant_address'] ?></td>
                <td><?php echo $row['star'] ?></td>
                <td>
                    <a href="view_restaurant_details1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
                </td>
            </tr>
           
            </tbody>
            <?php } ?>
        </table>
        </div> 
    
        
        <!-- <div class="card-footer">Reach before 4PM</div> -->
    </div>
    </div>
    
    </div>
    
    </div>
        
    
    
    <?php
      
            
    
    }else{
        echo "Data Not Found!";
    }
    


}

elseif($_GET['search_item'] == 'Park' || $_GET['search_item'] == 'park'){


    $sql = "SELECT * FROM touristplaces WHERE tour_name='Thompson Park' or tour_name='Heaton Park' ORDER BY star DESC";



    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
    
        ?>
    
            <br><br><br>
    
    <div class="container">
    <div class="row">
    
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header" style="text-align: center; color: white; background-color: black;">
    
        <div class="row">
            <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Park List</h2> </div>
            <div class="col-md-5" style="text-align: right;"><a href="index.html" class="btn btn-danger">Back</a></div>
        </div>
    
            
           
            
        </div>
        <div class="card-body" style="background-color: #D3D3D3;">
        <table id="example">
            <thead>
            <tr>
                <th style="text-align: center;">Park Name</th>
                <th style="text-align: center;">Address</th>
                <th style="text-align: center;">Review Point</th>
                <th style="text-align: center;">Action</th>
            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_array($result)){
    
    
    
               
    
                ?>
            <tbody style="text-align: center;">
            
            <tr>
                <td><?php echo $row['tour_name'] ?></td>
                <td><?php echo $row['tour_address'] ?></td>
                <td><?php echo $row['star'] ?></td>
                <td>
                    <a href="view_restaurant_details1.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View Details</a>
                </td>
            </tr>
           
            </tbody>
            <?php } ?>
        </table>
        </div> 
    
        
        <!-- <div class="card-footer">Reach before 4PM</div> -->
    </div>
    </div>
    
    </div>
    
    </div>
        
    
    
    <?php
      
            
    
    }else{
        echo "Data Not Found!";
    }
    


}

else{

    echo "<p>No search item provided.</p>";
}





}
else {

    ?>

    <br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">No Search Data Found!!!</h1>
          
            <br>

            <a href="index.html" class="btn btn-success">Go Back To Home</a>
         
        </div>
        </div>
  
    </div>
  
</div>
            
              
<br><br>

<?php
}



?>


<br><br><br><br><br><br>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
           


</body>
</html>


<?php

