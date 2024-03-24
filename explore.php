<?php
include 'assets/php/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ancecode">
    <meta name="description" content="website to simplify locating rental houses where you want to live">
    <meta name="" content="">
    <meta name="" content="">
    <meta name="" content="">
    <meta name="" content="">
    <link type="text/css" rel="stylesheet" href="assets/css/style1.css">
    <link type="text/css" rel="stylesheet" href="assets/css/responce.css">
    <link type="icon" href="assets/images/logo.png">

    <title> Explore </title>
</head>

<body>

    <section class="welcome_page_ex">
        <br>


        <?php
        //User_ID Upload_ID image_url House_Number House_Type HouseLocation Rent Description Uploaded_at
           $findinfo= mysqli_query($connect, "select * from house_description ORDER BY Upload_ID ASC");
           if(mysqli_num_rows($findinfo) > 0){
            while(mysqli_fetch_assoc($findinfo)){   
            $printinfo= mysqli_fetch_assoc($findinfo);
            $id =  $printinfo['Upload_ID'];
            $housenumber = $printinfo['House_Number'];
            $HouseType = $printinfo['House_Type'];
            $Location = $printinfo['HouseLocation'];
            $houserent = $printinfo['Rent'];
            $Description = $printinfo['Description'];
            $UploadedOn = $printinfo['Uploaded_at'];
             // $searchimage = mysqli_query($connect, "select * from images ORDER BY image_ID DESC");
            //if(mysqli_num_rows($searchimage) > 0){
             // while($image = mysqli_fetch_assoc($searchimage)){ 
      echo  "<section class='uploadview'>
      <div class='buttons'>
      <button type=  'button' id='button_show' onclick='show_details$id()' class='button_show'> House Details</button>
      <button type='button' id='button_close' onclick='close_details$id()' class='button_close'> Hide Details</button>
      </div>
            <div class='uploaded'>
       <img src='assets/uploads/1.jpg' width='97%' alt='house image'>
       </div>";

        echo"
        <div id='details' class='viewleft'>

            <div class='statusview0'>

                House Number:
                <hr>

            </div>
            <div class='statusview1'>
                House Type:
                <hr>
                $HouseType
            </div>
            <div class='statusview0'>
                Rent:
                <hr>
                $houserent
            </div>
            <div class='statusview1'>
                Location:
                <hr>
                $Location
            </div>
            <div class='statusview0'>
                Posted By:
                <hr>

            </div>
            <div class='statusview1'>
                Phone Number:
                <hr>

            </div>
            <div class='statusview0'>
                Posted At:
                <hr>
                $UploadedOn
            </div>

        </div>
        <div class='viewdown'>
            Description:
            <hr>
            $Description
        </div>

    </section>";

   echo " <script type='text/javascript'>
    function show_details$id() {
        document.getElementById('details').style.display = 'block';
        document.getElementById('button_show').style.display = 'none';
        document.getElementById('button_close').style.display = 'block';
    }
    </script>

    <script type='text/javascript'>
    function close_details$id() {
        document.getElementById('details').style.display = 'none';
        document.getElementById('button_show').style.display = 'block';
        document.getElementById('button_close').style.display = 'none';
    }
    </script>";

}
 }
 else{
    echo"<script type='text/javascript> alert('only one house found') </script>";
 }?>
</body>

</html>