@extends('master')

@section('content')



<!-- Section -->
<div  class="section bg-primary pt-0 section-lg pb-4">
    <div class="container">
        <!-- Title  -->
        {{-- <div class="row">
            <div class="col-md-4">
                <div class="mt-5 mb-5">
                    <span class="font-weight-bold">Tab With Icons</span>
                </div>
            </div>
        </div> --}}
        <!-- End of Title -->

        <div class="section-header section-image bg-primary pb-0">
            <div id="top" class="container z-2">
                <div class="row my-5 justify-content-center text-center">
                    <div class="col-lg-8">
                        <img style="height: 300px;" src="{{$candidate->photo}}" class="rounded-circle img-thumbnail image-lg border-light shadow-inset p-3" alt="Joseph Avatar">
                        <h1 class="h2 my-4">{{$candidate->name}}</h1>
                        <h2 class="h5 font-weight-normal text-gray mb-4"><span class="fas fa-map-marker-alt mr-2"></span>{{$candidate->slogan}}</h2>
                        <ul class="list-unstyled d-flex justify-content-center mt-3 mb-3 mb-0">
                            <li>
                                <a href="{{$candidate->id_facebook}}" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{$candidate->id_facebook}}" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{$candidate->id_facebook}}" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                    <span class="fab fa-slack-hash"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="row">
                            <!--Counter-->
                            <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
                                {{-- <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                    <span class="far fa-laugh-beam"></span>
                                    <span aria-hidden="true" class="far fa-thumbs-up"></span>
                                </div> --}}
                                <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
                                    <span aria-hidden="true" class="far fa-eye"></span>
                                </button>
                                <span class="counter h1 text-interaction d-block">500</span>
                            </div>
                            <!--End of Counter-->
                            <!--Counter-->
                            <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
                                <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
                                    <span aria-hidden="true" class="far fa-thumbs-up"></span>
                                </button>
                                <span class="counter h1 text-interaction d-block">1560</span>
                                {{-- <span class="h5">Liked</span> --}}
                            </div>
                            <!--End of Counter-->
                            <!--Counter-->
                            <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
                                <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
                                    <span aria-hidden="true" class="far fa-thumbs-down"></span>
                                </button>
                                <span class="counter h1 text-interaction d-block">1560</span>
                                {{-- <span class="h5">Disliked</span> --}}
                            </div>
                            <!--End of Counter-->
                            <!--Counter-->
                            <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
                                <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
                                    <span aria-hidden="true" class="far fa-comments"></span>
                                </button>
                                <span class="counter h1 text-interaction d-block">160</span>
                                {{-- <span class="h5">Comments</span> --}}
                            </div>
                            <!--End of Counter-->
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 class="h5 mb-3">Candidaté à :</h3>
                </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-md-auto mb-3">
                <div class="card bg-soft shadow-soft border-light p-4">
                    <!-- Header -->
                    <div class="card-header pb-0">
                        <span class="d-block">
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(175, 16, 16);" class="fas fa-medal"></span>La Provinciale</span>
                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Parti :</strong> cards</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Province :</strong> Timelines</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Circonscription :</strong> E-commerce</li>
                            {{-- <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>District :</strong> Widgets</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Secteur :</strong> Widgets</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Commune :</strong> Widgets</li> --}}
                        </ul>
                        {{-- <a href="https://themesberg.com/product/ui-kits/neumorphism-ui-pro" target="_blank" class="btn btn-block btn-primary text-secondary mt-4 mr-3"><i class="far fa-paper-plane mr-2"></i> Upgrade to PRO</a> --}}
                    </div>
                    <!-- End Content -->
                </div>
              </div>

              <div class="col-md-auto mb-3">
                <div class="card bg-soft shadow-soft border-light p-4">
                    <!-- Header -->
                    <div class="card-header pb-0">
                        <span class="d-block">
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(18, 177, 240);" class="fas fa-medal"></span>La Nationnale</span>
                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Parti :</strong> cards</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Province :</strong> Timelines</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Circonscription :</strong> E-commerce</li>
                            {{-- <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>District :</strong> Widgets</li> --}}
                            {{-- <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Secteur :</strong> Widgets</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Commune :</strong> Widgets</li> --}}
                        </ul>
                        {{-- <a href="https://themesberg.com/product/ui-kits/neumorphism-ui-pro" target="_blank" class="btn btn-block btn-primary text-secondary mt-4 mr-3"><i class="far fa-paper-plane mr-2"></i> Upgrade to PRO</a> --}}
                    </div>
                    <!-- End Content -->
                </div>
              </div>

              <div class="col-md-auto mb-3">
                <div class="card bg-soft shadow-soft border-light p-4">
                    <!-- Header -->
                    <div class="card-header pb-0">
                        <span class="d-block">
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(189, 147, 10);" class="fas fa-medal"></span>La Présidence</span>
                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Parti :</strong> cards</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Province :</strong> Timelines</li>
                            {{-- <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-check-circle"></span></span><strong>Territoire :</strong> E-commerce</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-check-circle"></span></span><strong>District :</strong> Widgets</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-check-circle"></span></span><strong>Secteur :</strong> Widgets</li>
                            <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-check-circle"></span></span><strong>Commune :</strong> Widgets</li> --}}
                        </ul>
                        {{-- <a href="https://themesberg.com/product/ui-kits/neumorphism-ui-pro" target="_blank" class="btn btn-block btn-primary text-secondary mt-4 mr-3"><i class="far fa-paper-plane mr-2"></i> Upgrade to PRO</a> --}}
                    </div>
                    <!-- End Content -->
                </div>
              </div>
            </div>
        </div>

        <div class="section section-lg py-5">
            <div class="container">
                <!-- Title -->
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-6">
                        <div class="card bg-primary shadow-soft border-light ">
                            <div class="card-header rounded pb-0">
                                {{-- <img src="../../assets/img/blog/blog-article-1.jpg" class="card-img-top rounded" alt="Webdeveloper desk"> --}}
                                <iframe class="card-img-top rounded"  allowfullscreen style="width: -webkit-fill-available;height: 250px;" class="taille-video" {{-- width="420" height="315" --}} src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>
                                <a href="#!" data-toggle="modal" data-target="#modal-video1">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                            <!-- Modal Content -->
                            <div class="modal fade" id="modal-video1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            {{-- <h2 class="h6 modal-title mb-0" id="modal-title-default">Terms of Service</h2> --}}
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe
                                                class="video-modal"
                                                src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                title="YouTube video"
                                                allowfullscreen
                                            ></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                            <button type="button" class="btn btn-primary text-danger ml-auto" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Modal Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- end mandate section --}}

                {{-- parcours end cursus section --}}
                <div class="row">
                    <div class="col text-center">
                        <h3 class="h5 mb-3 mt-3">Cursus et Parcours</h3>
                    </div>
                </div>

                <section class="section section-lg pt-0 pb-0">
                    <div class="container">
                        <div class="accordion shadow-soft rounded">
                            <div class="card card-sm  bg-primary border-light mb-0">
                                <a href="#cursus" data-target="#cursus" class="accordion-panel-header collapsed card-body" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                    <span class="icon-title h6 mb-0 font-weight-bold">
                                        <span class="fab fa-leanpub"></span>Cursus
                                        </span> <span class="icon"><span class="fas fa-plus"></span>
                                    </span>
                                </a>
                                <div class="collapse" id="cursus" style="">
                                    <div>


                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="section section-md pt-0">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12 col-lg-10">
                                                            <div class="timeline timeline-one">
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">Year 2019</span>
                                                                            <h3 class="h4 my-2">Present</h3>
                                                                            <p>Now over seven years old, Bootstrap is an established and widely-used HTML, CSS, and JavaScript framework.</p>
                                                                            <img class="mt-2" src="../../assets/img/signature.svg" alt="signature" width="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2018-2019</span>
                                                                            <h3 class="h4 my-2">What i learned in my first year</h3>
                                                                            <div class="my-4">
                                                                                <span class="icon icon-sm icon-purple mr-2"><span class="fab fa-bootstrap"></span></span>
                                                                                <span class="icon icon-sm icon-info mr-2"><span class="fab fa-react"></span></span>
                                                                                <span class="icon icon-sm icon-success mr-2"><span class="fab fa-vuejs"></span></span>
                                                                                <span class="icon icon-sm icon-danger"><span class="fab fa-angular"></span></span>
                                                                            </div><p>Bootstrap. Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2015-2018</span>
                                                                            <h3 class="h4 my-2">University</h3>
                                                                            <img src="../../assets/img/clients/northwestern.svg" class="image-xs my-4" alt="Northwestern logo">
                                                                            <p class="font-weight-bolder">BS in Computer Science</p><p>The Bachelor of Computer Science is a type of bachelor's degree, usually awarded after three or four years of collegiate study in computer science.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2010-2015</span>
                                                                            <h3 class="h4 my-2">High school</h3>
                                                                            <img src="../../assets/img/clients/business-school.svg" class="image-xs my-4" alt="School logo">
                                                                            <p>High school is a term primarily used in the United States and Canada to describe the level of education students receive from 13 to 18 years old, although there is some variation.</p>
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
                            <div class="card card-sm bg-primary border-light mb-0">
                                <a href="#parcours" data-target="#parcours" class="accordion-panel-header card-body" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                    <span class="icon-title h6 mb-0 font-weight-bold">
                                        <span class="fas fa-box-open"></span>Parcours</span>
                                        <span class="icon"><span class="fas fa-plus"></span>
                                    </span>
                                </a>
                                <div class="collapse" id="parcours">
                                    <div class="pt-3">

                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="section section-md pt-0">
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12 col-lg-10">
                                                            <div class="timeline timeline-one">
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">Year 2019</span>
                                                                            <h3 class="h4 my-2">Present</h3>
                                                                            <p>Now over seven years old, Bootstrap is an established and widely-used HTML, CSS, and JavaScript framework.</p>
                                                                            <img class="mt-2" src="../../assets/img/signature.svg" alt="signature" width="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2018-2019</span>
                                                                            <h3 class="h4 my-2">What i learned in my first year</h3>
                                                                            <div class="my-4">
                                                                                <span class="icon icon-sm icon-purple mr-2"><span class="fab fa-bootstrap"></span></span>
                                                                                <span class="icon icon-sm icon-info mr-2"><span class="fab fa-react"></span></span>
                                                                                <span class="icon icon-sm icon-success mr-2"><span class="fab fa-vuejs"></span></span>
                                                                                <span class="icon icon-sm icon-danger"><span class="fab fa-angular"></span></span>
                                                                            </div><p>Bootstrap. Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2015-2018</span>
                                                                            <h3 class="h4 my-2">University</h3>
                                                                            <img src="../../assets/img/clients/northwestern.svg" class="image-xs my-4" alt="Northwestern logo">
                                                                            <p class="font-weight-bolder">BS in Computer Science</p><p>The Bachelor of Computer Science is a type of bachelor's degree, usually awarded after three or four years of collegiate study in computer science.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">2010-2015</span>
                                                                            <h3 class="h4 my-2">High school</h3>
                                                                            <img src="../../assets/img/clients/business-school.svg" class="image-xs my-4" alt="School logo">
                                                                            <p>High school is a term primarily used in the United States and Canada to describe the level of education students receive from 13 to 18 years old, although there is some variation.</p>
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
                        </div>
                    </div>
                </section>
                {{-- end parcours end cursus section --}}

                {{-- realisation section --}}
                <div class="row">
                    <div class="col text-center">
                        <h3 class="h5 mb-3 mt-3">Réalisations</h3>
                    </div>
                </div>

                <section class="section section-lg pt-0 pb-0">
                    <div class="container">
                        <div class="accordion shadow-soft rounded">
                            <div class="card card-sm  bg-primary border-light mb-0">
                                <a href="#inImages" data-target="#inImages" class="accordion-panel-header collapsed card-body" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                    <span class="icon-title h6 mb-0 font-weight-bold">
                                        <span class="fab fa-leanpub"></span>En Images
                                        </span> <span class="icon"><span class="fas fa-plus"></span>
                                    </span>
                                </a>
                                <div class="collapse" id="inImages">
                                    <div class="px-3">

                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light">
                                                    <div class="card-header rounded pb-0">
                                                        <img src="{{asset('../../assets/img/blog/blog-article-1.jpg')}}" class="card-img-top rounded" alt="Webdeveloper desk">
                                                        <a href="#!" data-toggle="modal" data-target="#modal-image1">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">List of public corporations</h4></a>
                                                        {{-- <p class="card-text mb-4">All of the world's 10 largest companies as measured by market capitalization are American. Market capitalization is the total value of a company's entire purchased shares of stock...</p> --}}
                                                    </div>
                                                    <div class="card-footer pt-0">
                                                        <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                                                            <div class="post-details mb-3 mb-lg-0">
                                                                <button class="btn btn-sm btn-primary animate-hover mr-2" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-up mr-2 animate-up-2"></span> 4</button>
                                                                <button class="btn btn-sm btn-primary text-danger animate-hover" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-down mr-2 animate-down-2"></span> 1</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="modal fade" id="modal-image1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    {{-- <h2 class="h6 modal-title mb-0" id="modal-title-default">Terms of Service</h2> --}}
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="Carousel4" class="carousel slide shadow-soft border border-light rounded" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="1"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner rounded">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-3.jpg" alt="First slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >First Title</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-3.jpg" alt="Second slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >Second Title</h3>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-1.jpg" alt="Third slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >Third Title</h3>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#Carousel4" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#Carousel4" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto px-4 py-1 my-1" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light">
                                                    <div class="card-header rounded pb-0">
                                                        <img src="../../assets/img/blog/blog-article-1.jpg" class="card-img-top rounded" alt="Webdeveloper desk">
                                                        <a href="#!" data-toggle="modal" data-target="#modal-image2">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">List of public corporations</h4></a>
                                                        {{-- <p class="card-text mb-4">All of the world's 10 largest companies as measured by market capitalization are American. Market capitalization is the total value of a company's entire purchased shares of stock...</p> --}}
                                                    </div>
                                                    <div class="card-footer pt-0">
                                                        <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                                                            <div class="post-details mb-3 mb-lg-0">
                                                                <button class="btn btn-sm btn-primary animate-hover mr-2" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-up mr-2 animate-up-2"></span> 4</button>
                                                                <button class="btn btn-sm btn-primary text-danger animate-hover" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-down mr-2 animate-down-2"></span> 1</button>
                                                            </div>
                                                            {{-- <div class="post-meta">
                                                                <a class="text-dark mr-3" href="#"><span class="far fa-comments mr-2"></span>33.7k</a>
                                                                <button class="btn mr-3 btn-link text-black border-0"><span class="fas fa-share mr-2"></span>Share</button>
                                                                <button class="btn btn-primary"><span class="far fa-save mr-2"></span>Save</button>
                                                            </div> --}}
                                                        </div>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="modal fade" id="modal-image2" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    {{-- <h2 class="h6 modal-title mb-0" id="modal-title-default">Terms of Service</h2> --}}
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div id="Carousel4" class="carousel slide shadow-soft border border-light rounded" data-ride="carousel">
                                                                        <ol class="carousel-indicators">
                                                                            <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="1"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="2"></li>
                                                                        </ol>
                                                                        <div class="carousel-inner rounded">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-3.jpg" alt="First slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >First Title</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-3.jpg" alt="Second slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >Second Title</h3>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100" src="./assets/img/carousel/image-1.jpg" alt="Third slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >Third Title</h3>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#Carousel4" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#Carousel4" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto px-4 py-1 my-1" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card card-sm bg-primary border-light mb-0">
                                <a href="#inVideos" data-target="#inVideos" class="accordion-panel-header card-body" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                    <span class="icon-title h6 mb-0 font-weight-bold">
                                        <span class="fas fa-box-open"></span>En Vidéos</span>
                                        <span class="icon"><span class="fas fa-plus"></span>
                                    </span>
                                </a>
                                <div class="collapse" id="inVideos">
                                    <div class="px-3">

                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light ">
                                                    <div class="card-header rounded pb-0">
                                                        {{-- <img src="../../assets/img/blog/blog-article-1.jpg" class="card-img-top rounded" alt="Webdeveloper desk"> --}}
                                                        <iframe class="card-img-top rounded"  allowfullscreen style="width: -webkit-fill-available;height: 200px;" class="taille-video" {{-- width="420" height="315" --}} src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>
                                                        <a href="#!" data-toggle="modal" data-target="#modal-video1">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">List of public corporations</h4></a>
                                                        {{-- <p class="card-text">All of the world's 10 largest companies as measured by market .</p> --}}
                                                    </div>
                                                    <div class="card-footer pt-0">
                                                        <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                                                            <div class="post-details mb-3 mb-lg-0">
                                                                <button class="btn btn-sm btn-primary animate-hover mr-2" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-up mr-2 animate-up-2"></span> 4</button>
                                                                <button class="btn btn-sm btn-primary text-danger animate-hover" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-down mr-2 animate-down-2"></span> 1</button>
                                                            </div>
                                                            {{-- <div class="post-meta">
                                                                <a class="text-dark mr-3" href="#"><span class="far fa-comments mr-2"></span>33.7k</a>
                                                                <button class="btn mr-3 btn-link text-black border-0"><span class="fas fa-share mr-2"></span>Share</button>
                                                                <button class="btn btn-primary"><span class="far fa-save mr-2"></span>Save</button>
                                                            </div> --}}
                                                        </div>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="modal fade" id="modal-video1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    {{-- <h2 class="h6 modal-title mb-0" id="modal-title-default">Terms of Service</h2> --}}
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe
                                                                        class="video-modal"
                                                                        src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                        title="YouTube video"
                                                                        allowfullscreen
                                                                    ></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->

                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light ">
                                                    <div class="card-header rounded pb-0">
                                                        {{-- <img src="../../assets/img/blog/blog-article-1.jpg" class="card-img-top rounded" alt="Webdeveloper desk"> --}}
                                                        <iframe class="card-img-top rounded"  allowfullscreen style="width: -webkit-fill-available;height: 200px;" class="taille-video" {{-- width="420" height="315" --}} src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>
                                                        <a href="#!" data-toggle="modal" data-target="#modal-video2">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">List of public corporations</h4></a>
                                                        {{-- <p class="card-text">All of the world's 10 largest companies as measured by market .</p> --}}
                                                    </div>
                                                    <div class="card-footer pt-0">
                                                        <div class="d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-between">
                                                            <div class="post-details mb-3 mb-lg-0">
                                                                <button class="btn btn-sm btn-primary animate-hover mr-2" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-up mr-2 animate-up-2"></span> 4</button>
                                                                <button class="btn btn-sm btn-primary text-danger animate-hover" data-toggle="tooltip" data-placement="bottom" title="Bientôt disponible"><span class="fas fa-thumbs-down mr-2 animate-down-2"></span> 1</button>
                                                            </div>
                                                            {{-- <div class="post-meta">
                                                                <a class="text-dark mr-3" href="#"><span class="far fa-comments mr-2"></span>33.7k</a>
                                                                <button class="btn mr-3 btn-link text-black border-0"><span class="fas fa-share mr-2"></span>Share</button>
                                                                <button class="btn btn-primary"><span class="far fa-save mr-2"></span>Save</button>
                                                            </div> --}}
                                                        </div>
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="modal fade" id="modal-video2" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    {{-- <h2 class="h6 modal-title mb-0" id="modal-title-default">Terms of Service</h2> --}}
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe
                                                                        class="video-modal"
                                                                        src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                        title="YouTube video"
                                                                        allowfullscreen
                                                                    ></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- end realisation section --}}
    </div>
</div>
<!-- End of Section -->

{{-- section vision --}}

<div class="row justify-content-center">
    <div class="col-12 col-lg-10 text-center">
        {{-- <div class="mb-4">
            <a href="./blog.html" class="badge badge-secondary text-uppercase mr-2 px-3">Seo</a>
            <a href="#" class="badge badge-success text-uppercase px-3">Marketing</a>
        </div> --}}
        <h1 class="display-3 mb-4 px-lg-5">Projet de société</h1>
        <div class="post-meta">
            <span class="font-weight-bold mr-3">James Curran</span>
            <span class="post-date mr-3">January 31, 2020</span>
            <span class="font-weight-bold">7 min de lecture</span>
        </div>
    </div>
</div>

<div class="section section-sm bg-primary pt-3 text-black pb-0">
    <article class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 shadow-soft p-4 border border-light rounded">
                <p>Adding a dark mode is basically adding a theme. The principles are the same for adding a light mode to a dark website or alternative styling based on user-defined variables, the time of year or holidays.</p>
                <p>I added theming with a mix of and CSS. In this post I’ll go step by step into the details of how I did it and what I learned.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias expedita earum modi sint voluptatum nemo assumenda explicabo laboriosam unde excepturi, necessitatibus consequatur quo! Quis impedit excepturi ut, alias omnis harum?</p>
                <p><img class="rounded" src="../../assets/img/blog/blog-article-1.jpg" alt="Themesberg office"></p>
                <h2>Setup</h2>
                <p>The themes are <a href="#">activated by CSS classes</a> on the root element. When the page is loaded, I want to apply the theme that most likely suits the visitor (you!) best. After all, most people don’t like configuring websites before they can read a blog post, so the the whole theming feature would likely remain unused otherwise. So I have to make a guess about what the visitor wants and expects. I do that in this order:</p>
                <ol>
                    <li>I assume people don’t want the theme to change when they navigate between pages. So if the page loaded isn’t the first page they visit, I want to use the theme that was used before.</li>
                    <li>If it’s the first page they view on my site, their browser may be able to tell their preference.</li>
                    <li>If no preference is available, we can base the choice based on whether it’s day or night.</li>
                </ol>
                <p>Every time a page is loaded, in the current or a new tab, it checks if a theme was set previously. Because the preference for a light or dark theme can change during the day, with every change, I add a time stamp to the saved setting. Only when the state was saved less than two hours ago, it’s applied:</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque distinctio nemo tempora similique necessitatibus asperiores inventore ipsum, nostrum velit, quasi vitae natus numquam veritatis nobis, reiciendis deleniti facere molestias a.</p>
                <h2>Header 2</h2>
                <h3>Header 3</h3>
                <h4>Header 4</h4>
                <h5>Header 5</h5>
                <h6>Header 6</h6>
                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi velit perferendis labore vel, necessitatibus laboriosam fugit inventore ad odio tenetur vitae veritatis, earum numquam consectetur voluptatem illum, sequi asperiores commodi?</p>
                <ul>
                    <li>list item 1</li>
                    <li>list item 2</li>
                    <li>list item 3</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit corrupti dolorem at iste perferendis! Modi praesentium vel, rem aliquid illo, nostrum asperiores dolorem corrupti odio tempora impedit deleniti eius voluptatibus.</p>
            </div>
        </div>
        <div class="row justify-content-sm-center align-items-center py-3 mt-3">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-9 col-md-6">
                        <h6 class="font-weight-bolder d-inline mb-0 mr-3">Partager:</h6>
                        <button class="btn btn-sm mr-2 btn-icon-only btn-pill btn-twitter d-inline" aria-label="twitter social link">
                            <span class="fab fa-twitter"></span>
                        </button>
                        <button class="btn btn-sm mr-2 btn-icon-only btn-pill btn-facebook d-inline" aria-label="facebook social link">
                            <span class="fab fa-facebook-f"></span>
                        </button>
                        <button class="btn btn-sm btn-icon-only btn-pill btn-reddit d-inline" aria-label="reddit social link">
                            <span class="fab fa-reddit-alien"></span>
                        </button>
                    </div>
                    <div class="col-3 col-md-6 text-right">
                        <span class="far fa-bookmark text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark story"></span>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
{{-- end section vision --}}

{{-- comments section --}}

<div class="section section-md bg-primary text-black pt-0 line-bottom-light mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div>
                        <label class="h5 mb-4" for="exampleFormControlTextarea1">
                            <span class="badge badge-md badge-dark text-uppercase mr-2">23</span> Commentaires
                        </label>
                        <input type="text" class="form-control mb-2" placeholder="Entrez votre Nom" name="name" aria-label="Subscribe form" id="exampleInputEmail3" required>
                        <input type="email" class="form-control mb-2" placeholder="Entrez votre email" name="email" aria-label="Subscribe form" id="exampleInputEmail3" required>
                        <textarea class="form-control border border-light" id="exampleFormControlTextarea1" placeholder="Saisisez votre commentaire" rows="6" data-bind-characters-target="#charactersRemaining" maxlength="1000"></textarea>
                        <div class="d-flex justify-content-between mt-3 mb-5">
                            <small class="font-weight-light text-dark"><span id="charactersRemaining">1000</span> characters remaining</small>
                            <button class="btn btn-primary">Envoyer</button>
                        </div>

                        <div class="dropdown">
                            <div class="btn-group mr-2 mb-2">
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Plus pertinents <span class="fas fa-angle-down dropdown-arrow"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">Tous les commentaires</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Plus pertinents</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <button class="btn btn-pill btn-facebook button-comment" type="button">
                                    <span class="mr-1"><span class="fas fa-angle-up"></span></span>
                                    Précedents
                                </button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="card bg-primary shadow-soft border-light rounded p-4 mb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="font-small">
                                        <a href="#">
                                            <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-1.jpg" alt="avatar">
                                            <span class="font-weight-bold">John Doe</span>
                                        </a>
                                        <span class="ml-2">2 min ago</span>
                                    </span>
                                    <div>
                                        <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment">
                                            <span class="far fa-flag"></span>
                                        </button>
                                    </div>
                                </div>
                                <p class="m-0">I really like that the Pixel uses a lot of Bootstrap 4's classes to position elements across the website. I also like the fact that we can get a version of the code without Sass if needed.<br><br>When is the next product coming? :)</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between"><div>
                                    <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                    <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                        <span class="font-small font-weight-light">4 likes</span>
                                    </div>
                                    <a class="text-action font-weight-light font-small collapsed" data-toggle="collapse" role="button" href="#replyContainer1" aria-expanded="false" aria-controls="replyContainer1">
                                        <span class="fas fa-reply mr-2"></span> Reply
                                    </a>
                                </div>
                                <div class="collapse" id="replyContainer1" style="">
                                    <label class="mb-4" for="exampleFormControlTextarea10">Replay</label>
                                    <textarea class="form-control border" id="exampleFormControlTextarea10" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply" maxlength="1000"></textarea>
                                    <div class="d-flex justify-content-between mt-3">
                                        <small class="font-weight-light"><span id="charactersRemainingReply">1000</span> characters remaining</small>
                                        <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-primary shadow-soft border-light rounded p-4 ml-5 mb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="font-small">
                                        <a href="#"><img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-2.jpg" alt="Bonnie avatar">
                                            <span class="font-weight-bold">Bonnie Green</span>
                                        </a>
                                        <span class="ml-2">2 min ago</span>
                                    </span>
                                    <div>
                                        <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                    </div>
                                </div>
                                <p class="m-0">Hi John Doe,<br><br>We're happy to hear you like our product. A new one will come soon enough!</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between">
                                    <div>
                                        <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                        <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                        <span class="font-small font-weight-light">2 likes</span>
                                    </div>
                                    <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="#replyContainer2" aria-expanded="false" aria-controls="replyContainer2"><span class="fas fa-reply mr-2"></span> Reply</a>
                                </div>
                                <div class="collapse" id="replyContainer2">
                                    <label class="mb-4" for="exampleFormControlTextarea11">Replay</label>
                                    <textarea class="form-control border" id="exampleFormControlTextarea11" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply2" maxlength="1000"></textarea>
                                    <div class="d-flex justify-content-between mt-3">
                                        <small class="font-weight-light"><span id="charactersRemainingReply2">1000</span> characters remaining</small>
                                        <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-primary shadow-soft border-light rounded p-4 mb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="font-small">
                                        <a href="#">
                                            <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-3.jpg" alt="James avatar">
                                            <span class="font-weight-bold">James Curran</span>
                                        </a><span class="ml-2">2 min ago</span>
                                    </span>
                                    <div>
                                        <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                    </div>
                                </div>
                                <p class="m-0">Hey there! We want to say that <span class="text-tertiary">you're awesome</span> and we think you'll build great websites! Why not use Pixel to make things easier?</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between"><div>
                                    <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                    <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                    <span class="font-small font-weight-light">4 likes</span>
                                </div>
                                <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="#replyContainer3" aria-expanded="false" aria-controls="replyContainer3">
                                    <span class="fas fa-reply mr-2"></span> Reply
                                </a>
                            </div>
                            <div class="collapse" id="replyContainer3">
                                <label class="mb-4" for="exampleFormControlTextarea12">Replay</label>
                                <textarea class="form-control border" id="exampleFormControlTextarea12" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply3" maxlength="1000"></textarea>
                                <div class="d-flex justify-content-between mt-3">
                                    <small class="font-weight-light"><span id="charactersRemainingReply3">1000</span> characters remaining</small>
                                    <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                </div>
                            </div>
                        </div>
                        <div id="extraContent" style="">
                            <div class="card bg-primary shadow-soft border-light p-4 mb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="font-small">
                                        <a href="#">
                                            <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-2.jpg" alt="Neil avatar">
                                            <span class="font-weight-bold">Neil Sims</span>
                                        </a>
                                        <span class="ml-2">2 min ago</span>
                                    </span>
                                    <div>
                                        <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                    </div>
                                </div>
                                <p class="m-0">I really like that the Pixel uses a lot of Bootstrap 4's classes to position elements across the website. I also like the fact that we can get a version of the code without Sass if needed.<br><br>When is the next product coming? :)</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between">
                                    <div>
                                        <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                        <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                        <span class="font-small font-weight-light">4 likes</span>
                                    </div>
                                    <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="#replyContainer4" aria-expanded="false" aria-controls="replyContainer4">
                                        <span class="fas fa-reply mr-2"></span> Reply
                                    </a>
                                </div>
                                <div class="collapse" id="replyContainer4">
                                    <label class="mb-4" for="exampleFormControlTextarea13">Replay</label>
                                    <textarea class="form-control border" id="exampleFormControlTextarea13" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply4" maxlength="1000"></textarea>
                                    <div class="d-flex justify-content-between mt-3">
                                        <small class="font-weight-light"><span id="charactersRemainingReply4">1000</span> characters remaining</small>
                                        <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-primary shadow-soft rounded border-light p-4 ml-5 mb-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <span class="font-small">
                                        <a href="#">
                                            <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-5.jpg" alt="Jose avatar">
                                            <span class="font-weight-bold">Jose Leos</span>
                                        </a><span class="ml-2">2 min ago</span>
                                    </span>
                                    <div>
                                        <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                    </div>
                                </div>
                                <p class="m-0">Hi John Doe,<br><br>We're happy to hear you like our product. A new one will come soon enough!</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between">
                                    <div>
                                        <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                        <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                        <span class="font-small font-weight-light">2 likes</span>
                                    </div>
                                    <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="#replyContainer5" aria-expanded="false" aria-controls="replyContainer5"><span class="fas fa-reply mr-2"></span> Reply</a>
                                </div>
                                <div class="collapse" id="replyContainer5">
                                    <label class="mb-4" for="exampleFormControlTextarea14">Replay</label>
                                    <textarea class="form-control border" id="exampleFormControlTextarea14" placeholder="Reply to John Doe" rows="6" data-bind-characters-target="#charactersRemainingReply5" maxlength="1000"></textarea>
                                    <div class="d-flex justify-content-between mt-3">
                                        <small class="font-weight-light"><span id="charactersRemainingReply5">1000</span> characters remaining</small>
                                        <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-center">
                            <button id="loadOnClick" class="btn btn-primary btn-loading-overlay mr-2 mb-2 btn-loading" disabled="disabled" style="display: none;">
                                <span class="spinner">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </span>
                                <span class="ml-1 btn-inner-text">Load more comments</span>
                            </button>
                            <p id="allLoadedText" style="">That's all, Sparky!</p>
                        </div> --}}
                        <div class="row">
                            <div class="col text-center">
                                <button class="btn btn-pill btn-facebook button-comment" type="button">
                                    <span class="mr-1"><span class="fas fa-angle-down"></span></span>
                                    Suivents
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end comments section --}}
<div class="row pb-4">
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        {{-- <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
            <span class="far fa-laugh-beam"></span>
            <span aria-hidden="true" class="far fa-thumbs-up"></span>
        </div> --}}
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-eye"></span>
        </button>
        <span class="counter h1 text-interaction d-block">500</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-thumbs-up"></span>
        </button>
        <span class="counter h1 text-interaction d-block">1560</span>
        {{-- <span class="h5">Liked</span> --}}
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-thumbs-down"></span>
        </button>
        <span class="counter h1 text-interaction d-block">1560</span>
        {{-- <span class="h5">Disliked</span> --}}
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-comments"></span>
        </button>
        <span class="counter h1 text-interaction d-block">160</span>
        {{-- <span class="h5">Comments</span> --}}
    </div>
    <!--End of Counter-->
</div>


<section class="section section-lg pt-0">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col text-center">
                <h2 class="h5 mb-6">Ceux qui ont visités le profil de <strong>John</strong>, visitent généralement :</h2>
            </div>
        </div>
        <!-- End of title-->
        <div class="row justify-content-between">

            <div class="col-12 col-md-6 col-lg-4 ">
                <!-- Profile Card -->
                <div class="profile-card pb-6">
                    <div class="card bg-primary shadow-soft border-light">
                        <div class="profile-image bg-primary shadow-inset border border-light rounded p-3 ml-3 mt-n5">
                            <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Bonnie Avatar">
                        </div>

                        <div class="card-body">
                            <div>
                                <span class="h6 icon-tertiary small"><span style="font-size: x-large;color: rgb(175, 16, 16);" class="fas fa-medal mr-2"></span>Awards</span>
                            </div>
                            <h3 class="h5 mb-2">Bonnie Green</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                            <ul class="list-unstyled d-flex my-3">
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
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
            <div class="col-12 col-md-6 col-lg-4 ">
                <!-- Profile Card -->
                <div class="profile-card pb-6">
                    <div class="card bg-primary shadow-soft border-light">
                        <div class="profile-image bg-primary shadow-inset border border-light rounded p-3 ml-3 mt-n5">
                            <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Bonnie Avatar">
                        </div>

                        <div class="card-body">
                            <div>
                                <span class="h6 icon-tertiary small"><span style="font-size: x-large;color: rgb(189, 147, 10)" class="fas fa-medal mr-2"></span>Awards</span>
                            </div>
                            <h3 class="h5 mb-2">Bonnie Green</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                            <ul class="list-unstyled d-flex my-3">
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
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
            <div class="col-12 col-md-6 col-lg-4 ">
                <!-- Profile Card -->
                <div class="profile-card pb-6">
                    <div class="card bg-primary shadow-soft border-light">
                        <div class="profile-image bg-primary shadow-inset border border-light rounded p-3 ml-3 mt-n5">
                            <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded" alt="Bonnie Avatar">
                        </div>

                        <div class="card-body">
                            <div>
                                <span class="h6 icon-tertiary small"><span style="font-size: x-large;color: rgb(5, 141, 109);" class="fas fa-medal mr-2"></span>Awards</span>
                            </div>
                            <h3 class="h5 mb-2">Bonnie Green</h3>
                            <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                            <ul class="list-unstyled d-flex my-3">
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
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- End of Profile Card -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <button class="btn btn-github" type="button">
                <span class="mr-1"><span class="fa fa-plus"></span></span>
                Voir plus des Candidats
            </button>
        </div>
    </div>
</section>

<div class="section section-lg pt-0">
    <div class="container">
        <!-- Title -->
        <div class="row">
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
                        <h2 class="h1 mb-3">Get the most out of your network.</h2>
                        <p class="mb-5 lead">
                            Contact management designed for teams and individuals
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