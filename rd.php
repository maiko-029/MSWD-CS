<?php 
session_start();

require_once('dbcontroller.php');
$dbhandler = new DBController();

if($_SERVER['REQUEST_METHOD']==='GET'){
 
    $id=$_GET['id'];
    $_SESSION['id']=$id;

    $sql = "SELECT * FROM client WHERE id='$id'";

    $result=$dbhandler->runQuery($sql);
    $numData=$dbhandler->numRows($sql);

    if ($numData > 0) {
        if($numData==1) {
            foreach ($result as $key => $value) {
              $fname = $value['fname'];
              $lname = $value['lname'];
              $age = $value['age'];
              $gender = $value['gender'];
              $address = $value['address'];
              $birthdate = $value['birthdate'];
              $birthplace = $value['birthplace'];
              $educ = $value['educ'];
              $sector = $value['sector'];
              $cnumber = $value['cnumber'];
              $religion = $value['religion'];
            }
        } else {
            echo "No data found!";
        }
  }
}



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
    <!-- End of Sidebar -->

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
                  <h6 class="m-0 font-weight-bold text-primary">Update Record</h6>
                </div>
                      <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="p-5">
                            <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">CLIENTS'S BASIC INFORMATION</h1>
                            </div>

        <form class="user" id="frm">
            
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user " id="fname" placeholder="First Name" name="fname" value="<?php echo $fname; ?>">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user " id="lname" placeholder="Last Name" name="lname" value="<?php echo $lname; ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user " id="age" placeholder="Age" name="age" value="<?php echo $age; ?>">
                </div>
                <div class="col-sm-6">
                    <select class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>">
                        
                        <option value="Male" <?php echo $gender == 'Male' ? 'selected' : '' ?> >Male</option>
                        <option value="Female" <?php echo $gender == 'Female' ? 'selected' : '' ?> >Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user " id="address" placeholder="Address" name="address" value="<?php echo $address; ?>">
                </div>

                <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user " id="birthdate" placeholder="Birth Date" name="birthdate" value="<?php echo $birthdhate; ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user " id="birthplace" placeholder="Birth Place" name="birthplace" value="<?php echo $birthplace; ?>">
                </div>

                <div class="col-sm-6">
                <select class="form-control"  id="educ" name="educ" value="<?php echo $educ; ?>">
                        
                        <option value="EL" <?php echo $educ == 'ELEMENTARY LEVEL' ? 'selected' : '' ?> >ELEMENTARY LEVEL</option>
                        <option value="HL" <?php echo $educ == 'HIGH SCHOOL LEVEL' ? 'selected' : '' ?> >HIGH SCHOOL LEVEL</option>
                        <option value="CL" <?php echo $educ == 'COLLEGE LEVEL' ? 'selected' : '' ?> >COLLEGE LEVEL</option>
                        <option value="CG" <?php echo $educ == 'COLLEGE GRADUATE' ? 'selected' : '' ?> >COLLEGE GRADUATE</option>

                        
                    
                    </select>
                </div>
            </div>

            <div class="form-group">
                
                    <select class="form-control" id="sector" name="sector" value="<?php echo $sector; ?>">
                        
                        <option value="SOLO PARENT" <?php echo $educ == 'SOLO PARENT' ? 'selected' : '' ?> >SOLO PARENT</option>
                        <option value="PWD" <?php echo $sector == 'PWD' ? 'selected' : '' ?> >PWD</option>
                        <option value="VAWC" <?php echo $sector == 'VAWC' ? 'selected' : '' ?> >VAWC</option>
                        <option value="CICL" <?php echo $sector == 'CICL' ? 'selected' : '' ?> >CICL</option>
                        <option value="CNSP" <?php echo $sector == 'CNSP' ? 'selected' : '' ?> >CNSP</option>
                        <option value="FAMILY COUNSELLING" <?php echo $sector == 'FAMILY COUNSELLING' ? 'selected' : '' ?> >FAMILY COUNSELLING</option>
                        <option value="COUNSELLING" <?php echo $sector == 'COUNSELLING' ? 'selected' : '' ?> >COUNSELLING</option>

                    </select>
                
            </div>
            


            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user " id="cnumber" placeholder="Contact Number" name="cnumber" value="<?php echo $cnumber; ?>">
                </div>

                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user " id="religion" placeholder="Religion" name="religion" value="<?php echo $religion; ?>">
                </div>
            </div>

            <div class="form-group">
                
                <select class="form-control" id="status" name="status">
                    <option value="">--STATUS--</option>
                    <option value="FILLING">FILLING</option>
                    <option value="PN GOING">ON GOING</option>
                    <option value="N GOING">ON GOING</option>
                    <option value="CN GOING">ON GOING</option>
                    <option value="CNSN GOING">ON GOING</option>
                    
                </select>
            
        </div>

            

            <hr>

            <button type="submit" class="btn btn-primary btn-user btn-block">
               Update Data
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
        st=$('#status').val();



                if( st==""){
                    Swal.fire(
                      'Error',
                      'Please fill all the Entries!',
                      'error'
                    )
                }
                else {

                        $.ajax({
                        url: 'update_rd.php',
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
                          religion: rg,
                          status: st     
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
