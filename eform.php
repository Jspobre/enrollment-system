<?php 
    // UNCOMMENT MO NALANG KADING CONNECTION 
    require './connection.php'



    
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
    <div class="progress my-3">
    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        0%
    </div>
</div>

        <form method="POST" action="./eform_process.php" enctype="multipart/form-data">
            <div class="row ">
                <div class="row">
                    <div class="col-sm-12 flex-row flex-wrap d-flex align-items-center justify-content-center py-4 gap-3">
                        <img src="logo1.png"  style="width: 70px;">
                        <h3 class="text-center">Our Lady of the Roses Montessori Learning Center</h3></div>
                    </div>
                </div>
                <fieldset id="fieldset1" >
                <div class="row my-3">
                    <div class="col-lg-12"> 
                        <label for="formControlInput" class="form-label">Learner Reference Number</label>
                        <input type="number" class="form-control" name="lrn" id="lrn" placeholder="Enter LRN" style="max-width: 500px;" required>
                    </div>
                </div>
                <hr>
                <h5>Personal Information</h5>
                <div class="row my-3">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="exename" class="form-label">Extension Name</label>
                        <input type="text" class="form-control" id="extension" name="extension" placeholder="eg. Jr. Sr.">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="formControlInput" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="formControlInput" name="birthdate" required>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" class="form-control" id="height" name="height" placeholder="Enter height (in)" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter weight (kg)" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="status" class="form-label">Civil Status</label>
                        <select class="form-select form-control " aria-label="Large select" name="cstatus" id="cstatus" required>
                            <option selected="" disabled>Select status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option> 
                            <option value="Seperated">Seperated</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter Nationality" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="placeofbirth" class="form-label">Place of Birth</label>
                        <input type="text" class="form-control " id="place_birth" name="place_birth" placeholder="Enter place of birth" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="sex" class="form-label">Sex</label>
                        <select class="form-select form-control " aria-label="Large select" name="sex" id="sex" > 
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>  
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-6 my-2"> 
                        <label for="religion" class="form-label">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter Religion       " required>
                    </div>
                    <div class="col-sm-12 col-lg-6 my-2">
                        <label for="cnumber" class="form-label">Contact Number</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number" required>
                    </div>  
                </div>
                <div class="row">
                <div class="col-sm-12 col-lg-3 my-2"> 
                         <label for="province" class="form-label">Province</label>
                        <input type="text" class="form-control" id="province" name="province" placeholder="Enter province" required>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="municipality" class="form-label">Municipality</label>
                        <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter municipality" required>
                    </div>
                    <div class="col-sm-12 col-lg-3 my-2"> 
                        <label for="brgy" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="brgy" name="brgy" placeholder="Enter barangay" required>
                    </div>
                    <div class="col-sm-12  col-lg-3 my-2">
                        <label for="purok" class="form-label">Purok</label>
                        <input type="varchar" class="form-control " id="purok" name="purok" placeholder="Enter Street/Purok" required>
                    </div>
                </div>
                <br>
                <div>
                <button type="submit "class="btn btn-success mx-auto d-flex px-5 text-uppercase" id="next" name="submit"> Next </button>
                </div>
        

                </fieldset>

                <hr>
                <br>


                <fieldset id="fieldset2" style="display: none;">
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
                <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-success mx-auto d-flex px-5 text-uppercase" id="previous" name="submit">Previous</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success mx-auto d-flex px-5 text-uppercase" id="next" name="submit">Next</button>
                </div>
          
            </div>

    

                </fieldset>
                <hr>


                <fieldset id="fieldset3" style="display: none;">
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
                </fieldset>
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
   

    function nextStep(step) {
        const currentFieldset = document.getElementById('fieldset' + step);
        const nextFieldset = document.getElementById('fieldset' + (step + 1));
        const progressBar = document.querySelector('.progress-bar');

        // Your logic to validate fields and navigate to the next step

        // Hide the current fieldset
        if (currentFieldset) {
            currentFieldset.style.display = 'none';

            // Show the next fieldset
            if (nextFieldset) {
                nextFieldset.style.display = 'block';

                // Update the progress bar
                const totalSteps = 3;
                const percent = (step / totalSteps) * 100;
                progressBar.style.width = percent + '%';
                progressBar.setAttribute('aria-valuenow', percent);
            }

            // If it's the last step, change the "Next" button to "Submit"
            if (step === 2) {
                document.getElementById('submitBtn').style.display = 'block';
            }
        }
    }

    document.getElementById('next').addEventListener('click', function() {
    nextStep(1);  // assuming you want to move to the next step when the button is clicked


    
});


function updateProgressBar(step, totalSteps) {
        const progressBar = document.querySelector('.progress-bar');
        const percent = (step / totalSteps) * 100;

        // Update the width and text of the progress bar
        progressBar.style.width = percent + '%';
        progressBar.setAttribute('aria-valuenow', percent);
        progressBar.innerText = percent + '%';
    }

    // Example: Update progress bar to 25% for the first step out of 4 steps
    updateProgressBar(1, 4);
    
    </script>
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="logout">
                    Are you sure you want to log out?
                    All data will be erased
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="logout.php" class="btn btn-primary">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="./plugins/bootstrap.bundle.min.js"></script>
    <script src="./plugins/bootstrap.min.js"></script>

  </body> 
</html>