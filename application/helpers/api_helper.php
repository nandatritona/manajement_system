<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    if(!function_exists('setApi')){
        function setApi($set = 'private'){
            if($set === "public"){
                return "http://192.168.64.2/APIAbsensiQR";
            } else if($set === "private"){
                return "http://192.168.64.2/APIAbsensiQR";
            }
        }
    }