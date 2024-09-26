<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

    $id_data = $_GET['id'];


    sql = "SELECT * FROM hotels WHERE id = '$id_data'";

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

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtPyeJh4eS4e-SpkTgSvuXfXFyMQVc-co&libraries=places"></script>

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
<body onload="initMap()">




            

                <br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card">
        
            <div class="card-header" style="text-align: center; color: white; background-color: black;">
            <div class="row">
                <div class="col-md-7" style="text-align: right;"><h2 style="font-size: 25px;">Hotel Direction</h2> </div>
                <div class="col-md-5" style="text-align: right;"><a href="home.php" class="btn btn-danger">Back</a></div>
            </div>
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
         
            <!-- <img src="location/<?php echo $row['image']; ?>" width="700px" height="100px"> -->

            <div class="container">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Source Location" id="source">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $row['hotel_name'] ?>" placeholder="Destination Location" readonly>
            <input type="hidden" class="form-control" value="<?php echo $row['hotel_address'] ?>" placeholder="Destination Location" id="dest">
        </div>
        <button class="btn btn-primary" onclick="calcRoute()">Get Direction</button>
        <div id="map" style="height: 500px; width: 100%;">

        </div>
    </div>


            </div> 
            
            

           
            
        </div>
  
    </div>
  
</div>
            
              
<br><br>
           

           


</body>


<script>
    let map,directionsService,directionsRenderer
    let sourceAutocomplete, desAutocomplete
    function initMap(){
        map = new google.maps.Map(document.getElementById('map'),{
            center:{lat:37.7749,lng:-122.4194},
            zoom:13
        });

        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }

        google.maps.event.addListener(map,"click",function(event){
            this.setOptions({scrollwheel:true})
        })
        directionsService = new google.maps.DirectionsService()
        directionsRenderer = new google.maps.DirectionsRenderer()
        directionsRenderer.setMap(map)

        sourceAutocomplete = new google.maps.places.Autocomplete(
            document.getElementById('source')
        )
        desAutocomplete = new google.maps.places.Autocomplete(
            document.getElementById('dest')
        )
        
    }


    function calcRoute(){
        var source = document.getElementById('source').value
        var dest = document.getElementById('dest').value

        let request = {
            origin: source,
            destination: dest,
            travelMode: 'DRIVING'
        }

        directionsService.route(request, function(result,status){
            if(status == "OK"){
                directionsRenderer.setDirections(result)
            }
        })
    }



    function showPosition(position) {
    const lat = position.coords.latitude;
    const lng = position.coords.longitude;
    const location = {lat, lng};
    
    if (!map) {
        initMap();
    }

    map.setCenter(location);

    const marker = new google.maps.Marker({
        position: location,
        map: map,
        title: "You are here"
    });
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
}


</script>



</html>


<?php

}else{
    header("location: login.php");
    exit();
}
?>