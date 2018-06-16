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
    
    
    <form id="formGame" action="../controller/GameController.php?Operacao=jogo&level=2" method="POST">  
      <div id="div1" class="container">    
        <div class="row slideanim">  
          <section id="p1">
            <p class="lead text-uppercase">Questão 1</p>
            <p class="lead">
              O seguinte trecho de pseudo-código representa a definição de uma função (sub-rotina) f com um único argumento x. 
            </p>
            <pre> 
              f(x) 
                x ← x + 1 
                devolva x 
              Fim função

              ´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´ 
              Considere agora o seguinte trecho de código que invoca a função f definida acima. 

              ´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´´ 

              a ← 0 

              escreva a 
              escreva f(a) 
              escreva a 

            </pre>
            <p>
              A execução do trecho de código acima resultaria na escrita de:
            </p>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" /> 
            <label for="question-1-answers-A" class="lead">A) 0 0 0  </label>
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B" class="lead">B) 0 1 0  </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-CB" class="lead">C) 1 0 1 </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D" class="lead">D)	Nenhuma das opções </label> 
              
          </section>
        </div>        
        <a id="btn_proximo" href="#p2" class="btn btn-primary">Proxima</a>    
      </div>
            
      <div id="div2" class="container">    
        <div class="row slideanim">  
          <section id="p2">
            <p class="lead text-uppercase">Questão 2</p>
            <pre>
              Inicio
                cont, res, x, n :inteiro
                cont ←  1
                res ← 0
                x ← 2
                n ← 4
                  
                enquanto (cont >= n)
                faça
                  res ← res * x 
                  cont ++
                  escreva(res)
                Fim_enquanto
                  
                escreva(res);

              Fim

            </pre>
            <p>
              A saída na tela será:
            </p>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  /> 
            <label for="question-2-answers-A" class="lead">A)	0 . </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B" class="lead">B) 2, 4, 8, 16 e 16</label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C" class="lead">C) 2, 4, 8 e 8. </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D" class="lead">D)	0, 0, 0, 0 e 0. </label> 
              
          </section>
        </div>        
        <a  href="#p3" class="btn btn-primary">Proxima</a>     
      </div>    
      <div id="div3" class="container">    
        <div class="row slideanim">  
          <section id="p3">
            <p class="lead text-uppercase">Questão 3</p>
            <pre>
              Var: m, n1, n2, n3 :inteiro
              Inicio
                Leia(n1)
                m ← n1
                
                Leia(n2)
                Se(n2 > m)
                  Então m  ← n2
                fim_se
                
                Leia(n3)
                Se(n3 > m)
                  Então m  ← n2
                fim_se
                Se(n1 = n2 E n2 = n3)
                  Então imprima(“Essa Combinação de valores não é desejada!”);
                  Senão imprima (m)
                Fim_se 
              Fim

            </pre>
            <p class="lead">
              É incorreto afirmar :
            </p>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A" class="lead"><p>A) Exibirá o maior entre três números lidos, exceto se os três valores forem iguais. </p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B" class="lead"><p>B) Se forem lidos os valores 1, 3 e 6 nas variáveis n1, n2 e n3 respectivamente, a variável m receberá o valor 1, em seguida o valor 3 e, por último, o valor 6. </p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C" class="lead"><p>C) Se forem lidos os valores 7, 2 e 9 nas variáveis n1, n2 e n3 respectivamente, a variável m receberá o valor 7, em seguida o valor 2 e, por último, o valor 9.</p></label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
            <label for="question-3-answers-D" class="lead"><p>D) Se forem lidos os valores 9, 7 e 2 nas variáveis n1, n2 e n3 respectivamente, a variável m receberá apenas o valor 9.</p></label> 
              
          </section>
        </div>        
          <a href="#p4" class="btn btn-primary">Proxima</a>    
      </div>
      <div id="div4" class="container">    
        <div class="row slideanim">  
          <section id="p4">
            <p class="lead text-uppercase">Questão 4</p>
            <pre>
            Inicio
              status : literal
              valor: inteiro 
              
              Enquanto (status = “sim”)
              Faça
                escreva ("Digite um Valor: ")
                leia (valor)
              
                Se (valor < 5)
                  escreva ("Situacao 1 ")       
                Senão 
                  Se (valor < 10)
                    escreva ("Situacao 2 ")
                    
                  Senão
                    Escreva ("Situacao 3 ")
                    status = "n"
                  Fim se
                Fim se
                Imprima (“Deseja continuar? [S / N]”)
                Leia (status)
              Fim enquanto
            Fim		

            </pre>
            <p class="lead">
              Sobre o algoritmo acima, é correto afirmar:
            </p>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  /> 
            <label for="question-4-answers-A" class="lead">A)	Qualquer valor digitado e armazenado na variável valor menor do que 10 desencadeará a impressão da mensagem "Situação 2". </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B" class="lead">B) A mensagem "Situação 3" será exibida apenas se o valor digitado e armazenado na variável valor for maior do que 10.</label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C" class="lead">C)	O algoritmo será finalizado apenas quando a resposta da pergunta “Deseja continuar[sim/não]?” for "não". </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
            <label for="question-4-answers-D" class="lead">D)	A mensagem “Situação 2” será exibida se o valor digitado e armazenado na variável valor for maior ou igual a 5 e menor do que 10.	</label> 
              
          </section>
        </div>        
        <button type="submit" class="btn btn-secondary btn-lg"> Enviar </button>
      </div>
    </form>
  </body>
</html>
