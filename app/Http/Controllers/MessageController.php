<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   
    
    public function showAll() {
        $messages = Message::all()->sortByDesc('created_at');
        return view('messages', ['messages' => $messages]);
    }

    public function create(Request $request) {
 
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/messages');        
        
    }

    public function edit(Request $request) {
 
        $message = Message::find($request->id);
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/messages');        
        
    }

    public function details($id) {
        $message = Message::findOrFail($id);  
        return view('messageDetails', ['message' => $message]);
    }
 
    public function delete($id) {
 
      
        $result = Message::findOrFail($id)->delete(); 
        return redirect('/messages');        
    } 
 
    public function deleteContent(Request $request) {
 
        $message = Message::find($request->id);
        $message->content = "";
   
        $message->save();
   
        return redirect('/messages');        
    } 
 
 
    
}

