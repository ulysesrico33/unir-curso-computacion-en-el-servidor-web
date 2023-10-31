<?php

function fx($x)
{
   $loe=$gt =array();
   if(count($x)<2)
   {

    return $x;
   }

   $pivot_key =key($x);
   $pivot= array_shift($x);
   foreach($x as $val)
   {
       if($val <= $pivot)
       {
           $loe[] =$val;

       }elseif($val > $pivot)
       {

            $gt[] =$val;
       }
   }
   return array_merge(fx($loe),array($pivot_key => $pivot),fx($gt));
}

?>

<?php

#Pregunta 6

$arrayP6 = fx(array(3,0,2,5,-1,4,1));
foreach ($arrayP6 as $e) {
    echo "$e ";
  }

?>