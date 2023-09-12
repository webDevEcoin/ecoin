<?php

function getRole($email,$password,$data){
    foreach($data as $val):
        if( in_array($email,$val)):
            if($email==$val['email']&& $password==$val['password']){
                if(array_key_exists("role",$val))
                return $val['role'];
                else return -1;
            }else  return -1;
        endif;
     endforeach;
 
}

