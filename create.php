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

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sweetalert2.min.css" rel="stylesheet">

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

      <div class="row">
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Create Record</h6>
                </div>
                      <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="p-5">
                            <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">STUDENT'S BASIC INFORMATION</h1>
                            </div>
                            <form class="user" id="frm">
                        
                                <div class="col-sm-12 mb-3">
                                  <label>First Name</label>
                                  <input type="text" class="form-control form-control-user" id="fname">
                                </div>
                                <div class="col-sm-12 mb-3">
                                  <label>Middle Name</label>
                                  <input type="text" class="form-control form-control-user" id="mname">
                                </div>
                              
                               
                                <div class="col-sm-12 mb-3">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control form-control-user" id="lname">
                                </div>

                                <div class="col-sm-12 mb-3">
                                  <label>Gender:</label>
                                    <select class="form-control" id="gender">
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                    </select>
                                </div>


                                <div class="col-sm-12 mb-3">
                                  <label>Birthdate</label>
                                  <input type="date" class="form-control form-control-user" placeholder="Birthdate" id="bdate">
                                </div>

                                <div class="col-sm-12 mb-3">
                                  <label>Address</label>
                                  <input type="text" class="form-control form-control-user" id="address">
                                </div>
                                
                              <hr>
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                Save
                              </button>
                              <button id="cancel" class="btn btn-danger btn-user btn-block">
                                Cancel
                              </button>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                      </div>
              </div>

            </div>

          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
     <?php include_once("footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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

  <script type="text/javascript">
     $("#logout").click(function(e) {
      e.preventDefault();
            Swal.fire({
              title: 'Confim Log-out!',
              text: "Are you sure you want to logout?",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, logout it anyway'
            }).then((result) => {
              if (result.value) {
                window.location.href = "logout.php";
              }
            })
     });

      $("#frm").submit(function(e) {
        e.preventDefault();
        fn=$('#fname').val();
        mn=$('#mname').val();
        ln=$('#lname').val();
        gn=$('#gender').val();
        bd=$('#bdate').val();
        ad=$('#address').val();


                if(fn=="" || mn=="" || ln=="" || gn=="" || bd=="" || ad==""){
                    Swal.fire(
                      'Error',
                      'Please fill all the Entries!',
                      'error'
                    )
                }
                else {

                        $.ajax({
                        url: 'create_rd.php',
                        type: 'POST',
                        data: {
                          fname: fn,
                          mname: mn,
                          lname: ln,
                          gender: gn,
                          birthdate: bd,
                          address: ad      
                        },
                        cache: false,
                        success: function(response) {
                              Swal.fire(
                                'Success!',
                                 response,
                                'success'
                              )

                               $('#frm').trigger("reset");
                               setTimeout(function(){  window.location.href = "display.php"; }, 2000);
                        }
                      });
                }
      });


      $("#cancel").click(function(e) {
      e.preventDefault();
        $('#frm').trigger("reset");
      });

</script>

</body>

</html>
