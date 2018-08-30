<?php

namespace App\Http\Controllers;

use App\Messege;
use Illuminate\Http\Request;

class MessegesController extends Controller
{
  public function show(Messege $messege) {

        //$message = Messege::find($id);
        return view('messages.message', [
          'messege' => $messege,
        ]);
  }
}
