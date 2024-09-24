@include('header');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/bootstrap-4.0.0-dist/css/bootstrap.css" rel="stylesheet" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

          .navbar-light .navbar-nav .nav-link  {
            color: #FF69B4; /* Hot pink color */
            font-family: Oswald;
            font-weight: 400;
        }
            a, h1{
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
            .img-equal-height {
            height: 100%;
            object-fit: cover;
            }

            .row {
            display: flex;
            flex-wrap: wrap;
            }

            .col-4 {
            flex-basis: 33.33%;
            padding: 10px;
            box-sizing: border-box;
            }

            .img-equal-height {
            width: 100%;
            height: 200px; /* adjust this value to your desired height */
            object-fit: cover;
            }


        </style>
    </head>

    <body>

        <section class="text-center">
        <div>
            <h1 class="album-title">SVT Snapshoot</h1>
            <p class="lead text-muted">From concert highlights to candid behind-the-scenes shots, this album celebrates the dynamic spirit and unity of the 13-member K-pop group.</p>
            </p>
            </div>`
        </section>
        <div class="container"><div class="row">
        <div class="row">
  <div class="col-4">
    <img src="{{ asset('/gallery/1.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/2.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/3.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/4.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/5.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/6.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/7.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/8.jpg') }}" class="img-fluid img-equal-height" alt="image">
  </div>
  <div class="col-4">
    <img src="{{ asset('/gallery/9.jpg') }}" class="img-fluid img-equal-height" alt="image">
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