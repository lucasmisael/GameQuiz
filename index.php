<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Lucas Misael">

    <title>Quiz Iniciação Científica</title>

      <!-- Bootstrap and CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
      <link href="css/freelancer.min.css" rel="stylesheet">
      <link href="css/game.css" rel="stylesheet">
    
  </head>

  <body id="page-top">

    <?php include 'inc/header.php';?> 

    <!-- Cabeçalho do Jogo -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <h1 class="text-uppercase mb-0">Quiz Game </h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Lógica</h2>
      </div>
    </header>


    <section class="portfolio" id="game">
      <!-- DIV com botao para ir para jogo -->
      <div class="col-md-12 col-lg-12 col-sm-12 ">
       
          <div class="container">
            <img src="img/controle.png" class="game_imagem img-responsive"/>
          </div>
       
        <div class="container ">
          <a href="view/level1.php"> <button type="button" class="btn btn-primary  rounded-pill button_ir_jogo col-md-3  " href="view/Game.php" >Nível 1</button></a>
          <a href="view/level2.php"> <button type="button" class="btn btn-warning  button_ir_jogo_warning  col-md-3" >Nível 2</button></a>
          <a href="view/level3.php"> <button type="button" class="btn btn-danger  button_ir_jogo col-md-3 " >Nível 3</button></a>
        </div>
      </div>
          
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Sobre o Projeto</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">O intuíto principal desse projeto é demonstrar como a utilização de Games podem contribuir para o conhecimento de novas tecnologias ou novos materiais.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">É interessante observarmos como podemos diminuir um grande desafio em pequenas perguntas e respostas, facilitando o entendimento do assunto.</p>
          </div>
        </div>
      </div>
    </section>



    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-6 mb-lg-0">
            <h4 class="text-uppercase mb-4">Local</h4>
            <p class="lead mb-0">Unicesumar Curitiba
              <br> R. Itajubá, 673 - Portão, Curitiba - PR </p>
          </div>
          <div class="col-md-6 mb-6 mb-lg-0">
            <h4 class="text-uppercase mb-4">Me encontre nas redes sociais</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/lucas.misael.5">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>

              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
            
            </ul>
          </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Lucas Misael 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>




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
