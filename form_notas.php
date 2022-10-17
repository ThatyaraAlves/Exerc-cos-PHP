<?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota1 = str_replace(",",".",$nota1);
        $nota2 = $_GET["nota2"];
        $nota2 = str_replace(",",".",$nota2);
        echo "Olá, $nome";
        $situacao = "";
        $media = ($nota1 + $nota2) / 2;
        $resultado = number_format($media);
        
        
            $situacao = ($resultado < 2) ?  ("Reprovado"): (($resultado <= 2 || $resultado < 6) ? ("Exame final") : ("Aprovado"));
        
            echo "<p>Sua média final é: $resultado</p>";
            echo "Situação: <strong>$situacao</strong>";
       


    ?>
