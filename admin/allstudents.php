<?php
$conn = mysqli_connect("localhost", "root", "", "enrollment");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>




<?php
include_once "connection.php";
?>



<!DOCTYPE html lang=en>
<html>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="indexstyle.css"> 
    <title>Admin</title>
    <link rel="icon" href="logo.png">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

    <script src="../plugins/popper.min.js"></script>
    

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


<head>

</head>
<style>
.btn-clicked {
        background-color: #ffc107; /* Change to the color you prefer */
        color: #000000; /* Change to the color you prefer */
    }

table, td {
border-collapse: collapse;
color: #808080;
font-family: monospace;
font-size: 15px;
text-align: center;
border: 1px solid #ddd;
padding: 10px 15px;
}
th {
background-color:#2F539B;
color: white;
border: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2}

h3,h6{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
    color:dimgrey;
}
.status-button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  .approved {
    background-color: #4CAF50;
    color: white;
    cursor: not-allowed;
  }
  .center-div {
            text-align: center;
        }
</style>


<body class="width-fix ">
    <!-- SIDEBAR -->
    <?php include "./sidebar.php";  ?>
    
    <div id="content"  class="container-fluid py-4 main-container">
        <div class="row">
        <div class="center-div">
    <h1>Senior High School</h1>
</div>
            <div class="col-md-12">

            <!-- FILTER BUTTONS FOR DISPLAY -->
                <div class="filter-btn-container container-fluid mb-3">
                    <div class="row">
                  <!-- ... Your existing HTML code ... -->
                  <div class="mb-2 col-md-2">

               
    <p class="mb-0">Select Educational Level</p>
<div class="dropdown-grade">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="gradeDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Educational Level
  </button>
  <div class="dropdown-menu" aria-labelledby="gradeDropdown">
    <button class="dropdown-item" id="shsButton">Senior High School</button>
    <button class="dropdown-item" id="elementaryButton">Elementary</button>
  </div>
</div>

<!--        <div class="btn-group">-->
<!--  <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--    Select Educational Level-->
<!--  </button>-->
<!--  <div class="dropdown-menu">-->
<!--    <button class="dropdown-item" id="shsButton">SHS</button>-->
<!--    <button class="dropdown-item" id="elementaryButton">Elementary</button>-->
<!--  </div>-->
<!--</div>-->
</div>

<script>
    // Add click event listeners to the buttons
    document.getElementById("shsButton").addEventListener("click", function() {
        // Remove the 'btn-clicked' class from the other button
        document.getElementById("elementaryButton").classList.remove("btn-clicked");
        // Add the 'btn-clicked' class to the clicked button
        this.classList.add("btn-clicked");
        // Navigate to the specified file when SHS button is clicked
        window.location.href = "allstudents.php";
    });

    document.getElementById("elementaryButton").addEventListener("click", function() {
        // Remove the 'btn-clicked' class from the other button
        document.getElementById("shsButton").classList.remove("btn-clicked");
        // Add the 'btn-clicked' class to the clicked button
        this.classList.add("btn-clicked");
        // Navigate to the specified file when Elementary button is clicked
        window.location.href = "allstudents_elem.php";
    });
</script>




<div class="row">

    
<div class="mb-2 col-md-2">
    
    <p class="mb-0">Select Year Level</p>
    <div class="dropdown-grade">
        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="gradeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select a Grade
        </button>
        <div class="dropdown-menu" aria-labelledby="gradeDropdown">
            <button class="dropdown-item filter-btn filter-grade-btn" data-filter="Grade 11">Grade 11</button>
            <button class="dropdown-item filter-btn filter-grade-btn" data-filter="Grade 12">Grade 12</button>
     
        
        </div>
    </div>

</div>
<div class="mb-2 col-md-10">
                                <p class="mb-0">Select Strand</p>
                                <div class="dropdown">
    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="strandDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        General Academic Strand (GAS)
    </button>
    <div class="dropdown-menu" aria-labelledby="strandDropdown">
        <button class="dropdown-item filter-btn filter-strand-btn" data-filter="General Academic Strand (GAS)">General Academic Strand (GAS) - St. Michael</button>
        <button class="dropdown-item filter-btn filter-strand-btn" data-filter="Humanities and Social Sciences (HUMMS)">Humanities and Social Sciences (HUMMS) - St. Thomas</button>
        <button class="dropdown-item filter-btn filter-strand-btn" data-filter="Automotive Servicing">Automotive Servicing - St. Joseph</button>
        <button class="dropdown-item filter-btn filter-strand-btn" data-filter="Electrical Installation and Maintenance">Electrical Installation and Maintenance - St. Padre Pio</button>
        <button class="dropdown-item filter-btn filter-strand-btn" data-filter="Computer System Servicing">Computer System Servicing - St. Lucy</button>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#strandDropdown + .dropdown-menu .dropdown-item").click(function () {
            var selectedText = $(this).text();
            $("#strandDropdown").text(selectedText);
        });
    });
</script>

                            </div>
</div>


<script>
    $(document).ready(function () {
        // Set the initial text to "Grade 11"
        $("#gradeDropdown").text("Grade 11");

        // Handle click events to update the text and toggle the "Select Strand" dropdown visibility
        $("#gradeDropdown + .dropdown-menu .dropdown-item").click(function () {
            var selectedText = $(this).text();
            $("#gradeDropdown").text(selectedText);

            if (selectedText === "Grade 11" || selectedText === "Grade 12") {
                $("#strandDropdown").show();
            } else {
                $("#strandDropdown").hide();
            }
        });
    });
    
     $(document).ready(function () {
        // Set the initial text to "Grade 11"
        $("#gradeDropdown1").text("Senior High School");

   
    });
    document.addEventListener("DOMContentLoaded", () => {
    const grade1Button = document.getElementById("grade1Button");
    const grade2Button = document.getElementById("grade2Button");
    const grade3Button = document.getElementById("grade3Button");
    const grade4Button = document.getElementById("grade4Button");
    const grade5Button = document.getElementById("grade5Button");
    const grade6Button = document.getElementById("grade6Button");

    if (grade1Button) {
        grade1Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    if (grade2Button) {
        grade2Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    if (grade3Button) {
        grade3Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    if (grade4Button) {
        grade4Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    if (grade5Button) {
        grade5Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    if (grade6Button) {
        grade6Button.addEventListener("click", () => {
            window.location.href = "allstudents_elem.php";
        });
    }

    // ... other initialization code ...
});


</script>

<!-- ... Your existing HTML code ... -->

                            </div>
        
                            <!-- <div class="mb-2 col-md-10">
    <label for="filterdropdown" class="form-label">Select Strand</label>
    <select id="filterdropdown" class="form-select">
        <option value="General Academic Strand (GAS)">General Academic Strand (GAS)</option>
        <option value="Humanitites and Social Sciences (HUMMS)">Humanitites and Social Sciences (HUMMS)</option>
        <option value="Automotive Servicing">Automotive Servicing</option>
        <option value="Electrical Installation and Maintenance">Electrical Installation and Maintenance</option>
        <option value="Computer System Servicing">Computer System Servicing</option>
    </select>
</div> -->

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="mb-0">Admin Options</p>
                            <div>
                                <button class="btn btn-outline-success manage me-3">Manage Student</button>
                                <button class="btn btn-outline-success view">View Class List</button>
                            </div>
                        </div>
                        <div class="col-md-9 hidden class-filter-btns">
                            <p class="mb-0">Select Sections</p>
    
    <div class="dropdown">
    <button class="btn btn-outline-success dropdown-toggle" type="button" id="sectionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select a Section
    </button>
    <div class="dropdown-menu" aria-labelledby="sectionDropdown">
        <button class="dropdown-item class" data-filter="A">Section A</button>
        <button class="dropdown-item class" data-filter="B">Section B</button>
        <button class="dropdown-item class" data-filter="C">Section C</button>
        <button class="dropdown-item class" data-filter="D">Section D</button>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#sectionDropdown + .dropdown-menu .dropdown-item").click(function () {
            var selectedText = $(this).text();
            $("#sectionDropdown").text(selectedText);
        });
    });
</script>

</div>
                        </div>
                    </div>
                </div>
            
            <!-- MAIN CONTENT -->
            <section class="container-fluid" id="mainParent">
                <div class="row mb-2">
                    
                    <div class="col-md-12 text-center">
                        <h3 class="current-filter" >Grade 11 - General Academic Strand (GAS) -  St. Michael</h3>
                    </div>
                </div>
                <div class="container-fluid" id="main">

                    <!-- Column title -->
                    <div class="row border-bottom mb-2 bg-dark-subtle px-2">
                        <div class="col-md-2 p-0">
                            <p class="m-0">LRN</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <p class="m-0">Name</p>
                        </div>
                        <div class="col-md-1 p-0">
                            <p class="m-0">Yr Level</p>
                        </div>
                        <div class="col-md-3 p-0">
                            <p class="m-0">Strand</p>
                        </div>
                        <div class="col-md-1 p-0">
                            <p class="m-0">Status</p>
                        </div>
                        <div class="col-md-2 p-0">
                            <p class="m-0">Action</p>
                        </div>
                    </div>
    
                    <!-- LIST -->
                    <!-- INDIVIDUAL INFO -->
                    <div id="individual-info-container" class="">
                        <!-- ACTUAL DATA WILL BE INSERTED DYNAMICALLY -->
                        
                    </div>
                    <!-- END OF INDIVIDUAL INFO -->
                </div>
                
            </section>
            </div>
        </div>

    </div>

    <div class="modal fade " id="studentDetailsModal" tabindex="-1" role="dialog" aria-labelledby="studentDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center" style="background-color: steelblue;">
        <img src="logo.png" alt="Logo" class="logo-img" width="100" height="50">

        <h5 class="modal-title fs-3 text-white" id="studentDetailsModalLabel" style="margin-left: 10px;">Our Lady of the Roses Montessori Learning Center</h5>
      </div>
      <div class="modal-body container-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger close-btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="./index.js"></script>

<script src="./allstudent.js"></script>





  
</body>
</html>