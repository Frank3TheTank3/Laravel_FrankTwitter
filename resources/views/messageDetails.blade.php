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

<div class="p-2 bg-light border rounded-pill">
    <h2>Edit Message: </h2>

    <form action="/edit/{{$message->id}}" method="post">
        <input type="text" name="title" value="{{$message->title}}">
        <input type="text" name="content" value="{{$message->content}}">
        <!-- this blade directive is necessary for all form posts somewhere in between
        the form tags -->
        @csrf
        <button class="rounded-pill"type="submit">Confirm</button>
    </form>
</div>
@endsection
