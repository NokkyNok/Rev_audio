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




   /* new homw */
   public function home()
   {
    return view('Front2.index');
   }

   public function login()
   {
    return view('Front2.login');
   }

   public function pegister()
   {
    return view('Front2.register');
   }

   public function event()
   {
    return view('Front2.event');
   }
   public function uploads()
   {
    return view('Front2.uploads');
   }
    
    
}
