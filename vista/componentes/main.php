
<!DOCTYPE html>
  <html>
    <head>
      
        <?php 
            //require_once 'componentes/body/header.php'; 
        ?>
        <title>Inicio</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">

      </head>
        <body>
          <div class="-m alfa -expanded js-container"><!--Aqui inicia el contenedor principal-->
            <div class="-m banner">
              <button class="boton -top -info js-sidebar-expand">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
              </button>
            </div>

            <div class="-m sidebar"> <!--Aqui inicia el menu-->
       
      <?php // require_once 'componentes/body/menu.php';
       ?>
      </div> <!--Aqui termina el menu-->
    
      <div class="-m cont"> <!--Aqui inicia el contenido-->
        <?php
        //require_once 'componentes/body/banner.php';
        ?>

        <div class="col-xs-12">
        <div class=" row col-xs-12">
          <h1>  Bienvenida/o: <?php // echo $_SESSION["apell"]." ".$_SESSION["apell"];?></h1>
        </div>


          <div class="foto col-xs-2"><img src="../Img/batman.png" class="img-responsive img-circle img-thumbnail" alt="">
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
          Visualizar
          </button>
          </div>
          

          <div class="col-xs-4">
            <table class="table col-xs-12">
        
            </table>
          </div>
          
          
          </div>
        













      </div><!--Aqui termina el contenido-->

    </div><!--Aqui termina el contenedor principal-->

    <?php //require_once 'componentes/body/footer.php'; ?>
    <script src="js/main.js"></script>

  </body>
</html>