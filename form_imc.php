
<?php
 
 $peso = $_POST["peso"];
 $altura = $_POST["altura"];
 $altura = str_replace(",",".",$altura);
 $peso = str_replace(",",".",$peso);
 $status = '';
 $imc = $peso / ($altura * $altura);
 $resultado = number_format($imc);

    if(isset($resultado) && $resultado != '0'){
        if($resultado < 17){
            $status = 'Muito abaixo do peso';
            
        }
        elseif($resultado >= 17 && $resultado < 18.49){
            $status = 'Abaixo do peso';
            
        }
        elseif($resultado >= 18.5 && $resultado < 24.99){
            $status = 'Peso normal';
            
        }
        elseif($resultado >= 25 && $resultado < 29.99){
            $status = 'Acima do peso';
           
        }
        elseif($resultado >= 30 && $resultado < 34.99){
            $status = 'Obesidade I';
            
        }
        elseif($resultado >= 35 && $resultado < 39.99){
            $status = 'Obesidade II (severa)';
            
        }
        else{
            $status = 'Obesidade II (severa)';
            
        }
        echo "Seu IMC é {$resultado}, <br><strong>{$status}</strong>";
        
    }
?>
    
    
     


