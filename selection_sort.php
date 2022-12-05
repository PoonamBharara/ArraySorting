<?php

 function selection_sort(){
    $arr = [23, 34, 8, 9, 1, 3];

    for($i=0;$i<=count($arr)-1;$i++){
                          
        for($j=0;$j<=count($arr)-1;$j++){

            if($arr[$i] < $arr[$j]){ //j is greater than i
                
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
              //  echo $arr[$i] ."    and    ". $arr[$j] . "<br>" . "<br>" . "<br>". "<br>";
            }       
          
            //   break;
        }
        
    }
    return $arr;
 }
 echo "<pre>";
  print_r(selection_sort());
  echo "</pre>";
?>