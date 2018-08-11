<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Collective\Html;
use Collective\Form;

class PagesController extends Controller
{
    /*
    {{ Html::style('bootstrap-3.3.7/css/bootstrap.min.css') }}
    {{ Html::style('bootstrap-3.3.7/css/bootstrap.min.css') }}
    {{ HTML::script('bootstrap-3.3.7/js/bootstrap.min.js') }}
    {{ HTML::script('jquery-1.11.3.min.js') }}
     */
    function home()
    {
        return view('home');
    }
    
    function about()
    {
        return view('about');
    }
    
    function contact()
    {
        return view('contact');
    }
}
