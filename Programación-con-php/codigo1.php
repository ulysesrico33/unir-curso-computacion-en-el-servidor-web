<?php

function fx($x)
{
    do { 

        $cont =false;
        for($i = 0, $c=count($x)-1; $i < $c ; $i++)
        { 
            if($x[$i] > $x[$i+1])
                {
                    # Usa una lista para modificar el arreglo original
                    list($x[$i+1],$x[$i]) = array($x[$i],$x[$i+1]);
                    $cont = true;
                
                }
        } 
    
        #cont = false si el arreglo ya está ordenado
    }while ($cont);
    
    return $x;
}

?>

<?php

# Pregunta 2

$arrayP2 = fx(array(3,0,2,5,-1,4,1));
foreach ($arrayP2 as $e) {
    echo "$e ";
  }

?>
