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
 
        // we create a new Message-Object
        $message = new Message();
        // we set the properties title and content
        // with the values that we got in the post-request
        $message->title = $request->title;
        $message->content = $request->content;
   
        // we save the new Message-Object in the messages
        // table in our database
        $message->save();
   
        // at the end we make a redirect to the url /messages
        return redirect('/messages');        
        
    }

    public function edit(Request $request) {
 
        // we create a new Message-Object
        $message = Message::find($request->id);
        // we set the properties title and content
        // with the values that we got in the post-request
        $message->title = $request->title;
        $message->content = $request->content;
   
        // we save the new Message-Object in the messages
        // table in our database
        $message->save();
   
        // at the end we make a redirect to the url /messages
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

