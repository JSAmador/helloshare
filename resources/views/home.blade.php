@extends('layouts.user')


@section('messages')

    <div class="modal-body p-0 js-modalBody">
        <div class="modal-body-scroller">
            <div class="media-list media-list-users list-group js-msgGroup">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="media-body-secondary">
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                        <div class="media-body">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                        <div class="media-body">
                            <strong>Dave Gamache</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="media-body-secondary">
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                        <div class="media-body">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                        <div class="media-body">
                            <strong>Dave Gamache</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                            <div class="media-body-secondary">
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                        <div class="media-body">
                            <strong>Mark Otto</strong> and <strong>3 others</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="media">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                        <div class="media-body">
                            <strong>Dave Gamache</strong>
                            <div class="media-body-secondary">
                                Brunch sustainable placeat vegan bicycle rights yeah…
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="hidden-xs-up m-3 js-conversation">
                <ul class="media-list media-list-conversation">
                    <li class="media media-current-user mb-4">
                        <div class="media-body">
                            <div class="media-body-text">
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Dave Gamache</a> at 4:20PM
                                </small>
                            </div>
                        </div>
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                    </li>

                    <li class="media mb-4">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <div class="media-body-text">
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                            <div class="media-body-text">
                                Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="media-body-text">
                                Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Fat</a> at 4:28PM
                                </small>
                            </div>
                        </div>
                    </li>

                    <li class="media mb-4">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                        <div class="media-body">
                            <div class="media-body-text">
                                Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                            </div>
                            <div class="media-body-text">
                                Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Mark Otto</a> at 4:20PM
                                </small>
                            </div>
                        </div>
                    </li>

                    <li class="media media-current-user mb-4">
                        <div class="media-body">
                            <div class="media-body-text">
                                Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Dave Gamache</a> at 4:20PM
                                </small>
                            </div>
                        </div>
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                    </li>

                    <li class="media mb-4">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <div class="media-body-text">
                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                            </div>
                            <div class="media-body-text">
                                Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                            </div>
                            <div class="media-body-text">
                                Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Fat</a> at 4:28PM
                                </small>
                            </div>
                        </div>
                    </li>

                    <li class="media mb-4">
                        <img class="rounded-circle media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                        <div class="media-body">
                            <div class="media-body-text">
                                Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                            </div>
                            <div class="media-body-text">
                                Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                            </div>
                            <div class="media-footer">
                                <small class="text-muted">
                                    <a href="#">Mark Otto</a> at 4:20PM
                                </small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@stop


@section('content')
    <div class="col-lg-3">
        <div class="card card-profile mb-4">
            <div class="card-header" style="background-image: url(assets/img/iceland.jpg);"></div>
            <div class="card-block text-center">
                <a href="profile/index.html">
                    <img
                            class="card-profile-img"
                            src="{{$user->image->file_path}}">
                </a>

                <h6 class="card-title">
                    <a class="text-inherit" href="profile/index.html">{{$user->name}}</a>
                </h6>

                <p class="mb-4">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>

                <ul class="card-menu">
                    <li class="card-menu-item">
                        <a href="#userModal" class="text-inherit" data-toggle="modal">
                            Friends
                            <h6 class="my-0">12M</h6>
                        </a>
                    </li>

                    <li class="card-menu-item">
                        <a href="#userModal" class="text-inherit" data-toggle="modal">
                            Enemies
                            <h6 class="my-0">1</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card visible-md-block visible-lg-block mb-4">
            <div class="card-block">
                <h6 class="mb-3">My Items</small></h6>
                <ul class="list-unstyled list-spaced">
                    @if(count($user->items)>0)
                        @foreach($user->items as $user_item)
                            <li><a href="items/{{$user_item->id}}">{{$user_item->name}}</a></li>
                        @endforeach
                    @else
                        <p>You don't have any items published</p>
                    @endif
                </ul>
            </div>
        </div>


    </div>

    <div class="col-lg-6">

        <ul class="list-group media-list media-list-stream mb-4">

            @foreach($items as $item)

                <li class="media list-group-item p-4">
                    <img
                            class="media-object d-flex align-self-start mr-3"
                            src="{{$item->user->image->file_path}}">
                    <div class="media-body">

                        <div class="media-heading">
                            <small class="float-right text-muted">{{$item->created_at->diffForHumans()}}</small>
                            <h6>{{$item->user->name}}</h6>
                        </div>

                        <h3>{{$item->name}} </h3>
                        
                        <div class="row">
                            <img src="{{$item->image->file_path}}" alt="" class="img-responsive img-rounded">
                        </div>

                        <div class="row">
                            <p>{{$item->description}}</p>
                        </div>

                        <div class="row">
                            <p>
                                @if(count($item->comments)>1)
                                    {{count($item->comments)}} Users have interacted with this item
                                @else
                                    {{count($item->comments)}} User have interacted with this item
                                @endif
                            </p>
                        </div>

                    </div>

                </li>


            @endforeach
        </ul>
    </div>
    <div class="col-lg-3">
        <div class="alert alert-warning alert-dismissible hidden-md-down" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <a class="alert-link" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking well.
        </div>

        <div class="card mb-4 hidden-md-down">
            <div class="card-block">
                <h6 class="mb-3">Sponsored</h6>
                <div data-grid="images" data-target-height="150">
                    <img class="media-object img-responsive" data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_2.jpg">
                </div>
                <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice. What are you waiting for?</p>
                <button class="btn btn-outline-primary btn-sm">Buy a ticket</button>
            </div>
        </div>

        <div class="card mb-4 hidden-md-down">
            <div class="card-block">
                <h6 class="mb-3">Likes <small>· <a href="#">View All</a></small></h6>
                <ul class="media-list media-list-stream">
                    <li class="media mb-2">
                        <img
                                class="media-object d-flex align-self-start mr-3"
                                src="assets/img/avatar-fat.jpg">
                        <div class="media-body">
                            <strong>Jacob Thornton</strong> @fat
                            <div class="media-body-actions">
                                <button class="btn btn-outline-primary btn-sm">
                                    <span class="icon icon-add-user"></span> Follow</button>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <a class="media-left" href="#">
                            <img
                                    class="media-object d-flex align-self-start mr-3"
                                    src="assets/img/avatar-mdo.png">
                        </a>
                        <div class="media-body">
                            <strong>Mark Otto</strong> @mdo
                            <div class="media-body-actions">
                                <button class="btn btn-outline-primary btn-sm">
                                    <span class="icon icon-add-user"></span> Follow</button></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer">
                Dave really likes these nerds, no one knows why though.
            </div>
        </div>

        <div class="card card-link-list">
            <div class="card-block">
                © 2015 Bootstrap
                <a href="#">About</a>
                <a href="#">Help</a>
                <a href="#">Terms</a>
                <a href="#">Privacy</a>
                <a href="#">Cookies</a>
                <a href="#">Ads </a>
                <a href="#">Info</a>
                <a href="#">Brand</a>
                <a href="#">Blog</a>
                <a href="#">Status</a>
                <a href="#">Apps</a>
                <a href="#">Jobs</a>
                <a href="#">Advertise</a>
            </div>
        </div>
    </div>
@endsection
