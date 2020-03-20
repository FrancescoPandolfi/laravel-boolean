

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
  <title>Boolean</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{asset('img/logo.png')}}" alt="Boolean logo">
        </div>
        <nav class="navbar">
            <ul>
                <li class="{{ (Request::path() == '/') ? 'active' : '' }}"><a href="{{route('homepage')}}">HOME</a></li>
                <li>CORSO</li>
                <li class="{{ (Request::route()->getName() == 'dopo-il-corso') ? 'active' : '' }}"><a href="{{route('dopo-il-corso')}}">DOPO IL CORSO</a></li>
                <li>LEZIONE GRATUITA</li>
                <li>CANDIDATI ORA</li>
            </ul>    
        </nav>
    </header>

    