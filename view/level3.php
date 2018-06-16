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
    
    
    <form id="formGame" action="../controller/GameController.php?Operacao=jogo&level=3" method="POST">  
      <div id="div1" class="container">    
        <div class="row slideanim"> 
          <section id="p1">
            <p class="lead text-uppercase">Questão 1</p> 
            
            <p class="lead">
              Considere o seguinte algoritmo 
            </p>
            <pre> 
              Inteiro array[10] = {0,1,2,3,4,5,6,7,8,9}
              var i = 0
              Enquanto i < 10 Faça
                Inteiro temp = array[i]
                array[i] = array[9-i]
                array[9-i] = temp
                i = i + 1
              Fim enquanto
            </pre>
            <p>
              Qual será o conteúdo do vetor ‘array’ após a execução do programa?
            </p>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" /> 
            <label for="question-1-answers-A" class="lead">A)	0, 1, 2, 3, 4, 9, 8, 7, 6, 5  </label>
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B" class="lead">B)	9, 8, 7, 6, 5, 4, 3, 2, 1, 0  </label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-CB" class="lead">C) 9, 8, 7, 6, 5, 0, 1, 2, 3, 4</label> 
            <br>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D" class="lead">D)	0, 1, 2, 3, 4, 5, 6, 7, 8, 9 </label> 
              
          </section>
        </div>        
        <a id="btn_proximo" href="#p2" class="btn btn-primary">Proxima</a>    
      </div>
            
      <div id="div2" class="container">    
        <div class="row slideanim">  
          <section id="p2">
            <p class="lead text-uppercase">Questão 2</p>
            <pre>
              Algoritmo I:
              Função fatorial (i)
                Fat(i)  =  se i <= 1 então 1 senão i * fat(i)

              Algoritmo II:
              Fat[0] = 1;
              Para (j = 1  .....  j ++ )
              Faça
                fat[j] = j * fat[j-1]


            </pre>
            <p>
              Assinale a alternativa correta:
            </p>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"  /> 
            <label for="question-2-answers-A" class="lead">A)	Os algoritmos I e II são recursivos </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B" class="lead">B)	Somente o algoritmo I é recursivo.</label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C" class="lead">C)	Somente o algoritmo II é recursivo. </label> 
            <br>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D" class="lead">D)	O algoritmo I não é recursivo e o II é orientado a objeto. </label> 
              
          </section>
        </div>        
        <a  href="#p3" class="btn btn-primary">Proxima</a>     
      </div>    
      <div id="div3" class="container">    
        <div class="row slideanim">  
          <section id="p3">
            <p class="lead text-uppercase">Questão 3</p>
            <pre>
              int main()
              {
                  int vetor [] = {1867 , 1947 , 2007};
                  int *ano;
                  ano = &vetor[0];
                  ano ++;
                  printf("valor: %d" , *ano);
                  (*ano)++;
                  printf("valor: %d" , *ano);
              }
            </pre>
            <p class="lead">
              Assinale a opção correspondente ao resultado que seria impresso para a variável Valor, após a execução do trecho de código escrito em linguagem C acima mostrado.
            </p>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A" class="lead">A)	 Valor: 1967 Valor: 1968.</label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B" class="lead">B)	Valor: 2007 Valor: 2008. </label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C" class="lead">C)	Valor: 1947 Valor: 2007.</label> 
            <br>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
            <label for="question-3-answers-D" class="lead">D)	Valor: 1947 Valor: 1948.</label> 
              
          </section>
        </div>        
          <a href="#p4" class="btn btn-primary">Proxima</a>    
      </div>
      <div id="div4" class="container">    
        <div class="row slideanim">  
          <section id="p4">
            <p class="lead text-uppercase">Questão 4</p>
            <pre>
            void exchange(int a, int b);
            void main()
            { 
              int a, b;
              a = 5;
              b = 7;
              exchange(a, b);
              printf("a = %d, b = %d\n", a, b);
            }
           
            void exchange(int a, int b)
            {
              int temp;
              temp = a;
              a = b;
              b = temp;
              printf("a = %d, b = %d\n", a, b);
            }

            </pre>
            <p class="lead">
              Com relação à execução do código em linguagem C acima, assinale a opção correta.
            </p>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A"  /> 
            <label for="question-4-answers-A" class="lead">A)	O código não será executado pois tem erros de sintaxe, o que resultará em erros de compilação. </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B" class="lead">B)	O programa imprimirá a = 7, b = 5 em uma linha e, na seguinte, a = 7, b </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C" class="lead">C)	O programa imprimirá a = 7, b = 5 em uma linha e, na linha seguinte, a = 5, b = 7. </label> 
            <br>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
            <label for="question-4-answers-D" class="lead">D)	O programa imprimirá a = 7, b = 5 duas vezes na mesma linha.	</label> 
              
          </section>
        </div>        
        <button type="submit" class="btn btn-secondary btn-lg"> Enviar </button>
      </div>
    </form>
  </body>
</html>
