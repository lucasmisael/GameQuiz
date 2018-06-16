<?php
    session_start(); # Deve ser a primeira linha do arquivo

    
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Este jogo foi criado com o intuíto principal de auxiliar em uma pesquisa científica.">
    <meta name="author" content="Lucas Misael">

    <title>Quiz Algoritmos</title>

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
    <div class="container">
      <?php include '../inc/headerGame.php';?> 
    </div>
    
    
    <form id="formGame" action="../controller/GameController.php?Operacao=jogo&level=1" method="POST">  
      <div id="div1" class="container">    
        <div class="row">  
          <section id="p1">
            <p class="lead text-uppercase">Questão 1</p>
            <p class="lead">
              Qual a definição de algoritmo?
            </p>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"  /> 
            <label for="question-1-answers-A" class="lead">A) Conjunto das regras e procedimentos lógicos perfeitamente definidos que levam à solução de um problema em um número finito de etapas. </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B" class="lead">B) São comandos específicos que utilizamos em Bancos de dados (SQL). </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-CB" class="lead">C) Conjunto de regras e procedimentos lógicos perfeitamente definidos que levam a solução de um problema em um número infinito de etapas. </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D" class="lead">D)	Procedimentos e regras finitas ao qual não precisam levar a uma solução.. </label> 
              
          </section>
          <a id="btn_proximo" href="#p2" class="btn btn-primary">Proxima</a>    
        </div>        
      </div>
            
      <div id="div2" class="container">    
        <div class="row slideanim">  
          <section id="p2">
            <p class="lead text-uppercase">Questão 2</p>
            <p class="lead">
              Em relação às estruturas de controle, considere abaixo o trecho inicial do algoritmo que exibe o conceito de um aluno, dada a sua nota. Levando-se em conta somente notas inteiras, o critério para conceitos é: notas menor que 3, conceito E; notas de 3 a 5, conceito D; notas 6 e 7, conceito C; notas 8 e 9, conceito B; nota 10, conceito A.
            </p>
            <pre>
              Var nota: inteiro
              Inicio
                Escreva(“informe a nota:”)
                Leia(nota)
                .
                .
                .
              Fim algoritmo
            </pre>
            <p>
              Continuando a construção do algoritmo acima, a estrutura de controle SE-ENTAO-SENAO-FIMSE será utilizada
            </p>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  /> 
            <label for="question-2-answers-A" class="lead">A)	3 vezes . </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B" class="lead">B) 4 vezes</label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C" class="lead">C) 5 vezes </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D" class="lead">D)	6 vezes </label> 
              
          </section>
          <a  href="#p3" class="btn btn-primary">Proxima</a>     
        </div>        
      </div>    
      <div id="div3" class="container">    
        <div class="row slideanim">  
          <section id="p3">
            <p class="lead text-uppercase">Questão 3</p>
            <p class="lead">
              Um dos valores do tipo fundamental BOOLEAN é denotado pelo identificador
            </p>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A" class="lead"><p>A) CARDINAL </p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B" class="lead"><p>B) DECIMAL </p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C" class="lead"><p>C) REAL</p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
            <label for="question-3-answers-D" class="lead"><p>D) TRUE</p></label> 
              
          </section>
        </div>        
          <a href="#p4" class="btn btn-primary">Proxima</a>    
      </div>
      <div id="div4" class="container">    
        <div class="row slideanim">  
          <section id="p4">
            <p class="lead text-uppercase">Questão 4</p>
            <p class="lead">
              Pilha é uma estrutura de dados
            </p>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  /> 
            <label for="question-4-answers-A" class="lead">A)	Cujo acesso aos seus elementos segue tanto a lógica LIFO quanto a FIFO. </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B" class="lead">B) Cujo acesso aos seus elementos ocorre de forma aleatória.</label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C" class="lead">C) Cujo acesso aos seus elementos segue a lógica LIFO, apenas. </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
            <label for="question-4-answers-D" class="lead">D)	Cujo pode ser implementada somente por meio de listas	</label> 
              
          </section>
        </div>        
        <button type="submit" class="btn btn-secondary btn-lg"> Enviar </button>
      </div>
    </form>
  </body>
</html>
