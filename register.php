<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
        <head>
        <title>Clinic Harmony</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    
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
        .navbar-nav a:link {
            font-family: Georgia;
            font-size: 22px;
            text-decoration: none;
            text-align: center;
        }
        .navbar-light .navbar-nav .nav-link{
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:visited {
            color: black;
        }
        .navbar-light .navbar-nav .nav-link:hover{
            background-color: #475993;
            color: white;
            border-radius: .5rem;
        }
        @media screen and (min-width: 992px){
            .navbar-brand img{
                width: 100px;
            }
            .navbar .container-fluid{
                flex-direction: column;
            }
            .navbar .navbar-nav .nav-item{
                padding: .5em 1em;
            }
        }
        .navbar-brand{
            margin-right: 0px;
        }
        .navbar-toggler {
           border: 0 !important;
       }

       .navbar-toggler:focus,
       .navbar-toggler:active,
       .navbar-toggler-icon:focus {
           outline: none !important;
           box-shadow: none !important;
           border: 0 !important;
           align-content: right;
       }

       /* Lines of the Toggler */
       .toggler-icon{
           width: 30px;
           height: 3px;
           background-color: #e74c3c;
           display: block;
           transition: all 0.2s;
       }

       /* Adds Space between the lines */
       .middle-bar{
           margin: 5px auto;
       }

       /* State when navbar is opened (START) */
       .navbar-toggler .top-bar {
           transform: rotate(45deg);
           transform-origin: 10% 10%;
       }

       .navbar-toggler .middle-bar {
           opacity: 0;
           filter: alpha(opacity=0);
       }

       .navbar-toggler .bottom-bar {
           transform: rotate(-45deg);
           transform-origin: 10% 90%;
       }
       /* State when navbar is opened (END) */

       /* State when navbar is collapsed (START) */
       .navbar-toggler.collapsed .top-bar {
           transform: rotate(0);
       }

       .navbar-toggler.collapsed .middle-bar {
           opacity: 1;
           filter: alpha(opacity=100);
       }

       .navbar-toggler.collapsed .bottom-bar {
           transform: rotate(0);
       }
       /* State when navbar is collapsed (END) */

       /* Color of Toggler when collapsed */
       .navbar-toggler.collapsed .toggler-icon {
           background-color: #777777;
       }
        
       .col{
           vertical-align: top;
           line-height: 40px;
       }
       .img{
            width: 100%;
            height: 430px;
            margin-right: 30px;
        }
        #content{
            padding-left: 70px;
            padding-right: 50px;
        }
        #content td{
            width: 40%;
        }
        #content2{
            padding-left: 70px;
            padding-right: 50px;
        }
        #content2 td{
            width: 100%;
        }
        footer{
            width:100%;
            text-align: center;
            background-color: #475993;
            color: white;
            padding: 10px 0px 10px 0px;
        }
        
        /*register form*/
        form{
            padding: 0px 200px 0px 200px;
        }
        .form-label{
            margin-top: 30px;
            font-weight: bold;
        }
       
        .btn {
            font-family: Georgia;
            font-size: 20px;
            background-color: #475993;
            border: 3px solid #475993;
            color: white;
            padding: 16px 32px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 70px;
            margin-top: 30px;
        }
        .btn:hover{
            font-family: Georgia;
            font-size: 20px;
            background-color: #475993;
            border: 3px solid #475993;
            color: #475993;
            padding: 16px 32px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 70px;
            margin-top: 30px;
       }
       .form-control{
            border-radius: .5rem;
            border:#33485d solid;
            padding : 15px 15px 15px 15px;
       }
       ::placeholder{
            font-size: 20px;
            font-family: Garamond; 
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
            .navbar-toggler.collapsed .toggler-icon {
                margin-left: 350px;
            }
            .toggler-icon {
                margin-left: 350px;
            }
            .navbar-brand{
                margin-right: 0px;
                width : 50px;
                height: 80px;
            }
            .navbar-brand .title{
                font-size: 30px;
                margin-left: auto;
                margin-right: auto;
            }
            .navbar-nav a:link {
                font-family: Georgia;
                font-size: 22px;
                text-decoration: none;
                text-align: center;
            }
            .navbar-light .navbar-nav .nav-link{
                color: black;
            }
            .navbar-light .navbar-nav .nav-link:visited {
                color: black;
            }
            .navbar-light .navbar-nav .nav-link:hover{
                background-color: #475993;
                color: white;
            }
            .col{
                padding: 0px 55px 30px 55px;
                line-height: 50px;
            }
            .img{
                width: 320px;
                height: 280px;
                margin-right: 30px;
            }
            form{
                padding: 0px 20px 0px 20px;
            }
    </style>
    
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="homepage.html"> <img src="Images/Logo.png" width="110" height="100" align="center"></a><h1>Clinic Harmony </h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php" style="background-color: #475993; color: white; border-radius: .5rem;">Register</a>
                        </li>
                    </ul>
                    
                </div>
        </div>
    </nav>
        
        <div class="line-1"></div>

            <h1 class="title"><center>Register</center></h1>
           
            <form action="php_rest_clinicReservation/api/post/create.php"  method="post" class="row g-3 needs-validation" novalidate>
 
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Username : </label>
                <input name="username" type="text" class="form-control  form-control-lg" id="validationCustom01" placeholder="Enter your username" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please provide a username.
                </div>
            </div>
                
           <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Password :</label>
                <div class="col-auto">
                  <input name="password" type="password" id="validationCustom03" class="form-control  form-control-lg" aria-describedby="passwordHelpInline" required>
                </div>
                <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                  </span>
                </div>
                <div class="invalid-feedback">
                      Please provide a password.
                </div>
            </div>
                
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Name : </label>
                <input name="name" type="text" class="form-control  form-control-lg" id="validationCustom02" placeholder="Enter your name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a name.
                </div>
            </div>
                
            <div class="col-md-6">
                <label for="validationFormCheck1" class="form-label">Gender </label>
                
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="validationFormCheck1" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck1" value="male">Male</label>
                </div>
                
                <div class="form-check mb-3">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck2" value="female">Female</label>
                    <div class="invalid-feedback">
                        Please select your gender.
                    </div>
                </div>
           </div>
            
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Date of Birth : </label>
              <input type='date' id='dateBirth' class="form-control  form-control-lg" name='dateBirth' required>
              <div class="invalid-feedback">
                Please provide select a date of birth.
              </div>
            </div>
                
            <div class="col-md-6"></div>      
           
            <div class="col-md-6">
                <label for="validationCustom06" class="form-label">Address : </label>
                <input name="address" type="text" class="form-control  form-control-lg" id="validationCustom06" placeholder="Enter your address" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide an address.
                </div>
            </div>
           
           <div class="col-md-6">
                <label for="validationCustom07" class="form-label">City : </label>
                <input name="city" type="text" class="form-control  form-control-lg" id="validationCustom07" placeholder="Enter your city" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a city.
                </div>
            </div>
           
           <div class="col-md-6">
                <label for="validationCustom08" class="form-label">ZIP or Postal Code : </label>
                <input name="zip" type="text" class="form-control form-control-lg" id="validationCustom08" placeholder="XXXXX" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a ZIP or postal code.
                </div>
            </div>
           
           <div class="col-md-6">
                <label for="validationCustom09" class="form-label">State : </label>
                <input name="state" type="text" class="form-control form-control-lg" id="validationCustom09" placeholder="Enter your state" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a state.
                </div>
            </div>
           
           <div class="col-md-6">
                <label for="validationCustom09" class="form-label">Email : </label>
                <input name="email" type="text" class="form-control form-control-lg" id="validationCustom09" placeholder="Enter your state" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a state.
                </div>
            </div>
           
           <div class="col-md-6">
                <label for="validationCustom10" class="form-label">Phone number : </label>
                <input name="phoneNo" type="text" class="form-control form-control-lg" id="validationCustom10" placeholder="Enter your phone number" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                      Please provide a state.
                </div>
            </div>        
          
           
            <div class="col-6" align="right">
                <input class="btn" name="submit" type="submit" value="Submit">
            </div>
                <div class="col-6">
                <button class="btn btn-primary" type="reset">Reset</button>
            </div>
</form>
        
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
        
        <script>
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                  .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                      if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                      }

                      form.classList.add('was-validated')
                    }, false)
                  })
              })()
        </script>
            
    </body>
</html>

