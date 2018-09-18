<?php

namespace App\Http\Controllers;

use App\Messege;
use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class MessegesController extends Controller
{
  public function show(Messege $messege) {

        //$message = Messege::find($id);
        return view('messages.message', [
          'messege' => $messege,
        ]);
  }

  public function create(CreateMessageRequest $request){
      $message = Messege::create([
        'content' => $request->input('message'),
        'image' => 'http://placeimg.com/600/338?'.mt_rand(0, 1000),
      ]);
        return redirect('/messege/'.$message->id);
  }
}
