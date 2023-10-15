@extends('master')
@section('title')
Liste candidats
@endsection
@section('style')
<style>

    ul {
        justify-content: center;
    }
    .slogan {
    height: 65px;
}

</style>
<link rel="stylesheet" href="{{asset('css/chart.css')}}">
@endsection

@section('content')
<!-- Hero -->

<div class="section section-header pb-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Trouvez votre candidat</h1>
                <p class="lead mb-5">Utilisez notre système de filtrage et localiser n'importe quel candidat qui vous interesse étant donné qu'il s'est fait enregistré volontié au Neutral système.</p>
                <a class="btn btn-primary" href="{{route('contact')}}"><span class="fas fa-phone mr-2"></span>Contact</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Candidats</li>
                    </ol>
                </nav>
                <!--End of Breadcrumb-->
            </div>
        </div>
    </div>
</div>

<div class="container px-md-10 px-7">
    <div class="row" style="height: 5px;">
        <div class="col-4" style="background-color: #ffc800;"></div>
        <div class="col-4" style="background-color: #1893ff;"></div>
        <div class="col-4" style="background: red;"></div>
    </div>
</div>

<livewire:candidate-list />


<div class="section section-lg pt-0">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-12">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <H3>
                            Candidats les plus visités
                        </H3>
                    </div>
                    {{-- <div id="chartWhiteIcon"></div> --}}
                    <div id="MovingBullets"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script>
    var bestvis = @js($bestvis);
    console.log(bestvis.original);
</script>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>iu
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="{{asset('js/MovingBullets.js')}}"></script>

@endsection
