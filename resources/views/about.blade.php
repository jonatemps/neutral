@extends('master')
@section('title')
Apropos de nous
@endsection
@section('content')
<!-- Hero -->
<div class="section section-header pb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Nous sommes Neutral</h1>
                <p class="lead mb-5">Un cadre vitrine des candidats, donnant ainsi la possibilité aux populations d’avoir un aperçu détaillé sur ceux sur qui porté le choix.</p>
                <a class="btn btn-primary" href="{{route('contact')}}"><span class="fas fa-phone mr-2"></span>Contact</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">a propos</li>
                    </ol>
                </nav>
                <!--End of Breadcrumb-->
            </div>
        </div>
    </div>
</div>

<div class="container px-md-10 px-7 pb-5">
    <div class="row" style="height: 5px;">
        <div class="col-4" style="background-color: #ffc800;"></div>
        <div class="col-4" style="background-color: #1893ff;"></div>
        <div class="col-4" style="background: red;"></div>
    </div>
</div>

<!-- End of Hero section -->
@include('service')
<!-- Section -->
<section class="section section-lg pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-md-6 col-xl-6 mb-5">
                <div class="card bg-primary shadow-soft border-light organic-radius p-3">
                    <img class="organic-radius img-fluid" src="../../images/campagne.webp" alt="modern desk">
                </div>
            </div>
            <div class="col-md-6 col-xl-5 text-center text-md-left">
                <h2 class="h1 mb-4">Candidates électorales</h2>
                <p class="lead">Neutral accompagne les candidats à la bataille électorale à travers une campagne numérique, grâce à une présentation individuel fidèle du parcours, des différentes réalisations ainsi que la vision de chacun.</p>
                <img src="../../images/signature.png" alt="signature" class="mt-4" width="150">
            </div>
        </div>
    </div>
</section>

<section class="section section-lg pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-md-6 col-xl-5 text-center text-md-left">
                <h2 class="h1 mb-4">Électeurs</h2>
                <p class="lead">Les enjeux sont grands, puisqu’il est question à nous congolais d’assumer avec responsabilité notre choix porté sur un candidat et cela pour cinq années, Neutral permet également aux électeurs d'en savoir plus sur leurs candidats, tout ayant accès aux informations et projets de société ainsi que d’émettre leurs avis.</p>
                {{-- <img src="../../assets/img/signature.svg" alt="signature" class="mt-4" width="150"> --}}
            </div>
            <div class="col-md-6 col-xl-6 mb-5">
                <div class="card bg-primary shadow-soft border-light organic-radius p-3">
                    <img class="organic-radius img-fluid" src="../../images/electeur.jfif" alt="modern desk">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of section -->
<!-- Section -->
<section class="section section-lg pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <!-- Visit Box -->
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                        <span class="far fa-smile-beam"></span>
                    </div>
                    <h3 class="h5">Personnes Touchés</h3>
                    <span class="counter display-3 text-gray d-block">{{$touched}}</span>
                </div>
                <!-- End of Visit Box -->
            </div>
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <!-- Call Box -->
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                        <span class="far fa-eye"></span>
                    </div>
                    <h3 class="h5">Visiteurs</h3>
                    <span class="counter display-3 text-gray d-block">{{$visitors}}</span>
                </div>
                <!-- End of Call Box -->
            </div>
            <div class="col-12 col-sm-4 col-lg-4 text-center">
                <!-- Email Box -->
                <div class="icon-box mb-4">
                    <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                        <span class="fas fa-globe-europe"></span>
                    </div>
                    <h3 class="h5">Circonscripptions</h3>
                    <span class="counter display-3 text-gray d-block">{{$circonscription}}</span>
                </div>
                <!-- End of Email Box -->
            </div>
        </div>
    </div>
</section>
<!-- End of section -->
<!-- Section -->
{{-- <section class="section section-lg pt-0">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <h2 class="h1">Our Team</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Profile Card -->
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <img src="../../assets/img/team/profile-picture-1.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Neil Avatar">
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">Neil Sims</h3>
                        <span class="h6 font-weight-normal text-gray mb-3">Co-Founder Themesberg</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
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
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Profile Card -->
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Bonnie Avatar">
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">Bonnie Green</h3>
                        <span class="h6 font-weight-normal text-gray mb-3">Marketing Specialist</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
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
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Profile Card -->
                <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                    <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                        <img src="../../assets/img/team/profile-picture-2.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Christopher avatar">
                    </div>
                    <div class="card-body">
                        <h3 class="h5 mb-2">Christopher Wood</h3>
                        <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                        <ul class="list-unstyled d-flex justify-content-center my-3">
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
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
        </div>
    </div>
</section> --}}
<!-- End of section -->
@endsection
