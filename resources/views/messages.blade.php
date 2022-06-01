<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FrankE Twitter</title>
    <link href="{{ URL::asset('style3.css') }}" rel="stylesheet">
</head>


<body>

    <!--Top Nav -->
    <div class="row text-dark">
        <div class="col-sm-3 "><svg stroke="currentColor" 
            fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" 
            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 
            505c-12 12-18.8 28.3-18.8 45.3 0 35.3 28.7 64 64 64h43.4V908c0 
            17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.
            3h43.4c17 0 33.3-6.7 45.3-18.8 24.9-25 24.9-65.5-.1-90.5z">
        </path></svg>Home</div>
        <div class="col-sm-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c22.779 0 41.411-18.719 41.411-41.6h-82.823c0 22.881 18.633 41.6 41.412 41.6zm134.589-124.8V224.8c0-63.44-44.516-117.518-103.53-131.041V79.2c0-17.682-13.457-31.2-31.059-31.2s-31.059 13.518-31.059 31.2v14.559c-59.015 13.523-103.53 67.601-103.53 131.041v114.4L80 380.8v20.8h352v-20.8l-41.411-41.6z"></path></svg>Notifications</div>
        <div class="col-sm-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>Me</div>
        <div class="col-sm-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1" viewBox="0 0 48 48" enable-background="new 0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g fill="#616161"><rect x="34.6" y="28.1" transform="matrix(.707 -.707 .707 .707 -15.154 36.586)" width="4" height="17"></rect><circle cx="20" cy="20" r="16"></circle></g><rect x="36.2" y="32.1" transform="matrix(.707 -.707 .707 .707 -15.839 38.239)" fill="#37474F" width="4" height="12.3"></rect><circle fill="#64B5F6" cx="20" cy="20" r="13"></circle><path fill="#BBDEFB" d="M26.9,14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2,1.2-6.9,3.2c-0.4,0.4-0.3,1.1,0.1,1.4c0.4,0.4,1.1,0.3,1.4-0.1 C16,13.9,17.9,13,20,13s4,0.9,5.4,2.5c0.2,0.2,0.5,0.4,0.8,0.4c0.2,0,0.5-0.1,0.6-0.2C27.2,15.3,27.2,14.6,26.9,14.2z"></path></svg>Search</div>
    </div>
    <!-- Hero Image -->
    <div class="hero">
       
    </div>

   

    <!-- Main Bar-->
    <div class="row text-dark" style="text-transform:uppercase;">
        <div class="col-sm-4 "></div>
        <div class="col-sm-1">Tweets</div>
        <div class="col-sm-1">Photos/Videos</div>
        <div class="col-sm-1">Following</div>
        <div class="col-sm-1">Followers</div>
        <div class="col-sm-1">More</div>
        <div class="col-sm-1">Options</div>
        <div class="col-sm-1">Follow</div>
    </div>


    <div class="row txtblue ">
        <div class="col-sm-4 "></div>
        <div class="col-sm-1">1'752</div>
        <div class="col-sm-1">35</div>
        <div class="col-sm-1">131</div>
        <div class="col-sm-1">30.1M</div>
        <div class="col-sm-1">26</div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    <hr style="width:100%;text-align:center;margin-left:0">
    <div class="row text-dark">
        <div class="col-sm-3 "></div>
        <div class="col-sm-2"> <ul>
            <li><a href="#">Tweets</a></li>
            <li><a href="#">Tweets and replies</a></li>
          </ul></div>
    </div>
    <!-- Main Page Body -->

    <div class="row text-dark">
        <!-- First Colomn -->
        <div class="col-sm-2 m-4 ">
            <img src="{{ URL::asset('twit.png') }}" alt="profile Pic" height="120" width="200">
            <img style="width: 150px"
                src="https://avatars.githubusercontent.com/u/98747637?v=4"
                alt="">
            <p>Francis</p>
            <p>@frank3thetank</p>
            <p>FrankTheTank's official Frank Twitter page with
                lots of design details to be sure to deliver a perfect result </p>
            <p>San Frank Frisco </p>
            <p>francisnicholls.ch </p>
            <p>Joined May 2022 </p>
            <button class="button btntweet">Tweet to frank3thetank</button>
        </div>




        <!-- SecondColomn -->

        <div class="col-sm-6 m-5 d-grid gap-3">
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
                    {{ $message->created_at->diffForHumans() }}
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
                </div>
                </div>
            @endforeach


            <div class="p-2 bg-light border"> Made with 💜 by Frank</div>
        </div>

        <!-- Third Colomn -->

        <div class="col-sm-2">

            <div class="shaded m-2">

                <h5 style="position: relative; text-align:left">Who to follow:</h5>

                <div class="col-sm-6">
                    <div class="d-flex">
                        <img style="width: 50px; height: 50px;" src="http://cdn.onlinewebfonts.com/svg/img_87237.png"
                            alt="">
                        <img style="width: 25px; height: 25px;"
                            src="https://clipground.com/images/verified-tick-png-6.png" alt="">
                        <p>Mustermayne</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex">
                        <p>@musterikognito</p>
                        <button style="border-radius: 8px; height:28px; background-color:grey;" class="button">
                            <img style="width: 25px; height: 25px;"
                                src="http://getdrawings.com/free-icon/human-icon-png-55.png" alt="">Follow</button>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="d-flex">
                        <img style="width: 50px; height: 50px;" src="https://cdn.onlinewebfonts.com/svg/img_215664.png"
                            alt="">
                        <img style="width: 25px; height: 25px;"
                            src="https://clipground.com/images/verified-tick-png-6.png" alt="">
                        <p>Businessmayne</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex">
                        <p>@musterikognito</p>
                        <button style="border-radius: 8px; height:28px; background-color:grey;" class="button">
                            <img style="width: 25px; height: 25px;"
                                src="http://getdrawings.com/free-icon/human-icon-png-55.png" alt="">Follow</button>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="d-flex">
                        <img style="width: 50px; height: 50px;" src="https://cdn2.iconfinder.com/data/icons/colored-simple-circle-volume-01/128/circle-flat-general-51851bd79-1024.png"
                            alt="">
                        <img style="width: 25px; height: 25px;"
                            src="https://clipground.com/images/verified-tick-png-6.png" alt="">
                        <p>Bluemayne</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex">
                        <p>@musterikognito</p>
                        <button style="border-radius: 8px; height:28px; background-color:grey;" class="button">
                            <img style="width: 25px; height: 25px;"
                                src="http://getdrawings.com/free-icon/human-icon-png-55.png" alt="">Follow</button>
                    </div>
                </div>
                <p style="position: relative; text-align:left; color:rgb(20, 109, 193)">Show more</p>

            </div>


            <div class="shaded m-2" style="position: relative; text-align:left">

                <h5 >Trends for you:</h5>
                <hr style="width:100%;text-align:center;margin-left:0">
                <p>1. Trending</p>
                <b><p>Help Ukraine</p></b>
                <p style="color: rgb(101, 101, 101)">22K Tweets</p>
                <hr style="width:100%;text-align:center;margin-left:0">
                <p>2. Trending</p>
                <b><p>Corona Mutants</p></b>
                <p style="color: rgb(101, 101, 101)">15K Tweets</p>
                <hr style="width:100%;text-align:center;margin-left:0">
                <p>3. Trending</p>
                <b><p>Fire and Ice</p></b>
                <p style="color: rgb(101, 101, 101)">8K Tweets</p>
                <hr style="width:100%;text-align:center;margin-left:0">
            </div>



        </div>





    </div>




</body>

</html>
