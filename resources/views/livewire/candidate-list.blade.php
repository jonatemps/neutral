<div>
    <!-- Section -->
    <div class="section section-lg pt-4 px-4 pb-0">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
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
                            <input class="form-control" wire:model="searchBar" id="exampleInputIcon1" placeholder="Icon Left" type="text" aria-label="Input with icon left">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 mt-md-0 text-center">
                    <div class="pb-3">
                        <span class="h6 font-weight-bold">Recherche avancée</span>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" wire:model="searchAdvenced" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Activer/Désactiver</label>{{$searchAdvenced}}
                    </div>
                </div>
            </div>

            @if ($searchAdvenced)
                <div class="row mb-4 mb-lg-5">
                    <div class="col-lg-6 col-sm-6 border-carer ">
                        {{-- <div class="mb-3">
                            <span class="h6 font-weight-bold">Checkboxes Round</span>
                        </div> --}}
                        <div class="form-check">
                            <input class="form-check-input" wire:model="DepProv" type="checkbox" value="1" id="defaultCheck555" checked>
                            <label class="form-check-label" for="defaultCheck555">
                            Députation Provinciale {{$DepProv}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" wire:model="DepNatoin" type="checkbox" value="2" id="defaultCheck666">
                            <label class="form-check-label" for="defaultCheck666">
                                Députation Nationnale {{$DepNatoin}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" wire:model="Presidence" type="checkbox" value="3" id="defaultCheck777">
                            <label class="form-check-label" for="defaultCheck777">
                                Présidentielle {{$Presidence}}
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label for="disabledSelect">Parti Politique</label>
                            <select id="disabledSelect" wire:model="party" class="form-control">
                                <option value="tous">Tous</option>
                                @foreach ($parties as $party)
                                    <option value="{{$party['id']}}">{{$party['name']}} -{{$party['id']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label for="disabledSelect">Province</label>
                            <select id="disabledSelect" wire:model="province" class="form-control">
                                <option value="tous">Tous</option>
                                @foreach ($provinces as $province)
                                    <option value="{{$province['id']}}">{{$province['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label for="disabledSelect">Circonscription</label>
                            <select id="disabledSelect" wire:model="circumpcription" class="form-control">
                                <option value="tous">Tous</option>
                                @foreach ($circumpcriptions as $circumpcription)
                                    <option value="{{$circumpcription['id']}}">{{$circumpcription['name']}} -{{$circumpcription['id']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- End of Section -->



    {{-- section --}}
    <section class="section section-lg pt-0">
        <div class="container">
            {{-- <div class="row justify-content-center mb-1">
                <h2 class="h1">Les candidats :</h2>
            </div> --}}
            <div class="row justify-content-center">
                @foreach ($candidatures as $candidature)
{{--
                    @php
                        dd($candidature->mandates)
                    @endphp --}}
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card bg-primary shadow-soft border-light text-center">
                            <div class="card-header px-3 py-3">
                                <div class="profile-cover rounded" data-background="{{$candidature->candidate->party->logo}}" style="background-image: url(&quot;{{$candidature->candidate->party->logo}}&quot;);">
                                </div>
                                <div class="profile-image-small bg-primary rounded-circle shadow-inset p-2 border border-light mx-auto mt-n6">
                                    <img src="{{$candidature->candidate->photo}}" class="card-img-top rounded-circle" alt="Bonnie Avatar">
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <span class="h6 icon-tertiary">
                                    @foreach ($candidature->mandates as $mandate)
                                        {!!$mandate->getStyleMandate()!!}
                                    @endforeach
                                </span>
                                <h3 class="h5 mb-0">{{$candidature->candidate->fullname()}}</h3>
                                <p class="card-text slogan">{{$candidature->candidate->getSlogan()}}</p>
                                <a class="btn btn-sm btn-primary mb-4" href="{{route('profil',[$candidature->candidate->id])}}">
                                    <span class="fas fa-plus mr-1"></span> Détail
                                </a>
                                <ul class="list-unstyled d-flex justify-content-center my-3">
                                    <li>
                                        <a href="{{$candidature->candidate->id_facebook}}" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$candidature->candidate->id_twitter}}" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$candidature->candidate->id_linkedIn}}" target="_blank" aria-label="slack social link" class="icon icon-xs  mr-3">
                                            <span class="fab fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {{ $candidatures->links() }} --}}

            <div class="row mt-5 justify-content-center">
                <div class="col-md-4">
                    <nav aria-label="Products page navigation">
                        {{ $candidatures->links() }}
                        {{-- <ul class="pagination">
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
                        </ul> --}}
                    </nav>
                </div>
            </div>
        </div>

    </section>

</div>
