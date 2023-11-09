<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and store data in session
    $_SESSION['personal_info'] = $_POST;
    // Redirect to the next step
    header("Location: eform_step3.php");
    exit();
}
?>

<!DOCTYPE html lang="en">

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
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <div class="row ">
                <div class="row">
                    <div class="col-sm-12 flex-row flex-wrap d-flex align-items-center justify-content-center py-4 gap-3">
                        <img src="logo1.png"  style="width: 70px;">
                        <h3 class="text-center">Our Lady of the Roses Montessori Learning Center</h3></div>
                    </div>
                </div>
  
                <hr>
                <br>
                <h5>Name and Address of Person to be contacted in case of Emergency</h5>
                <div class="row my-3">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name" required>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="caddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter Address" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="rel" class="form-label">Relation</label>
                        <input type="text" class="form-control" id="rel" name="rel" placeholder="Enter Relation" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="cpnum" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="cpnum" name="cpnum" placeholder="Enter contact number" required>
                    </div>
                </div>
                <hr>
                <br>
                <h5>Learners Educational Background </h5>
                <br>
                <div class="row my-3">
                    <center><h6>Elementary School (where you completed Elementary Level Education)</h6></center>
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="schname" class="form-label">School Name</label>
                        <input type="text" class="form-control" id="schname" name="schname" placeholder="Enter School Name" required>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="schaddress" class="form-label">School Address</label>
                        <input type="text" class="form-control" id="schaddress" name="schaddress" placeholder="Enter School Address" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="yrcomp" class="form-label">Year of Completion</label>
                        <input type="number" class="form-control" id="yrcomp" name="yrcomp" placeholder="Enter Year of Completion" required>
                    </div>
                </div>
                <br>
                <div class="row my-3">
                    <center><h6>Junior High School (where you completed JHS / Grade 10)</h6></center>
                    <div class="col-sm-12 col-lg-4 my-2"> 
                        <label for="schnamej" class="form-label">School Name</label>
                        <input type="text" class="form-control" id="schnamej" name="schnamej" placeholder="Enter School Name" required>
                    </div>
                    <div class="col-sm-12 col-lg-4 my-2">
                        <label for="schaddressj" class="form-label">School Address</label>
                        <input type="text" class="form-control" id="schaddressj" name="schaddressj" placeholder="Enter School Address" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="yrcompj" class="form-label">Year of Completion</label>
                        <input type="number" class="form-control" id="yrcompj" name="yrcompj" placeholder="Enter Year of Completion" required>
                    </div>
                </div> 
                <button type="submit" class="btn btn-success mx-auto d-flex px-5 text-uppercase" id="next" name="submit">Next</button>
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
   