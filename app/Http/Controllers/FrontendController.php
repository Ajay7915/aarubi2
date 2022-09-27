<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index(){
    return view('frontend.index');
   }
  
   public function aboutus(){
    return view('frontend.about');
   }
   
   public function services(){
    return view('frontend.service');
   }
   public function products(){
    return view('frontend.project');
   }
   public function contacts(){
    return view('frontend.contact');
   }
   
   
}
