<?php  error_reporting(0);

if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = "en"; 
    $_SESSION['lang_img'] = "us.png";
    
}
else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
    
        if($_GET['lang']=="en"){
            $_SESSION['lang'] = "en";
            $_SESSION['lang_img'] = "us.png";
        }
        
        else 
            if($_GET['lang']=="gr"){
                $_SESSION['lang'] = "gr";
            $_SESSION['lang_img'] = "germany.png";
            }
        else 
            if($_GET['lang']=="ch"){
                $_SESSION['lang'] = "ch";
            $_SESSION['lang_img'] = "china.png";
            }
        else if($_GET['lang']=="id"){
            $_SESSION['lang'] = "id";
            $_SESSION['lang_img'] = "indonesia.png";
    
        }

    }

require_once $_SESSION['lang'] . ".php";

?>