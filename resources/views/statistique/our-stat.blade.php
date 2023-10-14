@extends('master')
@section('title')
Statistiques Neutral
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
                <h1 class="display-2 mb-4">Nos graphiques</h1>
                <p class="lead mb-5">Des statistiques générés par les interactions des visiteurs avec les contenus du système Neutral.</p>
                <a class="btn btn-primary" href="{{route('contact')}}"><span class="fas fa-phone mr-2"></span>Contact</a></div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our stat</li>
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
                        <h2>Nuage des noms en commentire</h2>
                    </div>
                    <div id="tagCloud"></div>
                </div>
            </div>
            <div class="col-12">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <h2 >Candidats les plus visités</h2>
                        {{-- <p class=" lead">
                            Candidats les plus visités
                        </p> --}}
                    </div>
                    {{-- <div id="chartWhiteIcon"></div> --}}
                    <div id="MovingBullets"></div>
                </div>
            </div>
            {{-- <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="chartCompar"></div>
                </div>
            </div> --}}

            {{-- <livewire:candidate-compar /> --}}
        </div>

        <div class=" justify-content-center">
            <form class="row g-3 needs-validation" action="{{route('stat.our')}}" method="GET" role="search">
                {{ csrf_field() }}
                <div class="col-lg-6 col-sm-6">
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="candOne">
                        <option selected disabled>Choisisez...</option>
                        @foreach ($candidates as $candidate)
                            <option value="{{$candidate['id']}}" {{ old('cand1One') == $candidate['id'] ? 'selected' : '' }}>{{$candidate->fullname()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="candTwo">
                        <option selected disabled>Choisisez...</option>
                        @foreach ($candidates as $candidate)
                            <option value="{{$candidate['id']}}" {{ old('candTwo') == $candidate['id'] ? 'selected' : '' }}>{{$candidate->fullname()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-12 col-sm-12 mt-2">
                    <button type="submit" class="btn btn-primary mb-4" style="width: 100%;">Comparer</button>
                </div>
              </form>
        </div>

        <div class="row">
            <div class="col-12 pb-5">
                <div class="card bg-primary shadow-soft border-light px-2 text-center mb-5">
                    <div class="card-header pb-0 text-center">
                        <h2 >Comparaison</h2>
                    </div>
                    <div id="chartCompar"></div>
                </div>
            </div>
        </div>
        @livewire('candidate-compar')
    </div>
</div>

@endsection


@section('script')
<script>
    var compars = @js($compars);
    var bestvis = @js($bestvis);
    var names = @js($names);
    // console.log(names.original[1]);
    var cands = @js($cands);


    // console.log(compars.original);

</script>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script src="{{asset('js/chartCompar.js')}}"></script>
<script src="{{asset('js/tagCloud.js')}}"></script>
<script src="{{asset('js/MovingBullets.js')}}"></script>
@endsection
