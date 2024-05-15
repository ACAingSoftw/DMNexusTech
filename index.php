<?php
//con require se incluirá la conexión con el archivo de conexión con la bd.
// 'config' es la ubicación del archivo 'BDconect.php'.
require 'config/BDconect.php';

$db = new database();
$con = $db -> conectar(); // no lleva ningún parámetro porque ya tiene todo un método
                          //  en la clase BDconect.php.
$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql -> execute();
$resultado = $sql-> fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Producto</title>
  <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
  <header class="encabezado-img">
    <div class="fondo-img">
      <h2>TecnoStar</h2>
    </div>
  </header>               
  <header>           
    <h2>Productos Tecnológicos</h2>
    <div class="container-icon">
      <div class="container-cart-icon">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="icon-cart">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
        <div class="conunt-productos">
          <span id="contador-producto">0</span>
        </div>
      </div>
      <div class="container-cart-productos hidden-cart">
        <div class="row-productos">
          <div class="cart-productos">
            <div class="info-cart-productos">
              <span class="cantidad-produto-carrito">0</span>
              <p class="titulo-producto-carrito">Lista de Productos</p>
              <span class="precio-producto-carrito">$0</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="icon-close">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </div>  
        </div>                      
        <div class="cart-total">          
          <h3>Total</h3>
          <span class="total-pagar">$0</span>                   
        </div> 
      </div>
    </div>
  </header>
  <div class="container-items">
    <div class="item">
      <figure>
        <img src="Img/Telefono.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Telefono Samsung Galaxy S21 Ultra</h2>
        <p class="Price">$1200</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="Img/Computador.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Computador Portatil HP de 14"</h2>
        <p class="Price">$2500</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="Img/Monitor.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Monitor Ultra Pantalla Samsung</h2>
        <p class="Price">$5000</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="Img/Audifonos.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Audifonos Sony</h2>
        <p class="Price">$8000</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="Img/Camara.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Camara Canon</h2>
        <p class="Price">$700</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>
    <div class="item">
      <figure>
        <img src="Img/Ipad Pro Apple.jpg" alt="">
      </figure>
      <div class="info-Producto">
        <h2>Ipad Pro Apple</h2>
        <p class="Price">$2500</p>
        <button class="btn-add-carro">Añadir al Carrito</button>
      </div>
    </div>

  </div>
  <script src="Index.js"></script>
</body>

</html>