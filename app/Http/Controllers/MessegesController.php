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
      $user = $request->user();
      $image = $request->file('image');

      $message = Messege::create([
        'user_id' => $user->id,
        'content' => $request->input('message'),
        //'image' => 'http://placeimg.com/600/338?'.mt_rand(0, 1000),
        'image' => $image->store('messages', 'public')
      ]);
        return redirect('/messege/'.$message->id);
  }
  public function search(Request $request){
      $query = $request->input('query');

      $messages = Messege::search($query)->get();
      $messages->load('user');

      return view('messages.index', [
          'messages' => $messages,
      ]);
  }
  public function responses(Messege $messege){
      return $messege->responses;
  }
}
