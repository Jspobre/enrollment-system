<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and store data in session
    $_SESSION['step3_data'] = $_POST;
    // Redirect to the processing page
    header("Location: eform_process.php");
    exit();
}
?>

<!DOCTYPE html lang=en>
<html>
    
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Our Lady of the Roses Montessori Learning Center</title>
    <link rel="icon" href="logo.png">   
    <!-- <link  type="text/css" href="./plugins/bootstrap.min.css"> -->
    <script src="./plugins/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
          <style>
            .container{
                margin-top: 110px;
                background-color: white;
                opacity: 0.8;
                border-radius: 9px;
                padding-bottom: 10px;
            }
            .column{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            h3{
                padding-left: 8px;
            }
        
        .form-control[type="number"]::-webkit-inner-spin-button,
        .form-control[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
        }
        #next{
            border-radius: 1px;
            font-size: 15px;
        }
        #collapseContent {
            display: none;
            }
            .bold-text{
          font-weight: bold;
        }

          </style>
  <body >

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img src="logo.png" alt="Logo" class="navbar-brand" height="70" width="70">
        <div class="nav-title">Our Lady of the Roses Montessori Learning Center</div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link flex-center bold-text" aria-current="page" href="view_admission.php">
                        <i class="fa fa-fw fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bold-text" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cursor-pointer bold-text" id="logoutbtn" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="padding-bottom: 30px">
<form method="POST" action="eform_process.php" enctype="multipart/form-data">

            <div class="row ">
                <div class="row">
                    <div class="col-sm-12 flex-row flex-wrap d-flex align-items-center justify-content-center py-4 gap-3">
                        <img src="logo1.png"  style="width: 70px;">
                        <h3 class="text-center">Our Lady of the Roses Montessori Learning Center</h3></div>
                    </div>
                </div>
  
                <hr>
                <br>
                <h5>Education Information</h5>
                <div class="row">
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="glevel" class="form-label">Grade Level</label>
                        <select class="form-select form-control " aria-label="Large select" name="grlevel" id="grlevel" required>
                            <option disabled selected>Select</option>  
                            <option value="Grade 11" >Grade 11</option> 
                            <option value="Grade 12" >Grade 12</option> 
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="track" class="form-label">Track</label>
                        <select class="form-select form-control " aria-label="Large select" name="track" id="track" onchange="handleTrackChange(event)"  required> 
                            <!-- <option  disabled>Select Track</option>  -->
                            <option disabled selected>Select</option> 
                            <option value="Academic Track">Academic Track</option>  
                            <option value="Tech-Voc Track">Tech-Voc Track</option> 
                        </select>
                    </div>  
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="strand" class="form-label">Strand</label>
                        <select class="form-select form-control " aria-label="Large select" name="strand" id="strand"  required> 
                            <option disabled selected>Select</option> 
                            <option class="strand" value="General Academic Strand (GAS)" >General Academic Strand (GAS)</option> 
                            <option class="strand" value="Humanities and Social Sciences (HUMMS)">Humanities and Social Sciences (HUMMS)</option>  
                            <option class="track d-none" value="Automotive Servicing" >Automotive Servicing</option> 
                            <option class="track d-none" value="Electrical Installation and Maintenance">Electrical Installation and Maintenance</option> 
                            <option class="track d-none" value="Computer System Servicing">Computer System Servicing</option> 
                        </select>
                    </div>  
                </div>

                <div class="colapse" id="collapseContent">
                <div class="card card-body">
                <p>Since you are an incoming Grade 11 student, there are important documents needed.<br>Please upload the following documents in pdf form.</p>
                <div class="row">
                    <div class="col-3 my-2 ">
                <label for="complform" class="form-label">Completion Form / Certificate JHS</label>
                    </div>
                    <div class="col">
                            <input type="file" name="complform" id="complform">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 my-2 ">
                <label for="pics" class="form-label">1x1 picture</label>
                    </div>
                    <div class="col">
                            <input type="file" name="pics" id="pics">
                    </div>
                </div>

        </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-3 my-2 ">
                <label for="psa" class="form-label">PSA/NSO Birth Certificate</label>
                    </div>
                    <div class="col">
                            <input type="file" name="psa" id="psa" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 my-2 ">
                <label for="formcard" class="form-label">Form 138</label>
                    </div>
                    <div class="col">
                            <input type="file" name="formcard" id="formcard" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-success mx-auto d-flex px-5 text-uppercase" id="next" name="submit">Submit</button>
            </div>
        </form>
    </div>
    <script> 
        /* GET ALL HTML NODES THAT HAS A .CLASSNAME */
        /* asssigned to variable that will holde the nodelist/array of nodes */
        const track = document.querySelectorAll('.track');
        const strand = document.querySelectorAll('.strand');
        const oas = document.querySelectorAll('.oas');
        const ligao = document.querySelectorAll('.ligao');
        const polangui= document.querySelectorAll('.polangui');
        const albay = document.querySelectorAll('.albay');
        const camsur = document.querySelectorAll('.camsur');
        
        /* GET HTML NODE USING ID */
        const municipalityValue = document.getElementById('municipality');
        const strandNode = document.getElementById('strand');
        const brgy = document.getElementById('brgy'); 
 
        function handleTrackChange(event) { 
            strandNode.value = ""
            if(event.target.value == "Academic Track"){
                for(let i = 0; i < strand.length ; i++) {
                    strand[i].classList.remove("d-none");
                    strand[i].classList.add("d-block");
                    track[i].classList.remove("d-block");
                    track[i].classList.add("d-none");
                }
            }else{
                for(let i = 0; i < track.length ; i++) {
                    track[i].classList.remove("d-none");
                    track[i].classList.add("d-block");
                    strand[i].classList.remove("d-block");
                    strand[i].classList.add("d-none");
                }
            }
        }
 

        function handleProvinceChange(event) { 
            municipalityValue.value = ""
            brgy.value = "" 
            if(event.target.value == "Albay"){
                for(let i = 0; i<albay?.length ; i++){
                    albay[i].classList.remove("d-none");
                    albay[i].classList.add("d-block");
                    camsur[i].classList.remove("d-block");
                    camsur[i].classList.add("d-none");
                }
            } else if(event.target.value == "Camarines Sur"){
                for(let i=0; i<camsur?.length; i++){
                    albay[i].classList.add("d-none");
                    albay[i].classList.remove("d-block");
                    camsur[i].classList.add("d-block");
                    camsur[i].classList.remove("d-none");
                }
            }else{
                
                /*  */
                for(let i=0; i < 15; i++){
                    albay[i].classList.add("d-none");
                    albay[i].classList.remove("d-block");
                    camsur[i].classList.add("d-none");
                    camsur[i].classList.remove("d-block");
                }
            }
            
        }

        function handleMunicipalityChange(event) { 

            /* set the value to "" of brgy node */
            brgy.value = ""

            /* event.target.value */
            /* value of node, where the function is called or triggered */
            /*  */

            if (event.target.value === "Oas") {
                for (let i = 0; i < oas.length; i++) {
                    oas[i].classList.remove("d-none");
                    oas[i].classList.add("d-block");
                    ligao[i].classList.remove("d-block");
                    ligao[i].classList.add("d-none");
                }
            } else if (event.target.value === "Ligao") {
                for (let i = 0; i < ligao.length; i++) {
                    ligao[i].classList.remove("d-none");
                    ligao[i].classList.add("d-block");
                    oas[i].classList.remove("d-block");
                    oas[i].classList.add("d-none");
                    
                }
            }
            else if (event.target.value === "Polangui") {
                for (let i = 0; i < polangui.length; i++) {
                    polangui[i].classList.remove("d-none");
                    polangui[i].classList.add("d-block");
                    oas[i].classList.remove("d-block");
                    oas[i].classList.add("d-none");
                    ligao[i].classList.remove("d-block");
                    ligao[i].classList.add("d-none");
    }
}
        } 

        const grlevel = document.getElementById('grlevel');
        const collapseContent = document.getElementById('collapseContent');
        const complform = document.getElementById('complform')
        const pics = document.getElementById('pics')

        grlevel.addEventListener('change', function () {
        if (grlevel.value === 'Grade 11') {
            collapseContent.style.display = 'block'; // Show collapse
            complform.setAttribute("required", "")
            pics.setAttribute("required", "")
        } else {
            collapseContent.style.display = 'none'; // Hide collapse
            complform.removeAttribute("required")
            pics.removeAttribute("required")
        }
        });

        // Hide collapse content initially
        collapseContent.style.display = 'none';

    
    </script>
  </body>
   