<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-06-26
 * Time: 1:22 PM
 */

/**
 * @param $input
 *
 * @return null|string
 */
function rfv_validate($input){
    if($input){
       return true;
    }
    else{
        return false;
    }
}

function in_range($input,$limit){
    if(strlen($input)<$limit || strlen($input)>$limit){
        return false;
    }
    else{
        return true;
    }
}

/**
 * @param $number
 * @return bool
 */
function is_phoneNumber($number){
    if($number > 10){
        if(preg_match("/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/",$number)){
            return true;
        }
        else{
            return false;

        }
    }
    else{
        return false;
    }
}

/**
 * @param $email
 * @return bool
 */
function is_email($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}