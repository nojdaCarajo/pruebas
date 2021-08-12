

<!DOCTYPE html>
<html>
<head>

	<?php 	

	require_once 'componentes/header.php';
	?>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
   
  
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
  height: 600px;
  margin-right: 10px;
  background: #8C8;
  counter-increment: gallery-cell;
}

/* cell number */
.gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
}
.ciclon{
  color: red;

}

h2, img { opacity:0; }
  </style>

<title>.::PRODUCCIONES 301: Home::.</title>

</head>
<body class="parallax-body">
	<?php 
	require_once 'componentes/menu.php';
	?>
	

		<?php 

		require_once 'componentes/carrusel.php';
		?>

    <h1 id="hola" class="center-align">Servicios</h1>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
   
  </div>

<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
 <h2>Etiam venenatis purus</h2> 
        <p>Sed ante facilisis volutpat vitae at odio. Integer ac consectetur risus, at blandit sem. Vestibulum at nisi non metus suscipit faucibus ac ut nisl. Aenean pulvinar congue suscipit. </p>
        <ul>
            <li>In ullamcorper fringilla viverra.</li> 
            <li>Pellentesque sodales, nisi quis scelerisque pulvinar</li>
            <li>Dui lorem feugiat eros, sed aliquet felis elit a ligula.</li> 
            <li>Nullam faucibus nisl nec sagittis malesuada. Etiam non malesuada tellus, sit amet commodo diam.</li>
        </ul>

<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>

<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
<p>sdfsdfsdf</p>
 <h1 id="hola" class="elemento_deseo_animar animate__animated animate__bounce">An animated element</h1>
  <div class="row">
  <div class="col s12 teal-text" >
        <center>
          <h3>Principales Servicios</h3>
        </center>
      </div>
  
      <div class="col s12 m4">
        <div class="card">
  
          <div class="col m12">
          <h5 style="color: #0CDCF5;">Diseño Grafico</h5>
        </div>
        <div class="col m4">
          <center>
          <img src="vista/img/diseño.png"  class="responsive-img" style=" margin: auto; margin-top: 0.8em;">            
          </center>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          
        </div>
      </div>
  
       <div class="col s12 m4">
        <div class="card">
  
          <div class="col m12">
          <h5 style="color: #0CDCF5;">Diseño Grafico</h5>
        </div>
        <div class="col m4">
          <center>
          <img src="vista/img/diseño.png"  class="responsive-img" style="margin: auto; margin-top: 0.8em;">            
          </center>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          
        </div>
      </div>
  
   <div class="col s12 m4">
        <div class="card">
  
          <div class="col m12">
          <h5 style="color: #0CDCF5;">Diseño Grafico</h5>
        </div>
        <div class="col m4">
          <center>
          <img src="vista/img/diseño.png"  class="responsive-img" style="margin: auto; margin-top: 0.8em;">            
          </center>
        </div>
        <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          
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
      <div class="photobox photobox_type1" onclick="alert('hablame bello')">
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">Sistema Cafim</span>
        </div>
      </div>
      <div class="photobox photobox_type3" onclick="alert('lo que usted diga papi!!');
      window.location.href='?action=bienes';">
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">SIBIN</span>
        </div>
      </div>
      <div class="photobox photobox_type2" onclick="alert('hola mundo')">
        <div class="photobox__previewbox">
          <img src="vista/img/4.jpg" class="photobox__preview" alt="Preview">
          <span class="photobox__label">Comic's Geek's</span>
        </div>
      </div>
           
    </div>  
  </div>
</div>
  




    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="vista/img/3.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="vista/img/3.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="vista/img/3.jpg">
            <span class="card-title red-text">Cant. mujeres coñaseadas</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
    </div>  

	
<div class="row">
    <div class="col s12 m9 l10">
      <div id="introduction" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="structure" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="initialization" class="section scrollspy">
        <p>Content </p>
      </div>
    </div>
    <div class="col hide-on-small-only m3 l2">
      <ul class="section table-of-contents">
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#structure">Structure</a></li>
        <li><a href="#initialization">Intialization</a></li>
      </ul>
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