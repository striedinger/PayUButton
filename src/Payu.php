<?php

namespace striedinger\PayUButton;

use striedinger\PayUButton\Classes\PayuButton;

class Payu 
{
	public $payubutton;
    
    public function __construct()
    { 
        $this->payubutton  = new PayuButton;
    }
	
	public function payuButton(){
       return $this->payubutton;
    } 
	  
 }