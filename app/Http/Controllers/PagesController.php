<?php

namespace App\Http\Controllers;

use App\Messege;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      $messeges = Messege::all();

      return view('welcome', [
        'messeges' => $messeges,
      ]);
    }
}
