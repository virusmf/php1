<?php

function operations($q, $w, $e)
 {
     switch ($w){
         case 1:
             return ( $q+$e );
             break;
         case 2:
             return ( $q-$e );
             break;
         case 3:
             return ( $q*$e );
             break;
         case 4:
             return ( $q/$e );
             break;

     }
 }

assert( 2 === operations(1,1,1));
assert( 1 === operations(2,2,1));
assert( 1 === operations(1,3,1));
assert( 2 === operations(4,4,2));
