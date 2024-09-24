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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

            a, h1, h4, i, td, .btn{
            color: #FF69B4; /* hot pink color */
            text-decoration: none;
            }
            .album-title{
                margin-bottom: 30px;
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
            .container{
                width:70%;
            }
            @media (min-width: 925px) {
                .h-custom {
                height: 100vh !important;
                }
            }
        </style>
    </head>

    <body>
    <section class="text-center">
        <div>
            <h1 class="album-title">Checkout</h1>
            </div>
        </section>
    <section class="h-100 h-custom">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Shopping Bag</th>
                <th scope="col">Format</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="/shop/item7.png" class="img-fluid rounded-3"
                      style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">MINI POSTER & IMAGE PICKET PACKAGE ('17 IS RIGHT HERE')</p>
                      <p class="mb-0">SEVENTEEN</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">Digital</p>
                </td>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="2" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;">$9.99</p>
                </td>
              </tr>
              <tr>
                <th scope="row" class="border-bottom-0">
                  <div class="d-flex align-items-center">
                  <img src="/shop/item5.png" class="img-fluid rounded-3"
                  style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2">SEVENTEEN 8000 Puzzle (17 IS RIGHT HERE)</p>
                      <p class="mb-0">SEVENTEEN</p>
                    </div>
                  </div>
                </th>
                <td class="align-middle border-bottom-0">
                  <p class="mb-0" style="font-weight: 500;">Paperback</p>
                </td>
                <td class="align-middle border-bottom-0">
                  <div class="d-flex flex-row">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                      class="form-control form-control-sm" style="width: 50px;" />

                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </td>
                <td class="align-middle border-bottom-0">
                  <p class="mb-0" style="font-weight: 500;">$13.50</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
          <div class="card-body p-4">

            <div class="row">
              <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <form>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v"
                        value="" aria-label="..." checked />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-mastercard fa-2x text-body pe-2"></i>Credit
                        Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v"
                        value="" aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-visa fa-2x fa-lg text-body pe-2"></i>Debit Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v"
                        value="" aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-paypal fa-2x fa-lg text-body pe-2"></i>PayPal
                      </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <div data-mdb-input-init class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        placeholder="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY"
                        size="7" id="exp" minlength="7" maxlength="7" />
                      <label class="form-label" for="typeExp">Expiration</label>
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div data-mdb-input-init class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4 mb-xl-5">
                      <input type="password" id="typeText" class="form-control form-control-lg"
                        placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                      <label class="form-label" for="typeText">Cvv</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-2">Subtotal</p>
                  <p class="mb-2">$23.49</p>
                </div>

                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-0">Shipping</p>
                  <p class="mb-0">$2.99</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                  <p class="mb-2">Total (tax included)</p>
                  <p class="mb-2">$26.48</p>
                </div>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-dark btn-block btn-lg">
                  <div class="d-flex justify-content-between">
                    <span>Checkout</span>
                    <span>$26.48</span>
                  </div>
                </button>

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#carouselExampleControls').carousel();
            });
        </script>
    </body>
</html>