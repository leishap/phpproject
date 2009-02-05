<?php
    function gradecalc($grade){
       $result="";
       switch($grade){
           case($grade>=90):
               $result="You got an A!";
               break;
           case($grade>=80):
               $result="You got a B!";
               break;
           case($grade>=70):
               $result="You got a C!";
               break;
           case($grade>=60):
               $result="You got a D, better try harder!";
               break;
           default:
               $result="You failed. Try again!";
       }
        return $result;
   }
?>