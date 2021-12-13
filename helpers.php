<?php
 
 function validate($input,$flag){
 
      $status = true ;
      switch ($flag) {
          case 1:
              # code...
              if (empty($input)) {
                  # code...
                  $status = FALSE ;
              }
              break;
              case 2 ;
              if (strlen($input) < 6) {
                  # code...
                  $status = FALSE ;
              }
              break;
              case 3:
                  # code...
                  if (strlen($input) < 30) {
                      # code...
                      $status = FALSE;
        
                  }
                  break;




          
      }

         return $status ;
     }

    function clean($input){
        return strip_tags(trim($input));
         }







?>