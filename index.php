<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>WebPractice</title>
    <link rel="stylesheet" href="style.css">

    

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="main">

        <div class="card-body p-3">
            
                <ul>
                    <li><a href="#frm">FORM</a></li>
               
                    
                </ul>
             
        
        <div class="content">
            <h1>VISION</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt accusamus dolore, 
                cumque quisquam voluptate unde placeat provident vero ex. Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.SAD
            </p>

            <h1>MISSION</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt accusamus dolore, 
                cumque quisquam voluptate unde placeat provident vero ex. Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.Saepe consequuntur nemo expedita, 
                sequi eum ipsam culpa! Voluptate, dolore.SAD
            </p>

        </div>
        </div>


    </div>
        
    <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">CLIENT'S REGISTRATION</h1>
          </div>
            <form class="user" id="frm">
            
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user " id="fname" placeholder="First Name" name="fname">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user " id="lname" placeholder="Last Name" name="lname">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="number" class="form-control form-control-user " id="age" placeholder="Age" name="age">
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" id="gender" name="gender">
                            <option value="">--GENDER--</option>
                            <option value="F">FEMALE</option>
                            <option value="M">MALE</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user " id="address" placeholder="Address" name="address">
                    </div>

                    <div class="col-sm-6">
                        <input type="date" class="form-control form-control-user " id="birthdate" placeholder="Birth Date" name="birthdate">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user " id="birthplace" placeholder="Birth Place" name="birthplace">
                    </div>

                    <div class="col-sm-6">
                    <select class="form-control"  id="educ" name="educ">
                            <option value="">--Educational Attainment--</option>
                            <option value="EL">ELEMENTARY LEVEL</option>
                            <option value="HL">HIGH SCHOOL LEVEL</option>
                            <option value="CL">COLLEGE LEVEL</option>
                            <option value="CG">COLLEGE GRADUATE</option>
                        
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    
                        <select class="form-control" id="sector" name="sector">
                            <option value="">--SECTOR--</option>
                            <option value="SOLO PARENT">SOLO PARENT</option>
                            <option value="PWD">PWD</option>
                            <option value="VAWC">VAWC</option>
                            <option value="CICL">CICL</option>
                            <option value="CNSP">CNSP</option>
                            <option value="FAMILY COUNSELLING">FAMILY COUNSELLING</option>
                            <option value="COUNSELLING">COUNSELLING</option>
                        </select>
                    
                </div>
                


                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="number" class="form-control form-control-user " id="cnumber" placeholder="Contact Number" name="cnumber">
                    </div>

                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user " id="religion" placeholder="Religion" name="religion">
                    </div>
                    
                    

                </div>

                

                <hr>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register Account
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