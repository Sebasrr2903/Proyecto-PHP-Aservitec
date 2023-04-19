<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
 $(document).ready(function() {
   $.ajax({
     url: "../controller/ProductosController.php", 
     type: "POST",
     dataType:"JSON",
     success: function(resultado) {
       mostrarProductos(resultado);
     },
     error: function(xhr, status, error) {
       console.log("Error al cargar los productos: " + error);
       alert(error);
     }
   });
 });

 function mostrarProductos(productos) {
   var listaProductos = $("#lista-productos");
   const productList = document.getElementById('product-list');
   var prueba=$("#container");
   listaProductos.empty();
   $.each(productos, function(i, producto) {
     const productCard = `
         <div class="col-lg-4 col-md-6 mb-4">
           <div class="card h-100">
           <a href="#"><img class="card-img-top" src="https://www.zebra.com/content/dam/zebra_new_ia/en-us/solutions-verticals/product/Printers/Industrial%20Printers/zt600-industrial-printer/photograph-web/zt610-photography-website-left-touch-screen-1x1-350x350.jpg"></a>
             <div class="card-body">
               <h4 class="card-title">
                 <a href="#">${producto.Nombre}</a>
               </h4>
               <h5>Precio: ${producto.Precio}</h5><br>
               <h5>Descripción</h5>
               <p class="card-text">${producto.Descripcion}</p>
             </div>
             <div class="card-footer">
               <button type="button" class="btn btn-primary">Agregar al carrito</button>
             </div>
           </div>
         </div>
       `;
       productList.innerHTML += productCard;
     });
   }
</script>