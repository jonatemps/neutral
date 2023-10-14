@extends('master')
@section('title')
Statistiques CENI
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/chart.css')}}">
@endsection

@section('content')
<!-- Hero -->
<div class="section section-header pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Visuels de la CENI</h1>
                <p class="lead mb-5">Quelques données de la CENI mis sous formes graphiques</p>
                <a class="btn btn-primary" href="{{route('contact')}}"><span class="fas fa-phone mr-2"></span>Contact</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ceni stat</li>
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

<div class="section section-lg pt-0">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <<div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Répartition de sièges
                        </p>
                    </div>
                    <div id="treeChart"></div>
                </div>
            </div>
            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="chartWithCicle"></div>
                </div>
            </div>
            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="twoPieChart"></div>
                </div>
            </div>
            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="treeChart"></div>
                </div>
            </div>

            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Candidature Par Genre
                        </p>
                    </div>
                    <div id="chartGenderCeni"></div>
                </div>
            </div>

            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div id="tagCloud"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


@section('script')
<!-- Resources Chart -->
<script>
    var provs = @js($provs);

    // "figures" will now be a JavaScript array of post data from PHP.
</script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script>
<script src="https://cdn.amcharts.com/lib/5/hierarchy.js"></script>

<script src="{{asset('js/mapDRC.js')}}"></script>
<script src="{{asset('js/treeChart.js')}}"></script>
<script src="{{asset('js/chartGenderCeni.js')}}"></script>

@endsection
