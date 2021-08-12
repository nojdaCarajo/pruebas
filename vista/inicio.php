<html>
<head>
  <title></title>
  <style>
    /* external css: flickity.css */

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { font-family: sans-serif; }

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 100%;
  height: 100%;
  margin-right: 10px;

}

    .item {
      display: block;
      float: left;
      width: 100%;
      height: 100%;
     
      }
      .title {
        position: absolute;
        top: 50%;
        left: 0;
        margin: -100px 0 0 0;
        padding: 0;
        font-size: 5rem;
        width: 100%;
        text-align: center;
        letter-spacing: .3rem;
        color: #E2EBFF;
      }

/* cell number */

.moveBack{ 
   float: left;
    width: 100%;
    position: relative;
  border: 1px solid red; 
  height: 55%; 
  background-image: url(vista/img/ROBOT.jpg); 
  background-size: 110%;
  animation: movimiento 30s infinite linear alternate;
}

@keyframes movimiento {
  from{
background-position: top left;
    }to{
background-position: bottom right;

    }
  
}


.grad{
  position: relative;
  width: 100%;
height: 100%;
 border: 1px solid green; 
 background-image: linear-gradient(to left, black,rgba(25,10,221,0.5));

}


.moveCont{
width: 100%;
position: relative;
top: 20px;
color: #fff;
 margin: 100px 0 0 50;
}


.moveCont p{
  color: white;
}

  </style>
  <?php   

  require_once 'componentes/header.php';
  ?>
</head>
<body class="parallax-body">

      <?php 
  require_once 'componentes/menu.php';
  ?>
  

    <?php 

  require_once 'componentes/carrusel.php';
    ?>
    <h1 id="hola" class="center-align rat">Servicios</h1>



<div class="row">
    <div class="col s12">
      <div class="center-align col l3 l3 m6 s12 ">
         <img src="vista/img/diseño.png" width="40%" alt="" class="serv-1 responsive-img">
         <p>Diseño grafico</p>
       </div>
       <div class="center-align col l3 m6 s12">
         <img src="vista/img/fotografia.png" width="40%" alt="" class="serv-2 responsive-img">
         <p>Fotografia</p>
       </div>
       <div class="center-align col l3 m6 s12">
         <img src="vista/img/video.png" width="40%" alt="" class="serv-2 responsive-img">
         <p>Edicion</p>
       </div>
       <div class="center-align col l3 m6 s12">
         <img src="vista/img/diseño.png" width="40%" alt="" class="serv-1 responsive-img">
         <p>hola</p>
       </div> 
    </div>
   
  </div>


<div class="row">
      <div class="col s12 teal-text" >
        <center>
          <h3>Portafolio</h3>
        </center>
      </div>
    </div>

 <div class="page">
  <div class="page__demo">
    <div class="page__container">
   <div class="photobox photobox_type17" >
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">prueba </span>
        </div>
      </div>

      <div class="photobox photobox_type17" >
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">prueba '.$i.'</span>
        </div>
      </div>

      <div class="photobox photobox_type17" >
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">prueba '.$i.'</span>
        </div>
      </div>

    </div>  
  </div>
</div>

<div class="moveBack" >
  <div class="grad">
   <div class="moveCont">
    <h5 class="left-align">Diseño 3d</h5>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>
  </div>
</div>
</div>


	<?php require_once 'componentes/footer.php'; ?>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();
})

   

</script> -->

 <!-- <script src="vista/js/waypoints.min.js"></script> -->
    <script type="text/javascript">
    jQuery(function($) { 
      

        $('#hola').waypoint(function() {
            $(this).toggleClass( 'bounce animated' );
        },
        {
            offset: '70%',
            triggerOnce: true
        });
      

        $('h2').waypoint(function() {
            $(this).toggleClass( 'animate__bounce' );
        },
        {
            offset: '70%',
            triggerOnce: true
        });
        
        $('li').waypoint(function() {
            $(this).toggleClass( 'animate__bounce animated' );
        },
        {
            offset: '70%',
            triggerOnce: true
        });        
        
        $('img').waypoint(function() {
            $(this).toggleClass( 'rotateIn animated' );
        },
        {
            offset: '70%',
            triggerOnce: true
        });        
    });
    


  $(function() {
  $(window).scroll(function() {
if ($(window).scrollTop() > 200) {
  $("header").css({ "background-color": "black", "visibility": "visible" });
  $("header").fadeIn();
} else {
  $("header").css({ "background-color": "black", "visibility": "hidden" });
  $("header").fadeOut();
}
  });
});

    </script>
<script type="text/javascript">


    </script>
</body>
</html>