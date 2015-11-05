
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/di-logo.png">

    <title>FAQ</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
      <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img  src="images/azul.png" alt="First slide"  >
          <div class="container">
            <div class="carousel-caption">
              <img src = 'images/logoDI.png' height = "60px">
              <h1>Cloud DI - Preguntas frecuentes</h1>
              <p>¿Tienes preguntas? Nosotros tenemos respuestas</p>
          </div>
      </div>
  </div>
</div>
</div>

<div class="container">
    <?php
        include ('preguntas.php');

        for ($i = 1; $i <= count($preguntas); $i++) {
            echo '<h2>' . $preguntas[$i]["categoria"] . '</h2>';
            echo '<div class="panel-group" id="accordion' . $i . '" role="tablist" aria-multiselectable="true">';
            echo '<div class="panel panel-default">';


            for ($j = 1; $j < count($preguntas[$i]["preguntas"]) + 1; $j++) {
                echo '<div class="panel-heading" role="tab" id="heading' . $i . '_' . $j .'">';
                echo    '<h4 class="panel-title">';
                echo    '<a data-toggle="collapse" data-parent="#accordion' . $i . '"  href="#collapse' . $i . '_' . $j . '" aria-expanded="true" aria-controls="collapse' . $i . '_' . $j. '">';
                echo        $preguntas[$i]["preguntas"][$j]["pregunta"];
                echo    '</a>';
                echo    '</h4>';
                echo '</div>';

                echo '<div id="collapse' . $i . '_' . $j . '" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading' . $i . '_' . $j .'">';
                echo    '<div class="panel-body">';
                echo        $preguntas[$i]["preguntas"][$j]["respuesta"];
                echo    '</div>';
                echo '</div>';
                
            }
           

            echo '</div>';
            echo '</div>';
        }
    ?>

</div>
<div class="container">
  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Subir arriba</a></p>
    <a href="index.html"><< Volver a Cloud-DI</a>
    <hr class="featurette-divider">
    <p class="text-center">&copy; 2015, Cloud DI - Departamento de Informática - UAL - <a href = 'TerminosServicio.html'>Términos del servicio</a></p>
</footer>

</div><!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>