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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    font-family: 'Oswald', sans-serif;
                    font-size: 18px;
                    font-weight: 300;
                }  

                .top-photo img{
                    width: 100%;
                    max-height: 500px;
                }

                .top-photo h3{
                    position: absolute;
                    margin-left: 50%;
                    margin-top: -15%;
                    color: #E0E0E0;
                    font-weight: 800;
                    font-size: 48px;
                    font-family: 'Oswald', sans-serif;
                }

                .top-photo h5{
                    position: absolute;
                    margin-left: 53%;
                    margin-top: -8%;
                    color: #E0E0E0;
                    font-weight: 800;
                    font-size: 24px;
                    font-family: 'Oswald', sans-serif;
                }

                .user img{
                    max-height: 300px;
                    max-width: 300px;
                    position: relative;
                    margin-left: 10%;
                    margin-top: -18%;
                    border: 2px solid #ffffff;
                }

                .about{
                    margin: 0;
                    padding: 0;
                }

                .about h3{
                    position: relative;
                    margin-top: 40px; 
                    font-size: 26px;
                    font-weight: 700;
                    color: #000000;
                    font-family: 'Oswald', sans-serif;
                }

                .about i {
                    color: #FF69B4; /* hot pink color */
                }

                .about-in button{
                    margin-top: 30px;
                }

                .btn-outline {
                    background-color: transparent;
                    color: inherit;
                    transition: all .5s;
                    margin-top: 20px;
                }

                .about-in a {
                    font-weight: bold;
                }

                .details-left h3{
                    margin-top: -40px;
                }

                .details-left li{
                    font-weight: bold;
                }

                ul {
                    list-style: none;
                }

                .details-right{
                    margin-left: -20px;
                }

                ul li:nth-child(4){
                    color: #FF69B4; /* hot pink color */
                    font-weight: bold;
                }

                @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

                #social {
                    margin: 40px 10px;
                }

                .smGlobalBtn { /* global button class */
                    display: inline-block;
                    position: relative;
                    cursor: pointer;
                    width: 50px;
                    height: 50px;
                    border: 2px solid #ddd; /* add border to the buttons */
                    box-shadow: 0 3px 3px #999;
                    padding: 0px;
                    text-decoration: none;
                    text-align: center;
                    color: #fff;
                    font-size: 25px;
                    font-weight: normal;
                    line-height: 2em;
                    border-radius: 27px;
                    -moz-border-radius: 27px;
                    -webkit-border-radius: 27px;
                }

                /* facebook button class*/
                .facebookBtn{
                    background: #BDBDBD;
                }

                .facebookBtn:before{ /* use :before to add the relevant icons */
                    font-family: "FontAwesome";
                    content: "\f09a"; /* add facebook icon */
                }

                .facebookBtn:hover{
                    color: #4060A5;
                    background: #fff;
                    border-color: #4060A5; /* change the border color on mouse hover */
                }

                /* twitter button class*/
                .twitterBtn{
                    background: #BDBDBD;
                }

                .twitterBtn:before{
                    font-family: "FontAwesome";
                    content: "\f099"; /* add twitter icon */
                }

                .twitterBtn:hover{
                    color: #00ABE3;
                    background: #fff;
                    border-color: #00ABE3;
                }

                /* google plus button class*/
                .googleplusBtn{
                    background: #BDBDBD;
                }

                .googleplusBtn:before{
                    font-family: "FontAwesome";
                    content: "\f0d5"; /* add googleplus icon */
                }

                .googleplusBtn:hover{
                    color: #e64522;
                    background: #fff;
                    border-color: #e64522;
                }

                /* linkedin button class*/
                .linkedinBtn{
                    background: #BDBDBD;
                }

                .linkedinBtn:before{
                    font-family: "FontAwesome";
                    content: "\f0e1"; /* add linkedin icon */
                }

                .linkedinBtn:hover{
                    color: #0094BC;
                    background: #fff;
                    border-color: #0094BC;
                }

                /* pinterest button class*/
                .pinterestBtn{
                    background: #BDBDBD;
                }

                .pinterestBtn:before{
                    font-family: "FontAwesome";
                    content: "\f0d2"; /* add pinterest icon */
                }

                .pinterestBtn:hover{
                    color: #cb2027;
                    background: #fff;
                    border-color: #cb2027;
                }

                /* tumblr button class*/
                .tumblrBtn{
                    background: #BDBDBD;
                }

                .tumblrBtn:before{
                    font-family: "FontAwesome";
                    content: "\f173"; /* add tumblr icon */
                }

                .tumblrBtn:hover{
                    color: #3a5876;
                    background: #fff;
                    border-color: #3a5876;
                }

                /* rss button class*/
                .rssBtn{
                    background: #BDBDBD;
                }

                .rssBtn:before{
                    font-family: "FontAwesome";
                    content: "\f09e"; /* add rss icon */
                }

                .rssBtn:hover{
                    color: #e88845;
                    background: #fff;
                    border-color: #e88845;
                }

                /* responsive */
                @media (min-width:360px) and (max-width:768px){

                .user img{
                    max-height: 150px;
                    max-width: 150px;
                }

                .top-photo h3 {
                    font-size: 16px;
                }

                .top-photo h5 {
                    font-size: 16px;
                    margin-left: 55%;
                }

                .btn-outline{
                    margin-bottom: 60px; 
                }
            }
            </style>

    </head>

    <body>
    <div class="top-photo col-md-12 ">
        <img src="/gallery/cover.jpg">
        <h3>Alyssa Marie R. Romen</h3>
        <h5>4th Year Student, University of Santo Tomas</h5>
    </div>

    <div class="user">
        <img src="/gallery/carataly.jpg">
    </div>

    <div class="container">
        <div class="row">
            <div class="about col-md-6">
                <h3>About <i>Me</i></h3>
                <p>Hello, I'm Alyssa, but you can call me Aly. I'm 21 years old from Nasugbu, Batangas. I'm currently in my 4th year at the University of Santo Tomas, majoring in a course that involves working with computers—a subject I used to dislike but have grown to love. When I'm not studying, I enjoy listening to music, driving my motorcycle, watching movies, and baking. I have a deep love for dogs and animals in general. My friends often describe me as funny, nice, and a reliable friend. I also love hanging out with my friends and enjoying life to the fullest.</p>

                <div id="social">
                    <a class="facebookBtn smGlobalBtn" href="#" ></a>
                    <a class="twitterBtn smGlobalBtn" href="#" ></a>
                    <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                    <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                    <a class="pinterestBtn smGlobalBtn" href="#" ></a>
                    <a class="tumblrBtn smGlobalBtn" href="#" ></a>
                    <a class="rssBtn smGlobalBtn" href="#" ></a>
                </div>

                <a class="btn btn-danger btn-outline">DOWNLOAD DETAILS</a>
            </div>
            <div class="about col-md-6">
                <h3>Contact <i>Details</i></h3>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="details-left">
                            <h3>Contact <i>Details</i></h3>
                            <ul>
                                <li>Age</li>
                                <li>Country</li>
                                <li>Address</li>
                                <li>E-mail</li>
                                <li>Phone</li>
                                <li>Position</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="details-right">
                            <ul>
                                <li>21</li>
                                <li>Philippines</li>
                                <li>Nasugbu, Batangas</li>
                                <li>aly@example.com</li>
                                <li>+63 912 345 6789</li>
                                <li>Student</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                
            </div>
        </div>
    </div>
</body>



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