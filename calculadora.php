<?php

class calculadora{
   public $op;
   public $c;
   public $a;
   public $b; 

   public function formular($a, $b, $op){
      
      if( !empty($op) ) {
         if($op == '+')
            $this->c = $a + $b;
               else if($op == '-')
                  $this->c = $a - $b;
               else if($op == '*')
                  $this->c = $a*$b;
               else
                  $this->c = $a/$b;

         return $this->c;
      }
   } 
}
?> 