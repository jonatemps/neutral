<div class="row">
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        {{-- <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
            <span class="far fa-laugh-beam"></span>
            <span aria-hidden="true" class="far fa-thumbs-up"></span>
        </div> --}}
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-eye"></span>
        </button>
        <span class="counter h1 text-interaction d-block">{{$CountVue}}</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button wire:click="like" class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-thumbs-up"></span>
        </button>
        <span class="counter h1 text-interaction d-block">{{$countLike}}</span>
        {{-- <span class="h5">Liked</span> --}}
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button wire:click="dislike" class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-thumbs-down"></span>
        </button>
        <span class="counter h1 text-interaction d-block">{{$countDislike}}</span>
        {{-- <span class="h5">Disliked</span> --}}
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-3 col-sm-6 col-lg-3 mb-lg-0 text-center">
        <button class="icon btn btn-icon-only btn-primary icon-interaction mb-2" type="button" aria-label="up button" title="up button">
            <span aria-hidden="true" class="far fa-comments"></span>
        </button>
        <span class="counter h1 text-interaction d-block">{{$CountComment}}</span>
        {{-- <span class="h5">Comments</span> --}}
    </div>
    <!--End of Counter-->
</div>
