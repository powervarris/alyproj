<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');

    .navbar-light .navbar-nav .nav-link {
        color: #FF69B4; /* Hot pink color */
        font-family: Oswald;
        font-weight: 400;
    }
    a, h1, h4, .x-button {
        color: #FF69B4; /* Hot pink color */
        text-decoration: none;
    }
    .album-title {
        margin-bottom: 30px;
    }
    a:hover {
        color: #FF69B4; /* Hot pink color */
        text-decoration: underline;
    }
    body {
        background-color: whitesmoke; /* Light pink */
        font-family: Oswald;
        font-size: 18px;
        font-weight: 300;
    }
    </style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-color: #f5f5f5;">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4" style="padding-top:0px; background-color: #F7F7F7; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div>
                <img src="navlogo.png" alt="logo" height=500>
            </div>
        {{ $slot }}
    </div>
</div>