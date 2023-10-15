@extends('master')

@section('style')

<style>
    .owl-theme .owl-nav {
    margin-top: 0px;
    margin-bottom: 0px;
}
</style>

@endsection

@section('title')
Contact
@endsection

@section('content')

        <!-- Hero -->
        <div class="section section-header pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h1 class="display-2 mb-4">Entrez en contact avec nous.</h1>
                        <p class="lead mb-5">Nous sommes impatients d’entrer en contact avec vous. N’hésitez pas.</p>
                        <a class="btn btn-primary" href="{{route('contact')}}"><span class=""></span></a></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!--Breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent my-2">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Acceuil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                        <!--End of Breadcrumb-->
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-md-10 px-7 py-4">
            <div class="row" style="height: 5px;">
                <div class="col-4" style="background-color: #ffc800;"></div>
                <div class="col-4" style="background-color: #1893ff;"></div>
                <div class="col-4" style="background: red;"></div>
            </div>
        </div>

        <!-- Section -->
        <section class="section section-lg pt-0 pb-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 col-lg-12 mb-5 mt-5">
                        <!-- Contact Card -->
                        @if (session('alert'))
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10">
                                    <div class="alert alert-success alert-dismissible shadow-soft fade show" role="alert">
                                        <span class="alert-inner--icon"><span class="far fa-thumbs-up"></span></span>
                                        <span class="alert-inner--text"><strong>Bien fait {{ session('name') }} !</strong> {{ session('alert') }}</span>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                            <div class="card-header">
                                <div class="row justify-content-center">
                                    {{-- <div class="col-12">
                                        <div class="shadow-inset p-4 mb-5 rounded">
                                            <iframe class="map rounded" id="gmap_canvas" src="https://maps.google.com/maps?q=san%20francisco&t=&z=8&ie=UTF8&iwloc=&output=embed"></iframe>
                                        </div>
                                    </div> --}}
                                    <div class="col-12 col-md-8 text-center mb-5">
                                        <h1 class="display-2 mb-3">Entrez en contact aujourd’hui</h1>
                                        <p class="lead">Comment trouvez tel candidat? Besoin d’aide pour ta campagne?  Comment ça marche? Nous répondons régulièrement.</p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    {{-- <div class="col-md-4 col-lg-4 text-center">
                                        <!-- Visit Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">nous visiter</h2>
                                            <span>
                                                27 Silicon Valley
                                                <br>
                                                USA, California
                                            </span>
                                        </div>
                                        <!-- End of Visit Box -->
                                    </div> --}}
                                    <div class="col-md-6 col-lg-6 text-center">
                                        <!-- Call Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="fas fa-headphones-alt"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Appel</h2>
                                            <span>+243 813134572</span>
                                            <div class="text-small text-gray">
                                                Lun - Sam, 8am - 4pm
                                            </div>
                                        </div>
                                        <!-- End of Call Box -->
                                    </div>
                                    <div class="col-md-6 col-lg-6 text-center">
                                        <!-- Email Box -->
                                        <div class="icon-box mb-4">
                                            <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                                <span class="far fa-paper-plane"></span>
                                            </div>
                                            <h2 class="h5 icon-box-title">Email</h2>
                                            <a href="#">contact@neutral.com</a>
                                            {{-- <br><a href="#">name@company.com</a> --}}
                                        </div>
                                        <!-- End of Email Box -->
                                    </div>
                                </div>
                            </div>
                            <form class="col-12 col-md-8 mx-auto" action="{{route('sendMessage')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="nameInputIcon2">Ton nom</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="far fa-user-circle"></span></span>
                                        </div>
                                        <input class="form-control" name="name" id="nameInputIcon2" placeholder="e.g. Jonathan Mupene" type="text" aria-label="contact name input">
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="emailInputIcon2">Ton Email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="far fa-envelope"></span></span>
                                        </div>
                                        <input class="form-control" name="email" id="emailInputIcon2" placeholder="example@company.com" type="email" aria-label="contact email input">
                                    </div>
                                </div>
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea2">Ton Message</label>
                                    <textarea class="form-control" name="message" placeholder="Enter your message..." id="exampleFormControlTextarea2" rows="4"></textarea>
                                </div>
                                <!-- End of Form -->
                                <div class="card-footer px-0 mx-auto">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </form>

                        </div>
                        <!-- End of Contact Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of section -->



        @include('partials.partners')

        <section class="section section-lg pt-0 pb-0">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-12 mt-5">
                        <div class="card bg-primary shadow-soft border-light px-4 py-5">
                            <div class="card-header pb-0 text-center">
                                <h2 class="h1 mb-3">Newsletter</h2>
                                <p class="mb-5 lead">
                                    Inscrivez-vous à notre liste de diffusion. Nous écrivons rarement, mais seulement le meilleur contenu.
                                </p>
                            </div>
                            <form action="{{route('SubNewsletter')}}" method="post">
                                @csrf
                                <div class="card-body pt-2 px-0 px-lg-7">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-md-8">
                                            <div class="form-group">
                                                <label class="h6 font-weight-light text-gray" for="subscribeInputEmail">Adresse Email</label>
                                                <div class="d-flex flex-row justify-content-center">
                                                    <div class="input-group">
                                                        <input class="form-control form-control-xl border-light" name="email" id="subscribeInputEmail" placeholder="example@company.com" type="email" required>
                                                        <div class="input-group-prepend">
                                                            <button type="submit" class="btn btn-primary rounded-right">Souscrire</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
