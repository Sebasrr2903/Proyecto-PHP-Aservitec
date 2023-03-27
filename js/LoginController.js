function LoginRequest() {
    var user=document.getElementById("user");
    var pass=document.getElementById("pass");
    localStorage.setItem("User", user.value);
    localStorage.setItem("Password", pass.value);
    $.ajax({
        url: "../controllers/Iniciarsesion.php", // ruta al archivo con los datos de los productos
        type: "POST",
        dataType:"JSON",
        success: function(resultado) {
            alert("succ");
        },
        error: function(xhr, status, error) {
          console.log("Error al cargar los productos: " + error);
          alert(error);
        }
      });

  }