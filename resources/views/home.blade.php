@extends('master')

@section('style')
<link rel="stylesheet" href="{{asset('css/chart.css')}}">
@endsection

@section('content')

        <!-- Hero -->
        <section class="section section bg-soft pb-5 overflow-hidden z-2">
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-6">
                    <div class="col-lg-8 col-xl-8">
                        <h1 class="display-2 mb-3">Bienvevu au contexte Neutral</h1>
                        <p class="lead px-md-6 mb-5">Ensemble, Créons un <strong style="font-family: none;">Contenu </strong> de <strong style="font-family: none;">campagne électorale</strong> purement<strong style="font-family: none;"> congolais.</strong><br> Exprimez-vous, mais aussi, écoutez les autres.</p>
                        <div class="d-flex flex-column flex-wrap flex-md-row justify-content-md-center mb-5">
                            <a href="https://themesberg.com/product/ui-kits/neumorphism-ui" target="_blank" class="btn btn-primary mb-3 mb-lg-0 mr-3"><i class="fas fa-cloud-download-alt mr-2"></i> A propos</a>
                            {{-- <div class="mt-2">
                                <a class="github-button" href="https://github.com/themesberg/neumorphism-ui" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/neumorphism-ui on GitHub">Star</a>
                            </div> --}}
                        </div>

                        {{-- <a href="https://themesberg.com" target="_blank" class="d-flex align-items-center justify-content-center flex-column">
                            <img src="./assets/img/themesberg.svg" height="25" class="mb-3" alt="Themesberg Logo">
                            <span class="text-muted font-small">A Themesberg production</span>
                        </a> --}}
                        <!-- End of Title -->
                        <blockquote class="blockquote text-center mt-5">
                            Nous allons montrer au monde ce que peut faire l'homme noir quand il travaille dans la liberté.
                            <footer class="blockquote-footer mt-3 text-dark">Patrice Eméry LUMUMBA - 30 juin 1960</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
        <div class="container px-md-10 px-7">
            <div class="row" style="height: 5px;">
                <div class="col-4" style="background-color: #ffc800;"></div>
                <div class="col-4" style="background-color: #1893ff;"></div>
                <div class="col-4" style="background: red;"></div>
            </div>
        </div>
        <section class="section section-lg pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5 mb-md-0">
                            <div class="icon icon-shape icon-lg bg-soft shadow-soft border border-light rounded-circle mb-3">
                                <span class="fas fa-box-open"></span>
                            </div>
                            <h2 class="h5 my-3">+ 300 portfolio des candidats</h2>
                            <p class="px-lg-4">Des pages entière consacrée  à la promotion des chaque candidat, avec des informations mettant en valeur ce dernier.</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="icon icon-shape icon-lg bg-soft shadow-soft border border-light rounded-circle mb-3">
                                <span class="fas fa-pager"></span>
                            </div>
                            <h2 class="h5 my-3">+ des contenus Statistiques</h2>
                            <p class="px-lg-4">Exploriez les statistiques de la CENI ainsi que ces générées grâce aux données de Neutral.</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="icon icon-shape icon-lg bg-soft shadow-soft border border-light rounded-circle mb-3">
                                <span class="far fa-file-alt"></span>
                            </div>
                            <h2 class="h5 my-3">+ 2M Commentaires</h2>
                            <p class="px-lg-4">Laissez votre avis sur le Porfolio de n'importe quel candidats tout en gardans le bon sens.</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                </div>
            </div>
        </section>

        {{-- autoplay caroussel --}}
        <section class="section section-lg pt-0 pb-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <div class="autoplay-carousel owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1866px, 0px, 0px); transition: all 0.25s ease 0s; width: 3360px;">
                                    @foreach ($figures as $figure)
                                        <div class="owl-item" style="width: 363.333px; margin-right: 10px;">
                                            <div class="item p-3">
                                                <div class="card bg-primary shadow-soft border-light">
                                                    <div class="card-header p-4">
                                                        <img src="{{$figure->photo}}" class="card-img-top rounded" alt="Wood Portrait">
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <h3 class="h5 mb-2">{{$figure->name}}</h3>
                                                        <p class="card-text">{{$figure->words}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-1.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-2.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-1.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-2.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 363.333px; margin-right: 10px;">
                                        <div class="item p-3">
                                            <div class="card bg-primary shadow-soft border-light">
                                                <div class="card-header p-4">
                                                    <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Wood Portrait">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" aria-label="github social link" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" aria-label="github social link" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section treeChart-->
        <section class="section bg-primary pt-0 section-lg pb-0">
            <div class="container">
                <!-- End of title-->
                <div class="row justify-content-center">
                    <div class="col-12 py-5">
                        <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                            <div class="card-header pb-0 text-center">
                                <p class=" lead">
                                    Contact management designed for teams and individuals
                                </p>
                            </div>
                            <div id="treeChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->


        {{-- candidats section --}}
        <section class="section section-lg pt-5">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col text-center">
                        {{-- <h2 class="h3 mb-7">Les plus visités</h2> --}}
                        <div class="form-group">
                            {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country</label> --}}
                            <select class="custom-select mb-6 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Candidats Députés provincials les plus visités.</option>
                                <option value="1">Candidats Députés Nationnals les plus visités.</option>
                                <option value="2">Candidats Présidents les plus visités.</option>
                                <option value="3">Candidats Députés provincials avec plus des likes.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End of title-->
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 ">
                        <!-- Profile Card -->
                        <div class="profile-card mb-5 pt-5">
                            <div class="card bg-primary shadow-inset border-light text-center">
                                <div class="card-header">
                                    <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                        <img src="./assets/img/team/profile-picture-4.jpg" class="card-img-top rounded" alt="Leos Portrait">
                                    </div>
                                </div>
                                <div class="card-body pb-5">
                                    <h3 class="h5 mb-2">Jose Leos</h3>
                                    <span class="h6 icon-tertiary">
                                        <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                        <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                    </span><br>
                                    <span class="h6 font-weight-normal text-gray mb-3">Kinshasa-Lukunga</span>
                                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="btn btn-sm btn-primary mr-3" href="#">
                                        <span class="fas fa-book-reader mr-1"></span> Détail
                                    </a>
                                    {{-- <a class="btn btn-sm btn-primary" href="#">
                                        Message
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End of Profile Card -->
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-2 col-5">
                        <!-- Button Social -->
                        <button class="btn btn-pill btn-github" type="button">
                            <span class="mr-1"><span class="far fa-eye"></span></span>
                            <strong>Voir Plus</strong>
                        </button>

                    </div>
                </div>
            </div>
        </section>

        <!-- Section tagCloud-->
        <section class="section bg-primary pt-0 section-lg pb-0">
            <div class="container">
                <!-- End of title-->
                <div class="row justify-content-center">
                    <div class="col-12 py-5">
                        <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                            <div class="card-header pb-0 text-center">
                                <p class=" lead">
                                    Contact management designed for teams and individuals
                                </p>
                            </div>
                            <div id="tagCloud"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->

        {{-- testimonies section  --}}

        <div class="section section-md pt-0 bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row mt-4 mt-lg-6 justify-content-center">
                            <div class="col-md-8">
                                <div class="news-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-2960px, 0px, 0px); transition: all 0.25s ease 0s; width: 5180px;">
                                            <div class="owl-item cloned" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-3.jpg" alt="Bonnie avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Bonnie Green</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-2.jpg" alt="Joseph avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Joseph Garth</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-1.jpg" alt="Jose avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star far fa-star text-gray"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Jose Leos</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-3.jpg" alt="Bonnie avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Bonnie Green</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 730px; margin-right: 10px;">
                                                <div class="item text-center">
                                                    <div class="mb-4">
                                                        <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="../../assets/img/team/profile-picture-2.jpg" alt="Joseph avatar">
                                                    </div>
                                                    <span class="d-block my-3">
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                        <span class="star fas fa-star text-warning"></span>
                                                    </span>
                                                    <blockquote class="blockquote">Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                                        <footer class="h5 mt-3 text-dark">Joseph Garth</footer>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- partners section --}}

        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center text-md-left">
                    <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
                        <span class="counter counter-alternate display-1 text-dark d-block">100</span>
                        <h2 class="h5">Partenaires de confiance</h2>
                    </div><div class="col-md-4 col-lg-5">
                        <p class="lead">Nous savons à quel point il est difficile de trouver quelqu’un en qui vous pouvez avoir confiance pour travailler dans votre maison ou votre entreprise. C’est pourquoi nous avons compilé une liste de nos partenaires commerciaux les plus fiables.</p>
                        <p class="lead">Nous connaissons personnellement ces propriétaires d’entreprise et pouvons vous les référer en toute confiance.</p>
                    </div>
                </div>
                <div class="row mt-4 mt-lg-6">
                    <div class="clients-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1150px, 0px, 0px); transition: all 0s ease 0s; width: 4140px;">
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/docker.svg" alt="docker logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/paypal.svg" alt="paypal logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4"><div class="card bg-primary border-light shadow-soft p-4">
                                        <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb logo"></div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/docker.svg" alt="docker logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/airbnb.svg" alt="airbnb brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/forbes.svg" alt="forbes logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/elastic.svg" alt="elastic logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                    <div class="item p-4">
                                        <div class="card bg-primary border-light shadow-soft p-4">
                                            <img class="img-fluid image-sm" src="../../assets/img/clients/paypal.svg" alt="paypal logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </section>


        <div class="section section-lg pt-0">
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col text-center">
                        <h2 class="h5 mb-7">Call to Action Cards</h2>
                    </div>
                </div>
                <!-- End of title-->
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-primary shadow-soft border-light px-4 py-5 text-center mb-5">
                            <div class="card-header pb-0">
                                <h2 class="h1 mb-3">Ready to change your life?</h2>
                            </div>
                            <div class="card-body pt-2 px-0 px-lg-7">
                                <p class="mb-5 lead">
                                    Download Rocket today and take the first step to organize your routine, achieve your personal goals and reflect on your life.
                                </p>
                                <a class="btn btn-lg btn-primary mr-md-3 mb-3 mb-sm-0" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-lg mr-3"><span class="fab fa-apple"></span></span>
                                        <div class="d-block text-left">
                                            <small class="font-small">Download on the</small>
                                            <div class="h5 mb-0">App Store</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="btn btn-lg btn-primary" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-lg mr-3"><span class="fab fa-google-play"></span></span>
                                        <div class="d-block text-left">
                                            <small class="font-small">Download on the</small>
                                            <div class="h5 mb-0">Google Play</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-primary shadow-soft border-light px-4 py-5">
                            <div class="card-header pb-0 text-center">
                                <h2 class="h1 mb-3">Tirez le meilleur profit de nos contenu.</h2>
                                <p class="mb-5 lead">
                                    Gestion des contacts conçue pour les équipes et les individus
                                </p>
                            </div>
                            <div class="card-body pt-2 px-0 px-lg-7">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-8">
                                        <div class="form-group">
                                            <label class="h6 font-weight-light text-gray" for="subscribeInputEmail">Email address</label>
                                            <div class="d-flex flex-row justify-content-center">
                                                <div class="input-group">
                                                    <input class="form-control form-control-xl border-light" id="subscribeInputEmail" placeholder="example@company.com" type="email">
                                                    <div class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary rounded-right">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection


@section('script')
<!-- Resources Chart -->

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/hierarchy.js"></script>


<script src="{{asset('js/treeChart.js')}}"></script>
<script src="{{asset('js/tagCloud.js')}}"></script>

@endsection
