<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;

class FirstController extends Controller
{
   public function index()
   {
       $operation = Operation::all();

       return view('Front.index',compact('operation'));
   }

   public function about()
   {

       return view('Front.about');
   }
    
}
