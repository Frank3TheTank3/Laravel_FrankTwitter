<!--extend layout master.blade.php -->
@extends('master')
<!--sets value for section title to "Mini Twitter" (section title is used
in messages.blade.php) -->
@section('title', 'Mini Twitter')
<!--starts section content, defines some html for section content and end
section content
ts value for section title to "Mini Twitter" (section content is used in
messages.blade.php) -->
@section('content')

<div class="p-2 bg-light border">
    <a href="/">Back To Main Page</a>
</div>
<div class="p-2 bg-light border rounded-pill">
    <h2>Say something: </h2>

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Post-Title">
        <input type="text" name="content" placeholder="Your message...">
        <!-- this blade directive is necessary for all form posts somewhere in between
        the form tags -->
        @csrf
        <button class="rounded-pill"type="submit">Submit</button>
    </form>
</div>





@foreach ($messages as $message)
    <div class="p-2 bg-light border">
        <div class="d-flex m-4">
        <b><img class="m-2" style="width: 50px; border-radius: 50%"
                src="https://avatars.githubusercontent.com/u/98747637?v=4
                "
                alt="">
            <!-- this link to the message details is created dynamically
                    and will point to /messages/1 for the first message -->
            <a href="/message/{{ $message->id }}">{{ $message->title }}:</a>

        </b><br>
    </div>
        {{ $message->content }}<br>
   
        <div class="d-flex m-4">
        {{ $message->updated_at->diffForHumans() }}
        <form action="/message/{{ $message->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
        <form action="/message/{{ $message->id }}" method="post">
            @csrf
            @method('get')
            <button type="submit">Edit</button>
        </form>
        <form action="/message/{{ $message->id }}" method="post">
            @csrf
            <button type="submit">Delete Content</button>
        </form>
    </div>
    </div>
@endforeach
@endsection