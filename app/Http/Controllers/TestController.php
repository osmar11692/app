<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
    	$a= 5;
    	$b= 4;
    	$c= $a + $b;
    	return "El resultado es: $c";
    }
}
