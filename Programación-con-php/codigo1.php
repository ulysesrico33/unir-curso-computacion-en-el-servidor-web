<?php

# Conclusiones : Creo es Insertion Sort
# No puede ser bubble sort porque el número de pasadas es siempre tamArreglo -1
# No puede ser merge sort porque el algoritmo nunca parte el arreglo
# No puede ser quick sort porque no hay pivote.

function fx($x)
{
    $res=count($x)-1;
    $pasada = 0;
    echo "Número de elementos : $res \n";
    do { 

        $cont =false;
        if ($cont == false)
        {
           $pasada++;

        }
        $c=count($x)-1;
        for($i = 0; $i < $c ; $i++)
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
    
    echo "Total de pasadas : $pasada \n";
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
