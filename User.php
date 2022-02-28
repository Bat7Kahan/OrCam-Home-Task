<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of User
 *
 * @author Batsheva Kahan
 */
class User {
    //put your code here
    //Props
    private $first_name;
    private $last_name;
    private $country;
    private $phone;
    private $email;
    
    //functions
    function set_first_name($first_name){
        $this->first_name = $first_name;
    }
    
    function set_last_name($last_name){
        $this->last_name = $last_name;
    }
    
    function set_country($country){
        $this->country = $country;
    }
    
    function set_phone($phone){
        $this->phone = $phone;
    }
    
    function set_email($email){
        $this->email = $email;
    }
    
    
    function get_email_body(){        
        $email_body = "First Name: ";
        $email_body .= $this->first_name;
        $email_body .= "\n";
        $email_body .= "Last Name: ";
        $email_body .= $this->last_name;
        $email_body .= "\n";
        $email_body .= "Country: ";
        $email_body .= $this->country;
        $email_body .= "\n";
        $email_body .= "Phone: ";
        $email_body .= $this->phone;
        $email_body .= "\n";
        $email_body .= "Email: ";
        $email_body .= $this->email;
        $email_body .= "\n";
        return $email_body;
    }
}
