<?php 
    session_start();
    function generatePassword($array,$psw_len){
        /*$psw = implode("",array_rand(array_flip($array),$psw_len));
        return $psw;*/
        $psw_chars = [];
        for ($i = 1; $i <= $psw_len; $i++){
            array_push($psw_chars,$array[rand(0,count($array))]);
        }
        
        return implode("",$psw_chars);
    }
?>