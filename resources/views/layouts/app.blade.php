<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suindent</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/png"/>

</head>
<body data-spy="scroll" data-target="main-nav" >

    <div class="nav navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="main-nav">
        <div class="container">
            <img class="mr-2" src="{{ asset('img/logo.png') }}" width="45" height="45" >
            <a href="" class="navbar-brand"><strong>SUINDENT</strong></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home-section" class="nav-link" >Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-section" class="nav-link">Qui Sommes-Nous?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#owner-section" class="nav-link">Reconnaître Driss</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-section" class="nav-link">Contacter Nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @yield('home')
    @yield('about')
    @yield('owner')
    @yield('boxes')
    @yield('contact')
    @yield('footer')




    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).click(function(event) {
            $(event.target).closest(".navbar").length || $(".navbar-collapse.show").length && $(".navbar-collapse.show").collapse("hide")
        });
    </script>

    <script>
        //init scroll spy
        $('body').scrollspy({target: '#main-nav'});

        //smooth scrolling
        $("#main-nav a").on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();

                const hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    </script>



</body>
</html>
