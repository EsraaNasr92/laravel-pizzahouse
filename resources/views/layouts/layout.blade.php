<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House - laravel project</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/slider.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Font icons -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL('/css/app.css') }}" >
        <link rel="stylesheet" href="{{ URL('/css/main.css') }}" >

    </head>
    <body class="antialiased">

      @yield('content')


      <footer>
        <div class="container">

            <img class="img-fluid" src="images/footer_logo.png" alt="footer logo">
            <p>Auctor aliquet. Aenean sollicitudin, <br/>lorem quis bibendum auctor, nisi el</p>

          <div class="row copyright">
            <div class="col">
              <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi.nibh id el</p>
            </div>
            <div class="col social-icons">
              <ul>
                <li><a href="#" target="_blank"><img class="img-fluid" src="images/facebook.png" alt="facebook" ></a></li>
                <li><a href="#" target="_blank"><img class="img-fluid" src="images/twitter.png" alt="twitter" ></a></li>
                <li><a href="#" target="_blank"><img class="img-fluid" src="images/instagram.png" alt="instagram" ></a></li>
              </ul>
            </div>
          </div>

        </div>
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
