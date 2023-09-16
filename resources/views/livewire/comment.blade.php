{{-- <form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter name" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputbody">Body</label>
        <textarea class="form-control" id="exampleInputbody" placeholder="Enter Body" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save Contact</button>
</form> --}}


<div class="section section-md bg-primary text-black pt-0 line-bottom-light mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div>
                        <label class="h5 mb-4" for="exampleFormControlTextarea1">
                            <span class="badge badge-md badge-dark text-uppercase mr-2">23</span> Commentaires
                        </label>
                        <form wire:submit.prevent="submit">
                            <div class="form-group" {{isset($_COOKIE['OurUserName']) ? 'hidden' : '' }}>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model="name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group" {{isset($_COOKIE['OurUserEmail']) ? 'hidden' : '' }}>
                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleInputcontent" placeholder="Enter content" wire:model="content" rows="6"></textarea>
                                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        <div class="d-flex justify-content-between mt-3 mb-5">
                            <small class="font-weight-light text-dark"><span id="charactersRemaining">1000</span> characters remaining</small>
                            <button class="btn btn-primary">Envoyer</button>
                        </div>
                        </form>

                        <div class="dropdown">
                            <div class="btn-group mr-2 mb-2">
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Plus pertinents <span class="fas fa-angle-down dropdown-arrow"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">Tous les commentaires</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="">Plus pertinents</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            {{-- {{ $comments->links() }} --}}

                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <a href="http://"></a>
                                <button class="btn btn-pill btn-facebook button-comment" type="button">
                                    <span class="mr-1"><span class="fas fa-angle-up"></span></span>
                                    Précedents
                                </button>
                            </div>
                        </div>

                        <div class="mt-3" id="extraContent" style="">
                            @foreach ($comments as $comment)
                            <div>
                                <div class="card bg-primary shadow-soft border-light p-4 mb-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <span class="font-small">
                                            <a href="#">
                                                <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-2.jpg" alt="Neil avatar">
                                                <span class="font-weight-bold">{{$comment->name}}</span>
                                            </a>
                                            <span class="ml-2">{{$comment->getDate()}}</span>
                                        </span>
                                        <div>
                                            <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                        </div>
                                    </div>
                                    <p class="m-0">{{$comment->content}}</p>
                                    <div class="mt-4 mb-3 d-flex justify-content-between">
                                        <div>
                                            <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                            <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                            <span class="font-small font-weight-light">4 likes</span>
                                        </div>
                                        <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="#replyContainer{{$comment->id}}" aria-expanded="false" aria-controls="replyContainer{{$comment->id}}">
                                            <span class="fas fa-reply mr-2"></span> Reply
                                        </a>
                                    </div>
                                    <div class="collapse" id="replyContainer{{$comment->id}}">
                                        <label class="mb-4" for="exampleFormControlTextarea13">Replay</label>
                                        <form wire:submit.prevent="saveReplay({{$comment->id}})">
                                            <div class="form-group" {{isset($_COOKIE['OurUserName']) ? 'hidden' : '' }}>
                                                <input type="text" class="form-control" id="exampleInputNameReplay" placeholder="Enter nameReplay" wire:model.defer="nameReplay">
                                                @error('nameReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group" {{isset($_COOKIE['OurUserEmail']) ? 'hidden' : '' }}>
                                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter emailReplay" wire:model.defer="emailReplay">
                                                @error('emailReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleInputbody" placeholder="Enter Content" wire:model.defer="contentReplay" rows="6" maxlength="500"></textarea>
                                                @error('contentReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small class="font-weight-light"><span id="charactersRemainingReply4">1000</span> characters remaining</small>
                                                <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @foreach ($comment->comments as $item)
                                <div class="card bg-primary shadow-soft rounded border-light p-4 ml-5 mb-4">
                                    <div class="d-flex justify-content-between mb-4">
                                        <span class="font-small">
                                            <a href="#">
                                                <img class="avatar-sm img-fluid rounded-circle mr-2" src="../../assets/img/team/profile-picture-5.jpg" alt="Jose avatar">
                                                <span class="font-weight-bold">{{$item->name}}</span>
                                            </a><span class="ml-2">{{$item->getDate()}}</span>
                                        </span>
                                        <div>
                                            <button class="btn btn-primary text-danger" aria-label="report button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report comment"><span class="far fa-flag"></span></button>
                                        </div>
                                    </div>
                                    <p class="m-0">{{$item->content}}</p>
                                    <div class="mt-4 mb-3 d-flex justify-content-between">
                                        <div>
                                            <span class="far fa-thumbs-up text-action text-success mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like comment"></span>
                                            <span class="far fa-thumbs-down text-action text-danger mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dislike comment"></span>
                                            <span class="font-small font-weight-light">2 likes</span>
                                        </div>
                                        <a class="text-action font-weight-light font-small" data-toggle="collapse" role="button" href="{{'#replyContainer'.$item->id}}" aria-expanded="false" aria-controls="replyContainer5"><span class="fas fa-reply mr-2"></span> Reply</a>
                                    </div>
                                    <div class="collapse" id="{{'replyContainer'.$item->id}}">
                                        <label class="mb-4" for="exampleFormControlTextarea14">Replay</label>
                                        <form wire:submit.prevent="saveReplay({{$comment->id}})">
                                            <div class="form-group" {{isset($_COOKIE['OurUserName']) ? 'hidden' : '' }}>
                                                <input type="text" class="form-control" id="exampleInputNameReplay" placeholder="Enter nameReplay" wire:model.defer="nameReplay">
                                                @error('nameReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group" {{isset($_COOKIE['OurUserEmail']) ? 'hidden' : '' }}>
                                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter emailReplay" wire:model.defer="emailReplay">
                                                @error('emailReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleInputbody" placeholder="Enter Content" wire:model.defer="contentReplay" rows="6" maxlength="500"></textarea>
                                                @error('contentReplay') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small class="font-weight-light"><span id="charactersRemainingReply4">1000</span> characters remaining</small>
                                                <button class="btn btn-primary btn-sm animate-up-2">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach

                        </div>
                        {{ $comments->links() }}
                        {{-- <div class="mt-5 text-center">
                            <button id="loadOnClick" class="btn btn-primary btn-loading-overlay mr-2 mb-2 btn-loading" disabled="disabled" style="display: none;">
                                <span class="spinner">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </span>
                                <span class="ml-1 btn-inner-text">Load more comments</span>
                            </button>
                            <p id="allLoadedText" style="">That's all, Sparky!</p>
                        </div> --}}
                        <div class="row">
                            <div class="col text-center">
                                <button class="btn btn-pill btn-facebook button-comment" type="button">
                                    <span class="mr-1"><span class="fas fa-angle-down"></span></span>
                                    Suivents
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
