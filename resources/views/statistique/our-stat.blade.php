@extends('master')

@section('style')
<link rel="stylesheet" href="{{asset('css/chart.css')}}">
@endsection

@section('content')
<!-- Hero -->
<div class="section section-header pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Trouvez votre candidat</h1>
                <p class="lead mb-5">Utilisz notre système de filtrage pour pouvoir localiser n'importe quel candidat qui vous interesse etant donné qu'il se soit enregistré volontié dans notre système.</p>
                <a class="btn btn-primary" href="./contact.html"><span class="fas fa-book-reader mr-2"></span>Our works</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
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
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="chartWhiteIcon"></div>
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
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="topVisitChart"></div>
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

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script>
<script src="https://cdn.amcharts.com/lib/5/hierarchy.js"></script>

<script src="{{asset('js/chartWhiteIcon.js')}}"></script>
<script src="{{asset('js/mapDRC.js')}}"></script>
<script src="{{asset('js/chartWithCicle.js')}}"></script>
<script src="{{asset('js/twoPieChart.js')}}"></script>
<script src="{{asset('js/treeChart.js')}}"></script>
<script src="{{asset('js/topVisitChart.js')}}"></script>
<script src="{{asset('js/tagCloud.js')}}"></script>

@endsection
