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

<body class="bg-gradient">



  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">MEMBER'S REGISTRATION</h1>
              </div>
              <form class="user" id="frm">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="fname" placeholder="First Name" name="fname">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lname" placeholder="Last Name" name="lname">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="pass" placeholder="Password" name="pass">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="cpass" placeholder="Repeat Password" name="cpass">
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <button id="cancel" class="btn btn-danger btn-user btn-block">
                  Cancel
                </button>
            
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
 

  <script type="text/javascript">

     $("#cancel").click(function(e) {
      e.preventDefault();

        $('#fname').val('');
        $('#lname').val('');
        $('#email').val('');
        $('#pass').val('');
        $('#cpass').val('');
     });

      $("#frm").submit(function(e) {
        e.preventDefault();

        var fn,ln,em,ps,cps;

        fn=$('#fname').val();
        ln=$('#lname').val();
        em=$('#email').val();
        ps=$('#pass').val();
        cps=$('#cpass').val();

        if(fn=="" || ln=="" || em=="" || ps=="" || cps==""){
                    Swal.fire(
                      'Error',
                      'Please fill all the Entries!',
                      'error'
                    )
        }
        else {
                  if(ps===cps) {
                    $.ajax({
                        url: 'register_rd.php',
                        type: 'POST',
                        data: {
                          fname: fn,
                          lname: ln,
                          email: em,
                          password: ps        
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
                                $('#email').val('');
                                $('#pass').val('');
                                $('#cpass').val('');
                        }
                    });
              }
              else {
                    swal({
                        title: 'Error',
                        text: 'Password Did not Match!',
                        type: 'error'
                    }).then(function() {
                         $('#cpass').val('');
                         $('#pass').val('');
                         $('#pass').focus();
                    });

              }
        }

});
      
</script>

</body>

</html>
