@extends('master')
@section('title')
détail candidat
@endsection
@section('style')
<style>
    article p, article blockquote {
    font-size: 1rem;
    margin-bottom: 4px;
    }

    figcaption {
    text-align: center;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }

    figure img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
</style>
@endsection
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

        <div class="section-header section-image bg-primary pb-0 pt-6">
            <div class="row">
                <div class="col-12">
                    <!--Breadcrumb-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                            <li class="breadcrumb-item"><a href="{{route('candidates')}}">Candidats</a></li>
                            <li class="breadcrumb-item active" aria-current="page">detail</li>
                        </ol>
                    </nav>
                    <!--End of Breadcrumb-->
                </div>
            </div>
            <div id="top" class="container z-2">
                <div class="row my-5 justify-content-center text-center">
                    <div class="col-lg-8">
                        <img style="height: 300px;" src="{{$candidate->photo}}" class="rounded-circle img-thumbnail image-lg border-light shadow-inset p-3" alt="Joseph Avatar">
                        <h1 class="h2 my-4">{{$candidate->fullname()}}</h1>
                        <h2 class="h5 font-weight-normal text-gray mb-4">{{$candidate->slogan}}</h2>
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
                        <livewire:counter />
                    </div>
                </div>
                <div class="row justify-content-center text-center" {{$candidate->candidature->mandates->where('id','!=', 3)->count() >= 1 ? '' : 'hidden'}}>
                    <div class="col-lg-5">
                        <div class="mb-5">
                            <div class="table-responsive-sm shadow-soft rounded">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="border-0" scope="col" id="class2">Parti</th>
                                        <th class="border-0" scope="col" id="teacher2">Province</th>
                                        <th class="border-0" scope="col" id="males2">Circonscription</th>
                                    </tr>
                                    <tr>
                                        <td headers="firstyear3 Bolter2 males2">PPRD</td>
                                        <td headers="firstyear2 Bolter2 males2">KINSHASA</td>
                                        <td headers="firstyear2 Bolter2 males2">FUNA</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            {{-- <div class="row">
                <div class="col text-center">
                    <h3 class="h5 mb-3">Candidaté à :</h3>
                </div>
            </div> --}}
            <div class="row justify-content-md-center">
              @foreach ($candidate->candidature->mandates as $mandate)
              <div class="col-md-auto mb-3">
                <div class="card bg-soft shadow-soft border-light p-4">
                    <!-- Header -->
                    <div class="card-header pb-0">
                        <span class="d-block">
                            @if ($mandate->id == 1)
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(175, 16, 16);" class="fas fa-medal"></span> Provinciale</span>
                            @elseif ($mandate->id == 2)
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(18, 177, 240);" class="fas fa-medal"></span> Nationnale</span>
                            @elseif ($mandate->id == 3)
                            <span class="h2 font-weight-bold align-top"><span style="color: rgb(189, 147, 10);" class="fas fa-medal"></span> Présidence</span>
                            @endif

                        </span>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body" {{$candidate->candidature->mandates->where('id','!=', 3)->count() >= 1 ? 'hidden' : ''}}>
                        <ul class="list-group list-group-flush price-list">
                            <li class="list-group-item bg-soft pl-0">
                                <span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Parti :</strong> {{$candidate->party->name}}
                            </li>
                            {{-- <li class="list-group-item bg-soft pl-0"><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Province :</strong> {{$candidate->candidature->circumscription->province->name}}</li>
                            <li class="list-group-item bg-soft pl-0" {{$mandate->id == 3 ? 'hidden' : ''}}><span class="text-success"><span class="fas fa-arrow-circle-right"></span></span><strong>Circonscription :</strong> {{$candidate->candidature->circumscription->name}}</li> --}}
                        </ul>
                        {{-- <a href="https://themesberg.com/product/ui-kits/neumorphism-ui-pro" target="_blank" class="btn btn-block btn-primary text-secondary mt-4 mr-3"><i class="far fa-paper-plane mr-2"></i> Upgrade to PRO</a> --}}
                    </div>
                    <!-- End Content -->
                </div>
              </div>
              @endforeach
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
                                <iframe class="card-img-top rounded"  allowfullscreen style="width: -webkit-fill-available;height: 250px;" class="taille-video" {{-- width="420" height="315" --}} src="{{$candidate->memo->lnk_video ?? ''}}"> </iframe>
                                <a href="#!" data-toggle="modal" data-target="#modal-videoMemo">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                </a>
                            </div>
                            <!-- Modal Content -->
                            <div class="modal fade" id="modal-videoMemo" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                                                src="{{$candidate->memo->lnk_video ?? '' ?? ''}}"
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
                                                                @foreach ($candidate->diplomas as $diploma)
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">{{$diploma->start_year}} à {{$diploma->end_year}}</span>
                                                                            <h3 class="h4 my-2">{{$diploma->institution_name}}</h3>
                                                                            <img src="{{$diploma->institution_logo}}" class="image-xs" alt="Northwestern logo">
                                                                            <p class="font-weight-bolder">{{$diploma->title}}</p><p>{{$diploma->description}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
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
                                                                @foreach ($candidate->experiences as $experience)
                                                                <div class="timeline-item text-left">
                                                                    <div class="card border-light shadow-inset p-3">
                                                                        <div class="card-body bg-primary shadow-soft rounded border border-light p-3">
                                                                            <span class="text-gray">{{$experience->start_year}} à {{$experience->end_year}}</span>
                                                                            <h3 class="h4 my-2">{{$experience->institution_name}}</h3>
                                                                            <img src="{{$experience->institution_logo}}" class="image-xs" alt="Northwestern logo">
                                                                            <p class="font-weight-bolder">{{$experience->title}}</p><p>{{$experience->description}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
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
                                            @foreach ($candidate->photos as $photo)
                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light">
                                                    <div class="card-header rounded pb-0">
                                                        <img src="{{$photo->image}}" class="card-img-top rounded" alt="Webdeveloper desk">
                                                        <a href="#!" data-toggle="modal" data-target="#modal-image1">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">{{$photo->title}}</h4></a>
                                                        {{-- <p class="card-text mb-4">All of the world's 10 largest companies as measured by market capitalization are American. Market capitalization is the total value of a company's entire purchased shares of stock...</p> --}}
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
                                                                        {{-- <ol class="carousel-indicators">
                                                                            <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="1"></li>
                                                                            <li data-target="#Carousel4" data-slide-to="2"></li>
                                                                        </ol> --}}
                                                                        <div class="carousel-inner rounded">
                                                                            <div class="carousel-item active">
                                                                                <img class="d-block w-100" src="{{$photo->image}}" alt="First slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >{{$photo->title}}</h3>
                                                                                </div>
                                                                            </div>
                                                                            @foreach ($candidate->photos->except($photo->id) as $item)
                                                                            <div class="carousel-item">
                                                                                <img class="d-block w-100" src="{{$item->image}}" alt="Second slide">
                                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                                    <h3 class="h5" style="
                                                                                    text-shadow: -2px 1px 2px white;
                                                                                    box-shadow: inset 0 0 13px 6px white;
                                                                                    margin-bottom: 3rem;"
                                                                                    >{{$item->title}}</h3>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach

                                                                        </div>
                                                                        <a class="carousel-control-prev" href="#Carousel4" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Précédent</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#Carousel4" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Suivant</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto px-4 py-1 my-1" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->
                                                </div>
                                            </div>
                                            @endforeach
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
                                            @foreach ($candidate->videos as $video)
                                            <div class="col-12 col-md-6">
                                                <div class="card bg-primary shadow-soft border-light ">
                                                    <div class="card-header rounded pb-0">
                                                        {{-- <img src="../../assets/img/blog/blog-article-1.jpg" class="card-img-top rounded" alt="Webdeveloper desk"> --}}
                                                        <iframe class="card-img-top rounded"  allowfullscreen
                                                        style="width: -webkit-fill-available;height: 200px;"
                                                        class="taille-video" {{-- width="420" height="315" --}}
                                                        src="{{$video->link}}">
                                                    </iframe>
                                                        <a href="#!" data-toggle="modal" data-target="{{'#modal-video1'.$video->id}}">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                    <div class="card-body py-1">
                                                        <a href="#" ><h4 class="h6 text-center">{{$video->title}}</h4></a>
                                                        {{-- <p class="card-text">All of the world's 10 largest companies as measured by market .</p> --}}
                                                    </div>

                                                    <!-- Modal Content -->
                                                    <div class="modal fade" id="{{'modal-video1'.$video->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                                                                        src="{{$video->link}}"
                                                                        title="YouTube video"
                                                                        allowfullscreen
                                                                    ></iframe>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    {{-- <button type="button" class="btn btn-sm btn-primary">I Got It</button> --}}
                                                                    <button type="button" class="btn btn-primary text-danger ml-auto" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End of Modal Content -->

                                                </div>
                                            </div>
                                            @endforeach
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
        @php
            // libxml_use_internal_errors(true);
            $html = '<h1>Titre 1</h1><h2>Titre 2</h2><h3>Titre 3</h3><h3>Un autre titre 3</h3>';
            $dom = new DOMDocument;
            // dd($candidate->memo->content,$html);
            $dom->loadHTML(htmlspecialchars($candidate->memo->content));
            // $dom->loadHTML($html);
            $h3tags = $dom->getElementsByTagName("p");
            $count = $h3tags->length;
            $count = $count/2;
        @endphp
        <h1 class="display-3 mb-4 px-lg-5">Projet de société</h1>
        <div class="post-meta">
            {{-- <span class="font-weight-bold mr-3">James Curran</span> --}}
            <span class="post-date mr-3">{{$candidate->memo->getDate()}}</span>
            <span class="font-weight-bold">{{number_format($count,0)}} min de lecture</span>
        </div>
    </div>
</div>

<div class="section section-sm bg-primary pt-3 text-black pb-0">
    <article class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 shadow-soft p-4 border border-light rounded">
                {!!$candidate->memo->content!!}
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
                            <span class="fab fa-whatsapp text-success"></span>
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
<livewire:comment />
{{-- end comments section --}}

<div class="pb-6">
    <livewire:counter />
</div>


<section class="section section-lg pt-0">
    <div class="container">
        <!-- Title -->
        <div class="row" {{$RecomCandidates->count() >= 1 ? '' : 'hidden' }}>
            <div class="col text-center">
                <h2 class="h5 mb-6">Ceux qui ont visités le profil de <strong>John</strong>, visitent généralement :</h2>
            </div>
        </div>
        <!-- End of title-->
        <div class="row justify-content-between">
            @foreach ($RecomCandidates as $RecomCandidate)
                <div class="col-12 col-md-6 col-lg-4 ">
                    <!-- Profile Card -->
                    <div class="profile-card pb-6">
                        <div class="card bg-primary shadow-soft border-light">
                            <div class="profile-image bg-primary shadow-inset border border-light rounded p-3 ml-3 mt-n5">
                                <img src="{{$RecomCandidate->photo}}" class="card-img-top rounded" alt="Bonnie Avatar">
                            </div>

                            <div class="card-body">
                                <div>
                                    @foreach ($RecomCandidate->candidature->mandates as $item)
                                        {!! $item->getStyleMandate() !!}
                                    @endforeach
                                    {{-- <span class="h6 icon-tertiary small"><span style="font-size: x-large;color: rgb(175, 16, 16);" class="fas fa-medal mr-2"></span>Awards</span> --}}
                                </div>
                                <h3 class="h5 mb-2">{{$RecomCandidate->fullname()}}</h3>
                                <ul class="list-unstyled d-flex my-3">
                                    <li>
                                        <a href="{{$RecomCandidate->id_facebook}}" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$RecomCandidate->id_twitter}}" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$RecomCandidate->id_linkedIn}}" target="_blank" aria-label="slack social link" class="icon icon-xs  mr-3">
                                            <span class="fab fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">{{$RecomCandidate->getSlogan()}}</p>
                                <a class="btn btn-sm btn-primary mr-3" href="{{route('profil',[$RecomCandidate->id])}}">
                                    <span class="fas fa-book-reader mr-1"></span> Détail
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Profile Card -->
                </div>
            @endforeach
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




@endsection
