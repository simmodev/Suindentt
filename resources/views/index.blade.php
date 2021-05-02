@extends('layouts.app')

@section('home')
    <!-- Home Section -->
    <header id="home-section">
        <div class="dark-overlay">
            <div class="home-inner container">
                <div class="row">
                    <div class="col-lg-7 d-none d-lg-block">
                        <h1 class="display-4"><strong>Commandez vos équipements dentaires.</strong><br>
                        <strong>Produits de qualité!</strong></h1>
                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                La garantie des meilleurs prix du maroc sur tous vos produits, nous ajustons nos prix en temps réel pour être toujours plus compétitifs.</div>
                        </div>
                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                La possibilités de Commandez vos équipements dentaires directement en telephone.
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                Nous travaillons avec les plus grands fabricants. et nous fournissons une livraison gratuite.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card bg-primary text-center card-form">
                            <div class="card-body">
                                <h3>Abonnez-Vous Aujourd'hui!</h3>
                                <p>Veuillez remplir ce formulaire pour vous inscrire.</p>
                                <form action="{{ route('sub') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control form-control-lg @error('name') border border-danger @enderror"
                                               placeholder="Votre Nom Complet" value="{{ old('name') }}">
                                        @error('name')
                                            <p class="text-danger text-left font-weight-bold">
                                                {{$message}}
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="PhoneNumber" type="text" class="form-control form-control-lg @error('PhoneNumber') border border-danger @enderror"
                                               placeholder="Votre Telephone Nombre" value="{{ old('PhoneNumber') }}">
                                        @error('PhoneNumber')
                                        <p class="text-danger text-left font-weight-bold">
                                            {{$message}}
                                        </p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-lg @error('email') border border-danger @enderror"
                                               placeholder="Votre Email" value="{{ old('email') }}">
                                        @error('email')
                                        <p class="text-danger text-left font-weight-bold">
                                            {{$message}}
                                        </p>
                                        @enderror
                                    </div>
                                    <input  type="submit" value="Submit" class="btn btn-outline-light btn-block">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('about')
    <!--About Head Section-->
    <section id="about-section" class="bg-light text-dark">
        <div class="container">
            <div class="row">
                <div  class="col m-auto text-center py-5">
                    <div class="info-header pb-4">
                        <h1 class="text-primary pb-3">Qui Sommes-Nous?</h1>
                        <p class="lead">
                            <b>Suindent</b> est une société de distribution des fournitures dentaires qui s'engage, jour après jour, à apporter à ses clients le <b>meilleur service</b> et à leur proposer à chaque instant la meilleure solution à leurs besoins.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light text-muted py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/01.jpg') }}" alt="" class="img-fluid mb-3 rounded">
                    </div>
                    <div class="col-lg-6">
                        <h3>Explore & Connect</h3>
                        <p class="lead">Aujourd’hui nous sommes à notre 4ème édition de notre catalogue et nous avons décidé de créer ce site pour vous faciliter l’accès à l’information en tout ce qui concerne nos différentes activités.</p>
                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class=" p-4 align-self-start">
                                Avec un stock très varié de plus de 8000 références, La Centrale s’engage à vous proposer un vaste choix de produits et de fournitures dentaires correspondant aux normes internationales.
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="p-4 align-self-start">
                                <i class="fas fa-check fa-2x"></i>
                            </div>
                            <div class="p-4 align-self-start">
                                Notre produits ont été rigoureusement sélectionnés parmi les grandes marques internationales avec des exigences de qualité et de fiabilité.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('owner')
    <section id="owner-section" class="text-center text-dark pb-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary py-3">Reconnaître Driss</h1>
                        <p class="lead">
                            Driss est un entrepreneur sur la cinquantaine avec 25 ans d'expérience dans le domaine dantaire.
                        </p>
                    </div>
                </div>
            </div>
            <div id="owner-card" class="row">
                <div class="col-lg-7 col-md-8 col-sm-12 m-auto">
                    <div class="card bg-light">
                        <div class="card-body">
                            <img src="{{ asset('img/driss.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Driss Suinta</h3>
                            <h5 class="text-muted">Le Fondateur</h5>
                            <p>Driss est un entrepreneur sur la cinquantaine avec 25 ans d'expérience dans le domaine dantaire.</p>
                            <p>Vous pouvez facilement contacter Driss sur son numéro de téléphone ou WhatsApp pour connaître le prix et autre information de produit que vous souhaitez.</p>
                            <b>Driss nombre de telephone : 0661936502</b>
                            <div class="d-flex justify-content-center">
                                <div class="p-4">
                                    <a href="https://wa.me/212661936502" target="_blank">
                                        <i class="fab fa-whatsapp fa-3x"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('boxes')
    <section id="boxes-section" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-10 m-auto">
                    <div class="card text-center border-primary mb-resp">
                        <div class="card-body">
                            <h3 class="text-primary">PROFESSIONALISME</h3>
                            <p class="text-muted">Suindent vous garantit un excellent rapport qualité/prix de ses produits.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 m-auto">
                    <div class="card text-center bg-primary text-white mb-resp">
                        <div class="card-body">
                            <h3>EXCLUSIVITÉ</h3>
                            <p>Suindent vous propose une gamme de produits en exclusivité !</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-8 col-sm-10 m-auto">
                    <div class="mt-3">
                        <div class="card text-center bg-primary text-white">
                            <div class="card-body">
                                <h3>Livraison Gratuit</h3>
                                <p>Dentalachat garantit la livraison de vos produits dans les meilleurs délais.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-8 col-sm-10 m-auto">
                    <div class="mt-3">
                        <div class="card text-center border-primary mb-resp">
                            <div class="card-body">
                                <h3 class="text-primary">Commande au Téléphone</h3>
                                <p class="text-muted">La possibilités de Commandez vos équipements dentaires directement en telephone.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('contact')
    <section id="contact-section" class="bg-white text-dark py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <h3>Contacter Nous</h3>
                    <p class="font-weight-bold">la meilleure façon de nous contacter est par téléphone. il vous suffit d'appeler ce numéro : 0661936502</p>
                    <p></p>
                    <form action="">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Votre Email">
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            </div>
                            <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('footer')
    <footer id="footer-section" class="py-5 bg-dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 ml-auto">
                    <p class="lead">
                        &copy; Copyright Agency and contributors 2021.
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection

























