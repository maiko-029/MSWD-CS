<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PHP PRACTICE</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sweetalert2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

     <!-- Sidebar -->
    <?php include_once("sidebar.php"); ?>
    <!--End of Sidebar -->
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?></span>
                <i class="fas fa-user fa-fw"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" id="logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

      
      <!-- End of Main Content -->

      <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">INTAKE FORM</h1>
        </div>
            
          
          <div class="text-left">
            <label for="frm"><h3>IDENTIFYING DATA</h3></label>
          </div>

            <form class="user" id="frm">
            
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control " id="fname" placeholder="Name" name="fname">
                    </div>
                    
                    <div class="col-sm-6">
                        <input type="number" class="form-control " id="age" placeholder="Age" name="age">
                    </div>
                    
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control " id="address" placeholder="Address" name="address">
                    </div>

                    <div class="col-sm-6">
                        <input type="date" class="form-control " id="birthdate" placeholder="Birth Date" name="birthdate">
                    </div>
                </div>

                <div class="form-group ">
                    
                        <input type="text" class="form-control " id="birthplace" placeholder="Birth Place" name="birthplace">
                    
                </div>

                <div class="form-group">
                    
                        <select class="form-control " name="sector">
                            <option value="SECTOR">--SECTOR--</option>
                            <option value="CHILDREN">CHILDREN</option>
                            <option value="SOLO PARENT">SOLO PARENT</option>
                            <option value="VAWC">VAWC</option>
                            <option value="CERTIFICATION">CERTIFICATION</option>
                            <option value="CNSP">FINANCIAL ASSISTANCE</option>
                            <option value="FAMILY COUNSELLING">PRE-MARRIAGE COUNSELLING</option>
                            <option value="COUNSELLING">COUNSELLING</option>
                            <option value="SCS">SOCIAL CASE STUDY</option>
                        </select>
                    
                </div>
                


                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="number" class="form-control " id="cnumber" placeholder="Contact Number" name="cnumber">
                    </div>

                    <div class="col-sm-6">
                        <input type="text" class="form-control " id="religion" placeholder="Religion" name="religion">
                    </div>
                    
                    

                </div>
                  <hr color="black">
                  <div class="text-left">
                    <label for="frm"><h3>FAMILY COMPOSITION</h3></label>
                  </div>
                  <hr>
                  <div class="form-group row">
                   
                      <div class="col-sm-6">
                          <label for="hmnames">HouseHolds Member Name</label>
                          <input type="text" class="form-control " id="hmnames"  name="hmnames">
                      </div>

                    <div class="col-sm-6">
                        <label for="hmage">Age</label>
                        <input type="number" class="form-control " id="hmage" name="hmage">
                    </div>
                  </div> 

                  <div class="form-group row">
                      <div class="col-sm-6">
                          <label for="hmnames">Gender</label>
                          <input type="text" class="form-control " id="hmgender"  name="hmgender">
                      </div>

                    <div class="col-sm-6">
                        <label for="hmage">Relationship of the clients</label>
                        <input type="number" class="form-control " id="hmrs" name="hmrs">
                    </div>
                  </div> 

                  <div class="form-group row">
                    <hr>
                      <div class="col-sm-6">
                          <label for="hmnames">Education Attainment</label>
                          <input type="text" class="form-control " id="hmeduc"  name="hmeduc">
                      </div>

                    <div class="col-sm-6">
                        <label for="hmage">Occupation</label>
                        <input type="number" class="form-control " id="hmrs" name="hmrs">
                    </div>
                  </div> 

                  <div class="form-group">
                  <div>
                          <label for="hmnames">Estimated Monthly Income</label>
                          <input type="text" class="form-control " id="hmincome"  name="hmincome">
                  </div>
                  </div>

                  <hr color="black">

                  <div class="form-group">
                      

                      <div>
                          <label for="hmnames">Problem</label>
                          <textarea class="form-control input-lg" id="hmproblem"  name="hmproblem"></textarea>
                      </div>

                  </div> 

                    <div class="form-group">
                  
                      <div>
                          <label for="hmnames">Solution</label>
                          <textarea type="text" class="form-control " id="hmsolution"  name="hmsolution"></textarea>
                      </div>
                    </div> 

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                    Save Intake Form
                </button>
                <button id="cancel" class="btn btn-danger btn-user btn-block">
                 Cancel
                </button>

             


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="others.js"></script>

  

  

  <script type="text/javascript">

$("#cancel").click(function(e) {
 e.preventDefault();

   $('#fname').val('');
   $('#lname').val('');
   $('#age').val('');
   $('#gender').val('');
   $('#address').val('');
   $('#birthdate').val('');
   $('#birthplace').val('');
   $('#educ').val('');
   $('#sector').val('');
   $('#cnumber').val('');
   $('#religion').val('');
});

 $("#frm").submit(function(e) {
   e.preventDefault();

   

   fn=$('#fname').val();
   ln=$('#lname').val();
   age=$('#age').val();
   gn=$('#gender').val();
   ad=$('#address').val();
   bd=$('#birthdate').val();
   bp=$('#birthplace').val();
   ed=$('#educ').val();
   sc=$('#sector').val();
   cn=$('#cnumber').val();
   rg=$('#religion').val();

   if(fn=="" || ln=="" ){
               Swal.fire(
                 'Error',
                 'Please fill all the Entries!',
                 'error'
               )
   }
   else {
             
               $.ajax({
                   url: 'client_rd.php',
                   type: 'POST',
                   data: {
                     fname: fn,
                     lname: ln,
                     age: age,
                     gender: gn,
                     address: ad,
                     birthdate: bd,
                     birthplace: bp,
                     educ: ed,
                     sector: sc,
                     cnumber: cn,
                     religion: rg

                             
                   },
                   cache: false,
                   success: function(response) {
                         Swal.fire(
                           'Success!',
                            response,
                           'success'
                         )

                           $('#fname').val('');
                           $('#lname').val('');
                           $('#age').val('');
                           $('#gender').val('');
                           $('#address').val('');
                           $('#birthdate').val('');
                           $('#birthplace').val('');
                           $('#educ').val('');
                           $('#sector').val('');
                           $('#cnumber').val('');
                           $('#religion').val('');
                        
                   }
               });
         
         
   }

});
 
</script>

</body>

</html>