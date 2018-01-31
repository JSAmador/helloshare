


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>

        Home &middot;

    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>


    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>

</head>


<body class="with-top-navbar">



<div class="growl" id="app-growl"></div>

<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-primary app-navbar">
    <button
            class="navbar-toggler navbar-toggler-right hidden-md-up"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="index.html">
        <img src="assets/img/brand-white.png" alt="brand">
    </a>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile/index.html">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" href="#msgModal">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="docs/index.html">Docs</a>
            </li>

            <li class="nav-item hidden-md-up">
                <a class="nav-link" href="notifications/index.html">Notifications</a>
            </li>
            <li class="nav-item hidden-md-up">
                <a class="nav-link" data-action="growl">Growl</a>
            </li>
            <li class="nav-item hidden-md-up">
                <a class="nav-link" href="login/index.html">Logout</a>
            </li>

        </ul>

        <form class="form-inline float-right hidden-sm-down">
            <input class="form-control" type="text" data-action="grow" placeholder="Search">
        </form>

        <ul id="#js-popoverContent" class="nav navbar-nav float-right mr-0 hidden-sm-down">
            <li class="nav-item">
                <a class="app-notifications nav-link" href="notifications/index.html">
                    <span class="icon icon-bell"></span>
                </a>
            </li>
            <li class="nav-item ml-2">
                <button class="btn btn-default navbar-btn navbar-btn-avatar" data-toggle="popover">
                    <img class="rounded-circle" src="{{$user->image->file_path}}">
                </button>
            </li>
        </ul>

        <ul class="nav navbar-nav hidden-xs-up" id="js-popoverContent">
            <li class="nav-item"><a class="nav-link" href="#" data-action="growl">Growl</a></li>
            <li class="nav-item"><a class="nav-link" href="login/index.html">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Messages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            @yield('messages')
        </div>
    </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body p-0">
                <div class="modal-body-scroller">
                    <ul class="media-list media-list-users list-group">
                        <li class="list-group-item">
                            <div class="media w-100">
                                <img class="media-object d-flex align-self-start mr-3" src="assets/img/avatar-fat.jpg">
                                <div class="media-body">
                                    <button class="btn btn-secondary btn-sm float-right">
                                        <span class="glyphicon glyphicon-user"></span> Follow
                                    </button>
                                    <strong>Jacob Thornton</strong>
                                    <p>@fat - San Francisco</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media w-100">
                                <img class="media-object d-flex align-self-start mr-3" src="assets/img/avatar-dhg.png">
                                <div class="media-body">
                                    <button class="btn btn-secondary btn-sm float-right">
                                        <span class="glyphicon glyphicon-user"></span> Follow
                                    </button>
                                    <strong>Dave Gamache</strong>
                                    <p>@dhg - Palo Alto</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media w-100">
                                <img class="media-object d-flex align-self-start mr-3" src="assets/img/avatar-mdo.png">
                                <div class="media-body">
                                    <button class="btn btn-secondary btn-sm float-right">
                                        <span class="glyphicon glyphicon-user"></span> Follow
                                    </button>
                                    <strong>Mark Otto</strong>
                                    <p>@mdo - San Francisco</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container pt-4">
    <div class="row">
        @yield('content')
    </div>
</div>

<script src="{{asset('js/libs.js')}}"></script>
<script>
    // execute/clear BS loaders for docs
    $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
            while(BS.loader.length){(BS.loader.pop())()}
        }
    })
</script>
</body>
</html>

