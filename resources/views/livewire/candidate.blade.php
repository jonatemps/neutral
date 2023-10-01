<div>
    <!-- Section -->
    <div class="section section-lg pt-4 px-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-9">
                    <div class="form-group">
                        <div class="mb-3">
                            <span class="h6 font-weight-bold">Bar de recherche</span>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fas fa-search"></span></span>
                            </div>
                            <input class="form-control" id="exampleInputIcon1" placeholder="Icon Left" type="text" aria-label="Input with icon left">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 mt-md-0 text-center">
                    <div class="pb-3">
                        <span class="h6 font-weight-bold">Recherche avancée</span>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Activer/Désactiver</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4 mb-lg-5">
                <div class="col-lg-6 col-sm-6 border-carer ">
                    {{-- <div class="mb-3">
                        <span class="h6 font-weight-bold">Checkboxes Round</span>
                    </div> --}}
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck555" checked>
                        <label class="form-check-label" for="defaultCheck555">
                        Députation Provinciale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck666">
                        <label class="form-check-label" for="defaultCheck666">
                            Députation Nationnale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck777">
                        <label class="form-check-label" for="defaultCheck777">
                            Présidentielle
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label for="disabledSelect">Parti Politique</label>
                        <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                            <option value="1">United States</option>
                            <option value="2">Germany</option>
                            <option value="3">Canada</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label for="disabledSelect">Province</label>
                        <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                            <option value="1">United States</option>
                            <option value="2">Germany</option>
                            <option value="3">Canada</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label for="disabledSelect">Circonscription</label>
                        <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                            <option value="1">United States</option>
                            <option value="2">Germany</option>
                            <option value="3">Canada</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Section -->



    {{-- section --}}
    <section class="section section-lg pt-0">
        <div class="container">
            {{-- <div class="row justify-content-center mb-1">
                <h2 class="h1">Les candidats :</h2>
            </div> --}}
            <div class="row align-items-center">
                @foreach ($candidates as $candidate)

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card bg-primary shadow-soft border-light text-center">
                            <div class="card-header px-3 py-3">
                                <div class="profile-cover rounded" data-background="{{$candidate->party->logo}}" style="background-image: url(&quot;{{$candidate->party->logo}}&quot;);">
                                </div>
                                <div class="profile-image-small bg-primary rounded-circle shadow-inset p-2 border border-light mx-auto mt-n6">
                                    <img src="{{$candidate->photo}}" class="card-img-top rounded-circle" alt="Bonnie Avatar">
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <span class="h6 icon-tertiary">
                                    <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                    <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                    <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span>
                                </span>
                                <h3 class="h5 mb-0">{{$candidate->fullname()}}</h3>
                                <p class="card-text">{{$candidate->slogan}}</p>
                                <a class="btn btn-sm btn-primary mb-4" href="{{route('profil',[$candidate->id])}}">
                                    <span class="fas fa-plus mr-1"></span> Détail
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center my-3">
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <nav aria-label="Products page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </section>

</div>
