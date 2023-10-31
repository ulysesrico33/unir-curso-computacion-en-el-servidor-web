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

$arrayTest = array(6,1,9,3,5);
print_r(fx($arrayTest));

?>