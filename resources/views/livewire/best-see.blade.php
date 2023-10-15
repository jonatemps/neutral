<section class="section section-lg pt-5">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col-6 text-center">
                {{-- <h2 class="h3 mb-7">Les plus visités</h2> --}}
                <div class="form-group">
                    {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country</label> --}}
                    <select wire:model="categorySee" class="custom-select mb-6 mr-sm-2" id="selectSeen">
                        <option  selected value>Filtre Vues</option>
                        <option value="1">Députés provincials les plus visités.</option>
                        <option value="2">Députés Nationnals les plus visités.</option>
                        <option value="3">Présidents les plus visités.</option>
                    </select>
                </div>
            </div>
            <div class="col-6 text-center">
                {{-- <h2 class="h3 mb-7">Les plus visités</h2> --}}
                <div class="form-group">
                    {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country</label> --}}
                    <select wire:model="categoryLike" class="custom-select mb-6 mr-sm-2" id="selectLike">
                        <option  selected value>Filtre Likes</option>
                        <option value="1">Députés provincials avec plus des likes.</option>
                        <option value="2">Députés Nationnals avec plus des likes.</option>
                        <option value="3">Présidents avec plus des likes.</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- End of title-->
        <div class="row justify-content-between">
            @foreach ($candidatures as $candidature)
                <div class="col-12 col-md-6 col-lg-4 ">
                    <!-- Profile Card -->
                    <div class="profile-card mb-5 pt-5">
                        <div class="card bg-primary shadow-inset border-light text-center">
                            <div class="card-header">
                                <div class="profile-image bg-primary shadow-inset border border-light rounded mx-auto p-3 mt-n6">
                                    <img src="{{$candidature->photo}}" class="card-img-top rounded" alt="Leos Portrait">
                                </div>
                            </div>
                            <div class="card-body pb-5">
                                <h3 class="h5 mb-2">{{$candidature->candidate->fullName()}}</h3>
                                <span class="h6 icon-tertiary">
                                    @foreach ($candidature->mandates as $mandate)
                                    {!!$mandate->getStyleMandate()!!}
                                    @endforeach
                                    {{-- <span class="fas fa-medal mr-2" style="color: rgb(175, 16, 16);"></span>
                                    <span class="fas fa-medal mr-2" style="color: rgb(18, 177, 240);"></span>
                                    <span class="fas fa-medal mr-2" style="color: rgb(189, 147, 10);"></span> --}}
                                </span><br>
                                <span class="h6 font-weight-normal text-gray mb-3">{{$candidature->circumscription->province->nameUc().' - '.$candidature->circumscription->nameUc()}}</span>
                                <ul class="list-unstyled d-flex justify-content-center mt-3 mb-4">
                                    <li>
                                        <a href="{{$candidature->id_facebook}}" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$candidature->id_twitter}}" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$candidature->id_linkedin}}" target="_blank" aria-label="slack social link" class="icon icon-xs mr-3">
                                            <span class="fab fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                                <a class="btn btn-sm btn-primary mr-3" href="{{route('profil',[$candidature->candidate->id])}}">
                                    <span class="fas fa-book-reader mr-1"></span> Détail
                                </a>
                                {{-- <a class="btn btn-sm btn-primary" href="#">
                                    Message
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End of Profile Card -->
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-5">
                <!-- Button Social -->
                <button wire:click="seeMore" class="btn btn-pill btn-github" type="button">
                    <span class="mr-1"><span class="far fa-eye"></span></span>
                    <strong>Voir Plus</strong>
                </button>

            </div>
        </div>
    </div>
</section>
