<?php
  
    class Web{

        public static function redirect($link , ...$arrays):String{
            
            $url = "Location:".$link."?";

            foreach($arrays as  $array){

                foreach($array as $key => $value){

                    if(is_array($value) || is_object($value)){
                        $value = urlencode(serialize($value));
                    }
                    $url .= "$key=$value&";
                }
               
            }

            $Location =  substr($url, 0, -1);;
            header($Location); 
            exit();
        }
    }



?>