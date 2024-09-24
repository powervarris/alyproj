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
            <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @php
                                $images = [
                                    'CAROUSELL1.png',
                                    'CAROUSELL2.png',
                                    'CAROUSELL3.png',
                                ];
                            @endphp
                            @foreach($images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block w-100" src="{{ asset('carousel/' . $image) }}" alt="Slide {{ $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            
          <div class="container" style="margin-top: 55px;">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-muted">SEVENTEEN</strong>
                <h3 class="mb-0">SEVENTEEN</h3> 
                <p class="card-text mb-auto text-muted">SEVENTEEN is a huge idol group, with 13 members and 3 sub-units forming one team. By implementing a pre-debut system, SEVENTEEN's training and debut preparation has been made open to the public through differentiated promotions such as live broadcasts. In May 2015, the members finally took their first step in the Korean music industry with their first mini album, '17 CARAT', which allowed them to rise as super rookies upon debut. The 3 different sub-units Hip-hop Team, Vocal Team and Performance Team) in the group also actively participated in album production. In addition, after climbing from locally known super rookies, to 'self-production idols' to 'chyung-ryang-dols' since their debut, SEVENTEEN has now grown into an internationally recognized K-Pop group with signature music and performances.</p>
                <a href="#">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" width="600" height="500" src="seventeen.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

              </div>
            </div>
            <div class="row g-5"><div class="col-md-8">
  <h3 class="pb-4 mb-4 fst-italic border-bottom">
    Carats' Corner
  </h3>

  <article class="blog-post">
    <h2 class="blog-post-title">SEVENTEEN: The Power of 13</h2>
    <p class="blog-post-meta">August 26, 2024 by <a href="#">CaratAdmin</a></p>

    <p>This blog post dives into the impact SEVENTEEN has made in the K-pop world. We'll explore their music, choreography, and their unwavering bond as a group. Expect insights, lists of fan-favorite moments, and more!</p>
    <hr>
    <p>SEVENTEEN has redefined what it means to be a self-producing idol group. With every album, they showcase their musical versatility and deep connection with their fans, known as Carats. This group, composed of 13 members, continues to break records and win hearts worldwide. Let's look at some of the key elements that make SEVENTEEN stand out.</p>
    
    <h2>Inspirational Quotes</h2>
    <p>Here's a quote from SEVENTEEN's leader, S.Coups:</p>
    <blockquote class="blockquote">
      <p>"Carats are the reason we can shine so brightly."</p>
    </blockquote>
    <p>Whether they're on stage or off, SEVENTEEN's words always resonate with their fans. Their humility and genuine love for Carats are what make them so special.</p>
    
    <h3>Favorite Carat Moments</h3>
    <p>There are countless memorable moments between SEVENTEEN and Carats, but here are a few that stand out:</p>
    <ul>
      <li>The time SEVENTEEN surprised fans with a flash mob in Myeongdong.</li>
      <li>When they performed "Clap" during their first world tour and the entire stadium echoed with fan chants.</li>
      <li>Every time they create personal vlogs, giving Carats a glimpse into their daily lives.</li>
    </ul>
    
    <p>And this is a list of SEVENTEEN's most iconic performances:</p>
    <ol>
      <li>Their 2017 MAMA performance, where they showed off their synchronization.</li>
      <li>The "Home;Run" stage that turned the arena into a Broadway spectacle.</li>
      <li>Their first win with "Pretty U" on Show Champion, which brought them to tears.</li>
    </ol>
    
    <p>And here are some key terms every Carat should know:</p>
    <dl>
      <dt>Carat</dt>
      <dd>The official fandom name of SEVENTEEN, symbolizing how they make the group shine.</dd>
      <dt>SVT Leaders</dt>
      <dd>The sub-unit composed of the leaders of the Hip-Hop, Vocal, and Performance teams: S.Coups, Woozi, and Hoshi.</dd>
      <dt>DK (Dokyeom)</dt>
      <dd>A main vocalist known for his powerful voice and infectious laugh.</dd>
    </dl>
    
    <h2>Fan Interactions</h2>
    <p>SEVENTEEN always makes an effort to connect with their fans. Here's how:</p>
    <ul>
      <li><strong>Through V Live broadcasts</strong>, where they share updates and behind-the-scenes moments.</li>
      <li><em>At fan signs</em>, where they take time to talk to each fan and show their appreciation.</li>
      <li>During concerts, where they often extend their shows to spend more time with Carats.</li>
      <li>Citations, like <cite>— Jeonghan</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
      <li><del>Deleted</del> moments on variety shows that fans still remember, and <ins>new</ins> interactions that continue to build their legacy.</li>
      <li>Superscript <sup>Caratbong</sup> (their official light stick) and subscript <sub>love</sub>—the essentials of every Carat's concert experience.</li>
    </ul>
    
    <p>Most of these interactions are cherished by fans and help build a lasting connection between SEVENTEEN and Carats.</p>
    <h2>Memorable Achievements</h2>
    <p>SEVENTEEN's journey is filled with achievements that continue to inspire Carats worldwide. Let's highlight some:</p>
    <h3>Sub-unit Special</h3>
    <p>SEVENTEEN is known for their unique sub-units. Each has its own flavor and adds to the group's versatility:</p>
    <pre><code>Hip-Hop Team: S.Coups, Wonwoo, Mingyu, Vernon</code></pre>
    <pre><code>Vocal Team: Woozi, Jeonghan, Joshua, DK, Seungkwan</code></pre>
    <pre><code>Performance Team: Hoshi, Jun, The8, Dino</code></pre>
    <p>The synergy between these units shows SEVENTEEN's ability to excel in different musical styles.</p>
  </article>


</div>

<div class="col-md-4">
  <div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic">About</h4>
      <p class="mb-0">Welcome to Carats' Corner! Here, we celebrate SEVENTEEN's journey, their music, and the bond they share with their fans. Dive in for the latest updates, fan stories, and more.</p>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Archives</h4>
      <ol class="list-unstyled mb-0">
        <li><a href="#">August 2024</a></li>
        <li><a href="#">July 2024</a></li>
        <li><a href="#">June 2024</a></li>
        <li><a href="#">May 2024</a></li>
        <li><a href="#">April 2024</a></li>
        <li><a href="#">March 2024</a></li>
        <li><a href="#">February 2024</a></li>
        <li><a href="#">January 2024</a></li>
        <li><a href="#">December 2023</a></li>
        <li><a href="#">November 2023</a></li>
        <li><a href="#">October 2023</a></li>
        <li><a href="#">September 2023</a></li>
      </ol>
    </div>

    <div class="p-4">
      <h4 class="fst-italic">Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#">Weverse</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </div>
</div>

          </div>
        </div><div class="container"></div>

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


    