<?php
  
    class Web{

        public static function redireccionar($link , ...$arrays){
            $url = self::construirURL($link , ...$arrays);
            header($url); 
            exit();
        }

        public static function construirURL($link , ...$arrays):String{
            $url = "Location:".$link."?";
            foreach($arrays as  $array){

                foreach($array as $key => $value){

                    if(is_array($value) || is_object($value)){
                        $value = urlencode(serialize($value));
                    }
                    $url .= "$key=$value&";
                }
               
            }
            return substr($url, 0, -1);
        }
        
    }



?>