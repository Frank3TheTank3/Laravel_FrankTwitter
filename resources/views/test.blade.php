<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FrankE Twitter</title>
</head>
<style>
    body {
        text-align: center;
        background-image: url('../img/twi.jpg');
        color: aliceblue;
        display: block;

    }

    .cont {
        background-color: #fff;
        width: 350px;
        justify-content: center;
    }

    .center {
        margin: 0 auto;

    }

    h2 {
        color: black;
    }

    button {

        background-color: rgb(12, 148, 21);
        color: #fff;
    }

    .details {
        background-color: rgb(0, 76, 162);
        width: 250px;
        display: inline-block;
        text-align: center;
        margin: 2%;
        border: 2px solid #000;
        border-radius: 15px;
    }

    .title a {
        color: #fff;
    }

    .title {
        background-color: rgb(0, 76, 162);
        width: 250px;
        display: inline-block;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 15px;
        color: #fff;
    }

    .message {
        background-color: rgb(0, 76, 162);
        width: 250px;
        display: inline-block;
        text-align: center;
        margin: 2%;
        border: 2px solid #000;
        border-radius: 15px;
    }

    li {
        list-style-type: none;
    }

    .hero{
        height: 250px;
        background-color: rgb(23, 103, 172)
    }

    .card{
        background-color: darkgrey;
        height: 250px;
    }

</style>

<body>
 <!--extend layout master.blade.php -->
 @extends('master')
 <!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
 @section('title', 'Live Messages')
 
 <!--starts section content, defines some html for section content and end section content
 ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
 @section('content')
 
    <div class="row text-dark">
        <div class="col-sm-3 ">Home</div>
        <div class="col-sm-3">Notifications</div>
        <div class="col-sm-3">Me</div>
        <div class="col-sm-3">Search</div>
    </div>

    <div class="hero">

    </div>

    <div class="row text-dark">
        <div class="col-sm-4 ">Profile Image</div>
        <div class="col-sm-1">Tweets</div>
        <div class="col-sm-1">Photos/Videos</div>
        <div class="col-sm-1">Following</div>
        <div class="col-sm-1">Followers</div>
        <div class="col-sm-1">More</div>
        <div class="col-sm-1">Options</div>
        <div class="col-sm-1">Follow</div>
    </div>


    <div class="row text-dark">
        <div class="col-sm-4 "></div>
        <div class="col-sm-1">1'752</div>
        <div class="col-sm-1">35</div>
        <div class="col-sm-1">131</div>
        <div class="col-sm-1">30.1M</div>
        <div class="col-sm-1">26</div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>

    <div class="row text-dark">
        <div class="col-sm-4 "></div>
        <div class="col-sm-1">Tweets</div>
        <div class="col-sm-2">Tweets and replies</div>
        <div class="col-sm-5 "></div>
    </div>

    <div class="row text-dark">
        <div class="col-sm-2 m-4 ">
            <img style="width: 150px" 
            src="https://bestprofilepictures.com/wp-content/uploads/2021/04/Cool-Profile-Picture-986x1024.jpg" alt="">
            <p>Francis</p>
            <p>@frank3thetank</p>
            <p>FrankTheTank's official Frank Twitter page with
                lots of design details to be sure to deliver a perfect result </p>
            <p>San Frankrisco </p>
            <p>francisnicholls.ch </p>
            <p>Joined May 2022 </p>
            <button class="button">Tweet to frank3thetank</button>
        </div>
        <div class="col-sm-6">

            <div class="cont">
        
                <!--extend layout master.blade.php -->
                @extends('master')
                <!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
                @section('title', 'Live Messages')
                
                <!--starts section content, defines some html for section content and end section content
                ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
                @section('content')
        
                <img src="{{URL::asset('twit.png')}}" alt="profile Pic" height="220" width="400">
        
                <a href="/">Back To Main Page</a>
                <h2>Say something: </h2>
                
                <form action="/create" method="post">
                <input type="text" name="title" placeholder="Post-Title">
                <br> <br>
                <input type="text" name="content" placeholder="Your message...">
                <!-- this blade directive is necessary for all form posts somewhere in between
                    the form tags -->
                @csrf
                <button type="submit">Submit</button>
                </form>
        
                <div class="details">
                <h1>News feed:</h1>
            </div>
                <ul>
                <!-- loops through the $messages, that this blade template
                gets from MessageController.php. for each element of the loop which
                we call $message we print the properties (title, content
                and created_at in an <li> element -->
                    @foreach ($messages as $message) 
                    <li>
                        
                        <b>
                            <!-- this link to the message details is created dynamically
                                and will point to /messages/1 for the first message -->
                                <div class="title">
                            <a href="/message/{{$message->id}}">{{$message->title}}:</a>
                                </div>
                        </b><br>
                        <div class="message">
                        {{$message->content}}<br>
                        {{$message->created_at->diffForHumans()}}
                        <form action="/message/{{$message->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>  
                    </div>         
                    </li>
                @endforeach
                
                </ul>
                
                @endsection
               
        </div>
                
           
        

           

        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="text-center text-lm">
        Made with 💜 by Frank
    </div>
    
    

</body>

</html>
