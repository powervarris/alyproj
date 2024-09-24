@include('header');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet" />
        <link href="navbar.css" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

            a {
            color: #FF69B4; /* hot pink color */
            text-decoration: none;
            }

            a:hover {
            color: #FF69B4; /* hot pink color */
            text-decoration: underline;
            }
            body {
                background-color: whitesmoke; /* light pink */
                font-family: Oswald;
                font-size: 18px;
                font-weight: 300;
            }
            /* Add styles to make the carousel smaller */
            .carousel {
                width: 100%; /* Use 100vw to make the carousel full-width */
                margin-bottom: 20px; /* Remove the margin to make the carousel full-width */
            }

            .carousel-inner {
                height: 100%; /* Adjust the height to your liking */
            }

            .carousel-item img {
                height: 100%; /* Adjust the height to match the carousel-inner height */
            }
            /* stylelint-disable selector-list-comma-newline-after */


        </style>
    </head>

    <body>

        <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            </p>
            </div>`
        </section>
        <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/1.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/2.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/3.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/4.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/5.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/6.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/7.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/8.jpg') }}" class="img-fluid" alt="image">
        </div>
        <div class="col mt-3">
            <img src="{{ asset('/gallerypics/9.jpg') }}" class="img-fluid" alt="image">
        </div>
    </div>
</div>
 

          </div>
        </div><div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2016 Carats, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
        

        @yield('content')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#carouselExampleControls').carousel();
            });
        </script>
    </body>
</html>