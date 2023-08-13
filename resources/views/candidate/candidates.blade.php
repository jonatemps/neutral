@extends('master')

@section('content')
<!-- Hero -->

<div class="section section-header pb-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h1 class="display-2 mb-4">Trouvez votre candidat</h1>
                <p class="lead mb-5">Utilisz notre système de filtrage pour pouvoir localiser n'importe quel candidat qui vous interesse étant donné qu'il s'est fait enregistré volontié au Neutral système.</p>
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
                        <p class=" lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div id="chartWhiteIcon"></div>
                </div>
            </div>
            <div class="col-12 mt-5">
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
@section('script')
@endsection
