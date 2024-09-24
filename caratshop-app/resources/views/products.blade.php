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

            a, h1, h4{
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
            .section-products {
                padding: 20px 0 14px;
            }

            .section-products .header {
                margin-bottom: 50px;
            }

            .section-products .header h3 {
                font-size: 1rem;
                color: black;
                font-weight: 500;
            }

            .section-products .header h2 {
                font-size: 2.2rem;
                font-weight: 400;
            }

            .section-products .single-product {
                margin-bottom: 26px;
            }

            .section-products .single-product .part-1 {
                position: relative;
                height: 290px;
                max-height: 290px;
                margin-bottom: 20px;
                overflow: hidden;
            }

            .section-products .single-product .part-1::before {
                    position: absolute;
                    content: "";
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: -1;
                    transition: all 0.3s;
            }

            .section-products .single-product:hover .part-1::before {
                    transform: scale(1.2,1.2) rotate(5deg);
            }

            .section-products #product-1 .part-1::before {
                background: url("/shop/item1.png") no-repeat center;
                background-size: cover;
                    transition: all 0.3s;
            }

            .section-products #product-2 .part-1::before {
                background: url("/shop/item2.png") no-repeat center;
                background-size: cover;
            }

            .section-products #product-3 .part-1::before {
                background: url("/shop/item3.png") no-repeat center;
                background-size: cover;
            }

            .section-products #product-4 .part-1::before {
                background: url("/shop/item4.png") no-repeat center;
                background-size: cover;
            }

            .section-products #product-5 .part-1::before {
                background: url("/shop/item5.png") no-repeat center;
                background-size: cover;
            }
            .section-products #product-6 .part-1::before {
                background: url("/shop/item6.png") no-repeat center;
                background-size: cover;
            }
            .section-products #product-7 .part-1::before {
                background: url("/shop/item7.png") no-repeat center;
                background-size: cover;
            }
            .section-products #product-8 .part-1::before {
                background: url("/shop/item8.png") no-repeat center;
                background-size: cover;
            }

            .section-products .single-product .part-1 .discount,
            .section-products .single-product .part-1 .new {
                position: absolute;
                top: 15px;
                left: 20px;
                color: #ffffff;
                background-color: #fe302f;
                padding: 2px 8px;
                text-transform: uppercase;
                font-size: 0.85rem;
            }

            .section-products .single-product .part-1 .new {
                left: 0;
                background-color: #444444;
            }

            .section-products .single-product .part-1 ul {
                position: absolute;
                bottom: -41px;
                left: 20px;
                margin: 0;
                padding: 0;
                list-style: none;
                opacity: 0;
                transition: bottom 0.5s, opacity 0.5s;
            }

            .section-products .single-product:hover .part-1 ul {
                bottom: 30px;
                opacity: 1;
            }

            .section-products .single-product .part-1 ul li {
                display: inline-block;
                margin-right: 4px;
            }

            .section-products .single-product .part-1 ul li a {
                display: inline-block;
                width: 40px;
                height: 40px;
                line-height: 40px;
                background-color: #ffffff;
                color: #444444;
                text-align: center;
                box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
                transition: color 0.2s;
            }

            .section-products .single-product .part-1 ul li a:hover {
                color: #fe302f;
            }

            .section-products .single-product .part-2 .product-title {
                font-size: 1rem;
            }

            .section-products .single-product .part-2 h4 {
                display: inline-block;
                font-size: 1rem;
            }

            .section-products .single-product .part-2 .product-old-price {
                position: relative;
                padding: 0 7px;
                margin-right: 2px;
                opacity: 0.6;
            }

            .section-products .single-product .part-2 .product-old-price::after {
                position: absolute;
                content: "";
                top: 50%;
                left: 0;
                width: 100%;
                height: 1px;
                background-color: #444444;
                transform: translateY(-50%);
            }
        </style>
    </head>

    <body>
    <section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h1>Popular Products</h1>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
                                    
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">SEVENTEEN MINI 80PCS STAND PUZZLE</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">SEVENTEEN DIY CUBE (ALWAYS YOURS)</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">SEVENTEEN Mini Cube Keyring (17 RIGHT HERE)</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">SEVENTEEN Mini Cube Keyring (17 RIGHT HERE) </h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-5" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i ></i></a></li>

												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">SEVENTEEN 8000 Puzzle (17 IS RIGHT HERE)</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-6" class="single-product">
										<div class="part-1">
												<span class="discount">15% off</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">MINI POSTER & PANORAMA PACKAGE ('17 IS RIGHT HERE')</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-7" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">MINI POSTER & IMAGE PICKET PACKAGE ('17 IS RIGHT HERE')</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-8" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">LENTICULAR POSTCARD ('17 IS RIGHT HERE')
                                                </h3>
												<h4 class="product-price">$49.99</h4>
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