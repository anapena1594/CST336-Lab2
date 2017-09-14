<?php
function getRandomImages($randomValue, $pos){
         
          switch ($randomValue){
              
              case 0:
                 echo"<img id='reel$pos' src= 'img/cherry.png' width='70px'>";
                  
                  break;
                  
              case 1:
                  echo "<img id='reel$pos' src= 'img/grapes.png' width= '70px'>";
                  break;
                  
              case 2:
                  echo "<img id='reel$pos' src= 'img/lemon.png' width= '70px'>";
                  break;
                  
              case 3:
                  echo "<img id='reel$pos' src= 'img/orange.png' width= '70px'>";
                  break;
                  
              
              
              
          }
         
      }
      
function displayPoints($randomValue1, $randomValue2, $randomValue3){
         echo "<div id='output'>";
         if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
             switch($randomValue1){
                 case 0: $totalPoints = 1000;
                         echo "<h1> Jackpot!</h1>";
                         break;
                 case 1: $totalPoints = 500;
                         break;
                 case 2: $totalPoints = 250;
                         break;
                 case 3: $totalPoints = 900;
                         break;
             }
             
             echo "<h2> You won $totalPoints points! </h2>";
         } else{
             echo "<h3> Try Again! </h3>";
         }
        echo "</div>";
         
     }
      
    function play() {
      for($i=1; $i<4; $i++){
       ${"randomValue"  . $i} = rand(0,3);
       getRandomImages(${"randomValue" . $i}, $i);
      }
      
      
      displayPoints($randomValue1, $randomValue2, $randomValue3);
     }




?>