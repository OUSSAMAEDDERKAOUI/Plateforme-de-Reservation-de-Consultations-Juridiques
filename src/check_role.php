<?php

function isAuth($role){
    if(isset($_COOKIE['user_id']) && isset($_COOKIE['user_role'])){
        return $_COOKIE['user_role'] == $role;
    }else if($role == 'guest'){
        return true;
    }

    return false;
}