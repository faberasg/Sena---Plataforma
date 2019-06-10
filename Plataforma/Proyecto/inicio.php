<?php



require 'php/conexion.php';

$sql = "SELECT * FROM publicacionesp";
$resultado = mysqli_query($conexion,$sql);


?>
  
  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>El silencio me crea</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" href="img/icono.png" type="icono/png" sizes="16x16">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  
</head>
<body>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lorem ipsum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <img src="img/5.png" width="100%">
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
    </div>
  </div>
</div>

  <div class="container-fluid">
    <!-----------------------------imagen1------------------------------------------------------------------------------------------------>


    <header id="header" class="row">
    	<img id="logo" class="img col-12 col-sm-7 col-md-7 col-lg-5" src="img/logo.png" >  
    </header>

    <!-------------------------------navegación-------------------------------------------------------------------------------------->
    
    <nav id="menu" class="color-nav row navbar navbar-expand-lg navbar-dark sticky-top">

      <button class="btn-outline-primary navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav mr-auto ml-auto text-center">
          <li class="nav-item nav-link active"><i class="fas fa-home" style='font-size:20px'></i>  </li>
          <li class="nav-item nav-link">GALERÍA</li>
          <li class="nav-item nav-link">INFORMACIÓN</li>
          <li class="nav-item nav-link">CUENTO</li>
        </div>
      </div>

      <form class="form-inline my-2 my-lg-0 d-none d-sm-block">
      
      <li class="nav-item dropdown">
        
        <i class="nav-link fas fa-align-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
        aria-haspopup="true" aria-expanded="false" style='font-size:20px'></i>
        
        <div class=" dropdown-menu" aria-labelledby="navbarDropdown">

        <button class="des btn btn-outline-light  my-2 my-sm-0" type="submit"><a class="btin dropdown-item" 
        href="registro.html"> Registrate   <i class="fas fa-registered"></i> </a></button>

        <button class="dest btn btn-outline-light   my-2 my-sm-0" type="submit"><a class="btin dropdown-item" 
        href="ContactoA.php"> Contacto   <i class="fas fa-address-book"></i></a></button>

         
        </div>
      </li>
      
      
    </form>

    </nav>
    

    <!------------------------------------Galeria-------------------------------------------------------------->

    
    <?php 
    $row =mysqli_fetch_array($resultado);
     ?>
    
    <?php


			
        echo "<section id='carousel' class='row' >";

    echo "<div id='carouselExampleFade' class='carousel slide carousel-fade' data-ride='carousel'>";
  echo "<div class='carousel-inner'>";
    echo "<div class='carousel-item active'>";
    echo "<img class='d-block w-100' src='img/"   . $row['foto_1'] . "'alt=''>";
    echo "</div>";
    echo "<div class='carousel-item'>";
    echo "<img class='d-block w-100' src='img/"   . $row['foto_2'] . "'alt=''>";
    echo "</div>";
    echo "<div class='carousel-item'>";
    echo "<img class='d-block w-100' src='img/"   . $row['foto_3'] . "'alt=''>";
    echo "</div>";
  echo "</div>";
  echo "<a class='carousel-control-prev' href='#carouselExampleFade' role='button' data-slide='prev'>";
    echo "<span class='arousel-control-prev-icon' aria-hidden='true'></span>";
    echo "<span class='sr-only'>Previous</span>";
  echo "</a>";
  echo "<a class='carousel-control-next' href='#carouselExampleFade' role='button' data-slide='next'>";
    echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
    echo "<span class='sr-only'>Next</span>";
  echo "</a>";
echo "</div>";
echo "</section>";

?>



<?php 
$row =mysqli_fetch_array($resultado);
 ?>

<?php



echo "<section id='seccion1' class='row sec'>";
echo "<div class='col-12 col-sm-12 col-md-12 col-lg-12'>"; 

  echo "<h3>" . $row['titulo'] . "</h3>"; 
  echo "<hr class='els'>";
 echo "<p>" . $row['detalles'] . "</p>";
  
  echo "</div>";
  echo "</section>";


?>
 

	




<!------------------------------------Cuento-------------------------------------------------------------->
 


<section id='seccion2' class="row video">
<div class='col-12  col-sm-12 col-md-12 col-lg-12' id="video">
    

<video  controls autoplay loop style="
    width: 90%;
    height: 100%;
    position: relative;
    left: 6%;
"> <source src="video/video.mp4" type="video/mp4"></video>
  
</div>

</section>


<?php 
$row =mysqli_fetch_array($resultado);
 ?>

<?php 
        
echo "<section class='row gale2'  >";

     echo " <div class='col-12 col-sm-6 col-md-6 col-lg-5'>";

       echo " <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>";
         echo " <ol class='carousel-indicators'>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
           echo "<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='2'></li>";
         echo " </ol>";
         echo " <div class='carousel-inner'>";


            echo "<div class='carousel-item active'>";
              echo "<img class='d-block w-100' src='img/"   . $row['foto_4'] . "'alt=''>";
             echo " <div class='carousel-caption d-none d-md-block'>";
             echo " </div>";
           echo " </div>";



            echo "<div class='carousel-item'>";
             echo "<img class='d-block w-100' src='img/"   . $row['foto_5'] . "'alt=''>";
              echo "<div class='carousel-caption d-none d-md-block'>";
              echo "</div>";
           echo " </div>";

           echo " <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>";
              echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
             echo " <span class='sr-only'>anterior</span>";
           echo " </a>";
            echo "<a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>";
              echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
              echo "<span class='sr-only'>siguiente</span>";
            echo "</a>";
          echo "</div>";
       echo " </div>";
     echo " </div>";

      echo "<div class='col-12 col-sm-6 col-md-6 col-lg-6 rojo' >";

      

        
        echo "<h3>" . $row['titulo'] . "</h3>";

        ?>

        <p><?php echo $row["detalles"];?></p>


        <button type="button" class="bt1 btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
          Más información
        </button>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                

                <p><?php echo $row["detalles"];?></p>

              

              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

<footer class="page-footer lighten-3 pt-4">

    <div class="container text-center text-md-left">
      <div class="row">
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
          <h5 class="font-weight-bold text-uppercase mb-4">Información:</h5>
          <hr class="foot">
          <p class="nombres">En esta ágina encontraras la historia y el cuento de un búho llamado Andy la cual sufre de una discapacidad
           auditiva y por ello se siente muy mal ya que le hace demasiado bullying.</p>
          

        </div>

        <hr class="clearfix w-100 d-md-none">
        <div class=" col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
          <h5 class="font-weight-bold text-uppercase mb-4">Navegación:</h5>
          <hr class="foot">

          <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a href="https://www.facebook.com/" class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="https://twitter.com/" class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="https://www.instagram.com/?hl=es-la" class="btn-floating btn-gplus mx-1">
        <i class="fab fa-instagram"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="https://co.pinterest.com/" class="btn-floating btn-li mx-1">
        <i  class="fab fa-pinterest-square"> </i>
      </a>
    </li>
    
  </ul>

        </div>

          <hr class="clearfix w-100 d-md-none">
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <h5 class="font-weight-bold text-uppercase mb-4">Creado Por:</h5>
          <hr class="foot">

          <ul class="nombres list-unstyled">
            <li>
              <p>
              <i class="fas fa-address-card"></i> - Faber Suárez</p>
                <p>
                <i class="fas fa-address-card"></i> - Daniel Perez</p>
                     <p>
                     <i class="fas fa-address-card"></i> - Kevin Rico</p>

            </li>
          </ul>
         
          

        </div>
        

      </div>


    </div>




  
  
    

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href=""> Elsilenciomecrea@gmail.com</a>
      
    </div>

  </footer>



 <script src="js/codigo.js"></script>
<script src="js/scroll.js"></script>
  


  </div>
</body>
</html>