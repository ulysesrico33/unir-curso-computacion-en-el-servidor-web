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
    
    }while ($x-- > 0);

    return $x;
}
$array_test = array(8,10,3,5,6);
fx($array_test);

?>