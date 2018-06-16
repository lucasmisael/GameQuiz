<?php

    //INicia Sessão
    session_start();


    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $r_erradas = "";
    $totalCorrect = 0;
    $totalIncorrect = 0;
    $resp_erradas = array();

    //Trata qual a questão e suas questões corretas
    if($answer1 != null && $answer2 != null && $answer3 != null && $answer4 != null){
        if ($_REQUEST["Operacao"] == "jogo"  && $_REQUEST["level"] == '1'  ){
            if ($answer1 == "A")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 1 ';
            }
            if ($answer2 == "C")
            $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 2 ';
            }
            if ($answer3 == "D")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 3 ';
            }
            if ($answer4 == "C")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 4 ';
            }
        }   
        
        if ($_REQUEST["Operacao"] == "jogo"  && $_REQUEST["level"] == '2'  ){
            if ($answer1 == "B")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 1 ';
            }
            if ($answer2 == "A")
            $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 2 ';
            }
            if ($answer3 == "C")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 3 ';
            }
            if ($answer4 == "D")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 4 ';
            }
        }   
        if ($_REQUEST["Operacao"] == "jogo"  && $_REQUEST["level"] == '3'  ){
            if ($answer1 == "B")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 1 ';
            }
            if ($answer2 == "B")
            $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 2 ';
            }
            if ($answer3 == "A")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 3 ';
            }
            if ($answer4 == "C")
                $totalCorrect ++;
            else{
                $totalIncorrect++;
                $resp_erradas[] = 'Pergunta 4 ';
            }
        } 
    }
    else{
        echo  "<script>
                    alert('Não é permitido questões sem preenhcer!');
               </script>";
        echo "<script>  window.history.back()</script>";
    }
    //Trata as variaveis para replace em HTML
    $html = file_get_contents('../view/Resposta.php');
    
    if ($totalCorrect == 0 ){
        $img_ = '<a href="http://s1250.photobucket.com/user/lucasmisael/media/pessimo_zps8yl6v3jw.gif.html" target="_blank"><img style="display:block; margin-left:auto;margin-right:auto; ;" src="http://i1250.photobucket.com/albums/hh531/lucasmisael/pessimo_zps8yl6v3jw.gif" border="0" alt=" photo pessimo_zps8yl6v3jw.gif" ></a>';
        $resposta = 'Que Pena :( ';
        $html = str_replace('%IMAGEM%' , $img_ , $html);
        $html = str_replace('%Resposta%' ,$resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        for($cont = 0; $cont < sizeof($resp_erradas) ; $cont++){
            $r_erradas .= "";
            $r_erradas .= $resp_erradas[$cont];

        }
        $html = str_replace("#RespostasErradas#" , $r_erradas , $html);
    }
    
    
    if($totalCorrect == 1){
        $img_ = '<a href="http://s1250.photobucket.com/user/lucasmisael/media/ruim_zpstm6wtjkv.gif.html" target="_blank"><img style="display:block; margin-left:auto;margin-right:auto; ;" src="http://i1250.photobucket.com/albums/hh531/lucasmisael/ruim_zpstm6wtjkv.gif" border="0" alt=" photo ruim_zpstm6wtjkv.gif" class=".img_Resposta"></a>';
        $resposta = 'Parabenssssss!!!';
        $html = str_replace('%IMAGEM%' , $img_ , $html);
        $html = str_replace('%Resposta%' ,$resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        for($cont = 0; $cont < sizeof($resp_erradas) ; $cont++){
            $r_erradas .= "";
            $r_erradas .= $resp_erradas[$cont];

        }
        $html = str_replace("#RespostasErradas#" , $r_erradas , $html);
    
    }
    if($totalCorrect == 2){
        $img_ = '<a href="http://s1250.photobucket.com/user/lucasmisael/media/medio_zpsqiifw5dm.gif.html" target="_blank"><img style="display:block; margin-left:auto;margin-right:auto; ;" src="http://i1250.photobucket.com/albums/hh531/lucasmisael/medio_zpsqiifw5dm.gif" border="0" alt=" photo medio_zpsqiifw5dm.gif"></a>';
        $resposta = 'Parabenssssss!!!';
        $html = str_replace('%IMAGEM%' , $img_ , $html);
        $html = str_replace('%Resposta%' ,$resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        for($cont = 0; $cont < sizeof($resp_erradas) ; $cont++){
            $r_erradas .= "";
            $r_erradas .= $resp_erradas[$cont];

        }
        $html = str_replace("#RespostasErradas#" , $r_erradas , $html);
    
    }

    if($totalCorrect == 3){
        $img_ = '<a href="http://s1250.photobucket.com/user/lucasmisael/media/bom_zpsl1lnlitv.gif.html" target="_blank"><img  style="display:block; margin-left:auto;margin-right:auto;" src="http://i1250.photobucket.com/albums/hh531/lucasmisael/bom_zpsl1lnlitv.gif" border="0" alt=" photo bom_zpsl1lnlitv.gif"></a>';
        $resposta = 'Parabenssssss!!!';
        $html = str_replace('%IMAGEM%' , $img_ , $html);
        $html = str_replace('%Resposta%' ,$resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        for($cont = 0; $cont < sizeof($resp_erradas) ; $cont++){
            $r_erradas .= "";
            $r_erradas .= $resp_erradas[$cont];

        }
        $html = str_replace("#RespostasErradas#" , $r_erradas , $html);
    
    }
    if($totalCorrect == 4){
        $img_ = '<a href="http://s1250.photobucket.com/user/lucasmisael/media/otimo_zpsyihrc0s1.gif.html" target="_blank"><img style="display:block; margin-left:auto;margin-right:auto; ;" src="http://i1250.photobucket.com/albums/hh531/lucasmisael/otimo_zpsyihrc0s1.gif" border="0" alt=" photo otimo_zpsyihrc0s1.gif"></a>';
        $resposta = 'Parabenssssss!!!';
        $html = str_replace('%IMAGEM%' , $img_ , $html);
        $html = str_replace('%Resposta%' ,$resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        for($cont = 0; $cont < sizeof($resp_erradas) ; $cont++){
            $r_erradas .= "";
            $r_erradas .= $resp_erradas[$cont];

        }
        $html = str_replace("#RespostasErradas#" , $r_erradas , $html);
    
    }

    
    echo $html;
    
    
   
    
?>

