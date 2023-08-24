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


