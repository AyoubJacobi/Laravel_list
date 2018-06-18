<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  
  <link rel="stylesheet" href="/css/app.css">

    <title>Document</title>
</head>
<body>
    @include('inc.navbar')
<div class="container">
       
        
                @include('inc.message')
                @yield('content')
        </div>
        
  

    <footer id="footer" class="text-center">
        <p>copyright &copy; 2018 Ayoub & Lila</p>
    </footer>
</body>
</html>