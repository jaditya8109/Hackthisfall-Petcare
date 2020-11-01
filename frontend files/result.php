<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'dogdb');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Predict Breed</title>
</head>
<body>
    <section id="result">
        <div class="container-fluid nav_div ">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-sm navbar-dark">
                        
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaritems">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbaritems">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> PetCare </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid landing_page_content">
            <div class="container-fluid">
                <div class="row  ">
                    <div class="offset-md-1 col-md-4 giveborder align-self-center">
                        <div class="row justify-content-center">
                            
                            
                            
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5 noboreder">
                    
                        <h1 style="color: #3E190A;">About your Dog</h1>
                        <?php 
                        $q  = " SELECT * FROM `breed details` ";
                        $query = mysqli_query($con, $q);
   
                        while ($rows = mysqli_fetch_array($query) ) {
                            if($rows['Breed'] == "Foxhound"){ 
                        ?>
                        <p style="font-size: 1.25em;"> <?php echo $rows['About']  ?> </p>
                            <?php } ?>  
                        <?php } ?>

                        
                        
                        <h1 style="color: black;">Origin</h1>
                        <?php 
                        $q  = " SELECT * FROM `breed details` ";
                        $query = mysqli_query($con, $q);
   
                        while ($rows = mysqli_fetch_array($query) ) {
                            if($rows['Breed'] == "Foxhound"){ 
                        ?>
                        <h3 style="color: ;"> <?php echo $rows['Origin']  ?> </h3> 
                            <?php } ?>  
                        <?php } ?>
                                
                        
                        
                        <h1 style="color: #3E190A;">Life Span</h1>
                        
                        <?php 
                        $q  = " SELECT * FROM `breed details` ";
                        $query = mysqli_query($con, $q);
   
                        while ($rows = mysqli_fetch_array($query) ) {
                            if ($rows['Breed'] == "Foxhound") { 
                        ?>
                        <p style="font-size: 1.25em;"> <?php echo $rows['Life_span']  ?> </p>
                            <?php }  
                         } ?>
                                
                        
                    </div>
                </div>
                <div class="row " style="padding-bottom:15vh;">
                    <div class="offset-md-1 col-md-4">
                        <h1 style="color: #3E190A;">Breed</h1>
                        <?php 
                        $q  = " SELECT * FROM `breed details` ";
                        $query = mysqli_query($con, $q);
   
                        while ($rows = mysqli_fetch_array($query) ) {
                            if($rows['Breed'] == "Foxhound"){ 
                        ?>
                        <h2 style="font-size: 1.25em;"> <?php echo $rows['Breed']  ?> </h2>
                            <?php } ?>  
                        <?php } ?>    
                    </div>
                </div>
            </div>   
    </section>
  

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>