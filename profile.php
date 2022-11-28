<?php
session_start();

$dbc=mysqli_connect("localhost","root","");
mysqli_select_db($dbc, "clinic_reservation"); 
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>My Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    
    <?php
        include 'header.php';
    ?>
    
    <style>
        html, body {
            overflow-x:hidden 
        } 
         
        h1{
            font-family: Georgia;
            font-size :45px;
            color: #475993;
            font-weight: bold;
        }  
        h2{
            font-family: Georgia;
            font-size :30px;
            color: #475993;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        h3{
            font-family: Georgia;
            font-size :25px;
            font-weight: bold;
        }
        p{
            font-size: 20px;
            font-family: Garamond; 
        }
        body{
            font-size: 20px;
            font-family: Garamond;
            background-image: url("Images/wallpaper1.jpg");
            background-size: auto;
            background-size: contain;
        }
        .line-1 {
            height: 2px;
            background: #475993;
            margin-bottom: 20px;
        }
        .title{
            margin-top: 40px;
            margin-bottom: 10px;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }

        /*content CSS*/
        .container{
            padding: 10px 100px 150px 100px;
        }
        .col{
            height: 450px;
            line-height: 40px;
        }
        .col img{
            width: 250px;
            height: 250px;
            border-radius: 50%;
        }
        .word1{
            color: #475993;
            font-weight: bold;
        }
        .word2{
            font-weight: normal;
            color: black;
        }
       
         /*mobile size CSS*/
       @media only screen and (max-width: 600px) {
            h1{
                font-family: Georgia;
                font-size :33px;
                color: #475993;
                font-weight: bold;    
            }
            .title{
                margin-bottom: 10px;
            }
            .container{
                padding: 0px 30px 250px 20px;
            }
            .col{
                height: 400px;
                line-height: 40px;
            }
        }
        
        </style>
        
    <body>

        <h1 class="title"><center>My Profile</center></h1>
            
            
            <div class="container">
                <div class="row justify-content-md-center">
                                           
                    <div class="col col-md-3" style="background-color: white;">
                        <span class="word1" ><p style="margin-top: 30px;">Name :  </span>
                        <span class="word1" ><p>Username  :  </span>
                        <span class="word1"><p>Gender  :  </span>
                        <span class="word1"><p>Date of Birth :  </span>
                        <span class="word1"><p>Phone Number  : </span>
                        <span class="word1"><p> E-mail :  </span>
                        <span class="word1"><p>Address :  </span>
                        <span class="word1"><p>ZIP or Postal Code :  </span>
                        <span class="word1"><p>City :  </span>
                        <span class="word1"><p>State :  </span>
                    </div>
                        
                    <div class="col col-md-6" style="background-color: white;">
                        
                        <?php
                            $userID = $_SESSION['identifier'];
                            
                            if(substr($userID, 0, 1)=="U"){
                                $res = mysqli_query($dbc,"Select * from user_table WHERE user_id='$userID'");
                                $queryResult = mysqli_num_rows($res);

                                if($queryResult > 0){
                                    while($row =mysqli_fetch_array($res)){
                                     
                                    
                                    ?>
                                     <span class="word2"><p style="margin-top: 30px;"><?php echo $row['user_name']?></p></span>

                                     <span class="word2"><?php echo $row['user_id']?></p></span>

                                     <span class="word2"><?php echo $row['user_gender']?></p></span></center>

                                     <span class="word2"><?php echo $row['user_dob']?></p></span>

                                     <span class="word2"><?php echo $row['user_phoneNo']?></p></span>

                                     <span class="word2"><?php echo $row['user_email']?></p></span>

                                     <span class="word2"><?php echo $row['user_address']?></p></span>

                                     <span class="word2"><?php echo $row['address_zip']?></p></span>
                                     
                                     <span class="word2"><?php echo $row['address_city']?></p></span>

                                     <span class="word2"><?php echo $row['address_state']?></p></span>

                            <?php } }}
                            
                            else if(substr($userID, 0, 1)=="D"){
                                                                      
                                        $res1 = mysqli_query($dbc,"Select * from doctor_table WHERE doctor_id='$userID'");
                                        $queryResult1 = mysqli_num_rows($res1);

                                        if($queryResult1 > 0){
                                            while($row1 =mysqli_fetch_array($res1)){
                                            
                                    ?>
                                     <span class="word2"><p style="margin-top: 30px;"><?php echo $row1['doctor_name']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_id']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_gender']?></p></span></center>

                                     <span class="word2"><?php echo $row1['doctor_dob']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_phoneNo']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_email']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_address']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_zip']?></p></span>
                                     
                                     <span class="word2"><?php echo $row1['doctor_city']?></p></span>

                                     <span class="word2"><?php echo $row1['doctor_state']?></p></span>
                                     
                                    <?php } }}?> 
                    </div>

                </div>
            </div>
        
        
         <footer>
            
            <P>Address : 18, Jalan Putih, 11500 Jelutong, Pulau Pinang</P>

            <P>Email : clinicharmony@gmail.com</p>

            <p>Phone number : 012-34567890</p>

            <a href="#"><img src="Images/facebookIcon.png" width="40" height="40"></a>
            &nbsp; &nbsp;<a href="#"><img src="Images/instagram.png" width="40" height="40"></a>
            &nbsp;<a href="#"><img src="Images/whatsapp.png" width="42" height="42"></a></td>

        </footer>
        
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>    
    </body>
</html>
