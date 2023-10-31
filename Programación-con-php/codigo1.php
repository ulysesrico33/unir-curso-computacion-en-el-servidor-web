<?php

function fx($x)
{
    do { 

        $cont =false;
        for($i = 0, $c=count($x)-1; $i < $c ; $i++)
        { 
            if($x[$i] > $x[$i+1])
                {
                    list($x[$i+1],$x[$i]) = array($x[$i],$x[$i+1]);
                    $cont = true;
                }
        } 
    
    }while ($cont);

    return $x;
}

?>

<?php

# Pregunta 2

$arrayP2 = array(3,0,2,5,-1,4,1);
print_r(fx($arrayP2 ));

?>
