<?php

    //INicia Sessão
    session_start();


    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];



    $totalCorrect = 0;
    $totalIncorrect = 0;
    $RespostasErradas = '';


    if ( isset($_REQUEST["Operacao"]) && ( $_REQUEST["Operacao"] == "jogo" ) ){

        if ($answer1 == "B"){
            $totalCorrect++; 
        }
        else{
            $totalIncorrect++;
            $RespostasErradas = 'Pergunta 1 ';
        }

        if($answer2 == "A"){
            $totalCorrect++;
        }
        else{
            $totalIncorrect++;
            if($totalIncorrect > 1)
                $RespostasErradas .=  ',';
            
                $RespostasErradas .= ' Pergunta 2';
            
            
            
        }

    }
    
    $Resposta = '';
    $html = file_get_contents('../view/Resposta.php');
    
    if($totalCorrect >= 1){
        $Resposta = 'Parabenssssss!!!';
        $html = str_replace('%Resposta%' ,$Resposta , $html );   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        $html = str_replace("#RespostasErradas#" , $RespostasErradas , $html);
    
    }
    else if ($totalCorrect == 0 ){
        $Resposta = 'Que Pena :( ';
        $html = str_replace('%Resposta%' ,$Resposta , $html);   
        $html = str_replace('#$totalCorrect#',  $totalCorrect ,$html  );
        $html = str_replace("#RespostasErradas#" , $RespostasErradas , $html);
    }

    
    echo $html;
    
?>

