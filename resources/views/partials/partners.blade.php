<div class="section section-md pt-0 bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row mt-4 mt-lg-6 justify-content-center">
                    <div class="col-md-8">
                        <div class="news-carousel owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-2960px, 0px, 0px); transition: all 0.25s ease 0s; width: 5180px;">
                                    @foreach ($testimonies as $testimony)
                                        <div class="owl-item cloned" style="width: 730px; margin-right: 10px;">
                                            <div class="item text-center">
                                                <div class="mb-4">
                                                    <img class="m-auto shadow-inset p-2 border border-light rounded-circle avatar-sm" src="{{$testimony->photo}}" alt="Bonnie avatar">
                                                </div>
                                                <span class="d-block my-3">
                                                    {!!$testimony->getStarts()!!}
                                                </span>
                                                <blockquote class="blockquote">{{$testimony->comment}}
                                                    <footer class="h5 mt-3 text-dark">{{$testimony->full_name}}</footer><p class="pb-0">/ {{$testimony->title}}</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- partners section --}}

@if ($partners->count()>=1)
<section class="section section-lg pb-0 pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center text-md-left">
            <div class="col-md-4 col-lg-3 mb-4 mb-lg-0">
                <span class="counter counter-alternate display-1 text-dark d-block">{{$partners->count()+3}}</span>
                <h2 class="h5">Partenaires de confiance</h2>
            </div><div class="col-md-4 col-lg-5">
                <p class="lead">Nous sommes fiers de collaborer avec un réseau de partenaires exceptionnels qui partagent notre vision et notre engagement. Chacun apporte une valeur. Nous vous invitons à découvrir ces entreprises remarquables qui nous accompagnent.</p>
            </div>
        </div>
        <div class="row mt-4 mt-lg-6">
            <div class="clients-carousel owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1150px, 0px, 0px); transition: all 0s ease 0s; width: 4140px;">
                        @foreach ($partners as $partner)
                            <div class="owl-item cloned" style="width: 220px; margin-right: 10px;">
                                <div class="item p-4">
                                    <div class="card bg-primary border-light shadow-soft p-4">
                                        <img class="img-fluid image-sm" src="{{$partner->logo}}" alt="elastic brand">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>
</section>
@endif
