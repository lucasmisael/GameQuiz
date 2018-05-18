<?php
    session_start(); # Deve ser a primeira linha do arquivo

    
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz Iniciação Científica</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../css/game.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php include '../inc/headerGame.php';?> 

      

    
<br>
    <form id="formGame" action="../controller/GameController.php?Operacao=jogo" method="POST">  
      <section id="contact">
        <div class="container">
          <h2 class="text-center text-uppercase text-secondary mb-0 subtitulo">Quiz</h2>
          <hr class="star-dark mb-5">
            <div class="row">
              <div class="col-lg-4 mr-auto radio-green">
                <p class="lead">Era uma vez a história de quatro homens: João, José, Jacinto e Joel. Os quatro eram construtores de barcos e em quatro dias conseguiam construir quatro embarcações. Quanto tempo demoraria um dos quatro homens para construir um único barco?</p>
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"  class="form-check radio-green"/> 
                <label for="question-1-answers-A" class="lead">A) 3 dias </label> 
                <br>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B" class="lead">B) 1 dia </label> 
                <br>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-B" class="lead">C) 2 dias </label> 
              </div>
            </div>
        </div>
      </section>      
      <br>
      
      <section>
        <div class="container">      
          <div class="row">
            <div class="col-lg-4 mr-auto">
              <p class="lead">Whether you're a student looking to showcase your work,BLA| BLA! a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
              <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" /> 
              <label for="question-1-answers-A" class="lead">A) OpçãoA </label> 
              <br>
              <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
              <label for="question-1-answers-B" class="lead">B) OpçãoB </label> 
              <br>
              <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
              <label for="question-1-answers-B" class="lead">C) OpçãoC </label> 
            </div>
          </div>
          <div>
            <button id="btnENviar" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </section>
      
      <section>
        <div class="container">      
          <div class="row">
            <div class="col-lg-4 mr-auto">
              <p class="lead">Whether you're a student looking to showcase your work,BLA| BLA! a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
              <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" /> 
              <label for="question-1-answers-A" class="lead">A) OpçãoA </label> 
              <br>
              <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
              <label for="question-1-answers-B" class="lead">B) OpçãoB </label> 
              <br>
              <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
              <label for="question-1-answers-B" class="lead">C) OpçãoC </label> 
            </div>
          </div>
          <div>
            <button id="btnENviar" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </section>
    </form>    
   

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
