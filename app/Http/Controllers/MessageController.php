<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all()->sortByDesc('created_at');
        return view('messages.index', ['messages' => $messages]);
    }



    public function create(Request $request) {

        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/messages');

    }


    public function store(Request $request) {

        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/messages');

    }


    public function update(Request $request, $id) {

        $message = Message::find($id);
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();
        return redirect('/messages');

    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', ['message' => $message]);
    }



    public function destroy($id) {


        $result = Message::findOrFail($id)->delete();
        return redirect('/messages');
    }

    public function deletecontent($id) {

        $message = Message::find($id);
        $message->content = "";

        $message->save();

        return redirect('/messages');
    }



}

