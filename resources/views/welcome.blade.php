<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frank's Super Ultra Mega Page</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ URL::asset('style.css') }}" rel="stylesheet">

   


</head>

<body class="antialiased">
   
    <div class="row">
        <div class="col-sm-4 m-4">

           

        </div>
    </div>

    <div +class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       
      
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
           
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img style="width: 350px" src="https://francisnicholls.ch/img/logo_fra4.png" alt="">
            </div>

            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <a href="/messages"><img style="width: 150px" 
                    src="https://www.mappingmegan.com/wp-content/uploads/2017/01/twitter-logo-png-transparent-background-twitter-transparent-logo-png.png" 
                    alt="">FRANK TWITTER</a>
            </div>

            <h1>Unsere Lavarel Gruppe:</h1>
            @foreach ($students as $student) 
           
                <b>
                    <!-- this link to the message details is created dynamically
                        and will point to /messages/1 for the first message -->
                        
                        <div class="title">
                        <div class="student">
                        <p>Vorname: {{$student->firstName}}</p>
                        
                        
                        <p>Nachnahme:  {{$student->lastName}}</p>
                       
                        
                        <p>Lehrer/-in: {{$student->teacherName}}</p>

                        <p>Erstellungszeit: {{$student->created_at->diffForHumans()}}  </p>
                    </div>  
                   
                </b><br>
               
                
           
        @endforeach
        </div>

        </div>
    </div>
    </div>
    <div class="text-center text-lm">
        Made with 💜 by Frank
    </div>
</body>

</html>
