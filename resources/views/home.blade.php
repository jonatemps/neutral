@extends('master')
@section('title')
Acceuil
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/chart.css')}}">

<style>
    .owl-theme .owl-nav {
    margin-top: 0px;
    margin-bottom: 0px;
}
</style>

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
        @include('service')

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
                                <h3 >
                                    Répartition de sièges
                                </h3>
                            </div>
                            <div id="treeChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Section -->


        {{-- candidats section --}}
        <livewire:best-see />

        <!-- Section tagCloud-->
        <section class="section bg-primary pt-0 section-lg pb-0">
            <div class="container">
                <!-- End of title-->
                <div class="row justify-content-center">
                    <div class="col-12 py-5">
                        <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                            <div class="card-header pb-0 text-center">
                                <p class=" lead">
                                    Candidats les plus vue
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

        @include('partials.partners')

@endsection


@section('script')
<!-- Resources Chart -->

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/hierarchy.js"></script>

<script>
    var provs = @js($provs);
    var cands = @js($cands)
    // console.log(figures);
    // console.log(figures);
    // "figures" will now be a JavaScript array of post data from PHP.
</script>
<script src="{{asset('js/treeChart.js')}}"></script>
<script src="{{asset('js/tagCloud.js')}}"></script>

@endsection
