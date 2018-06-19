<template>
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="#">Tripyuk</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">{{$auth.user().full_name}}<i class="fa fa-caret-down"></i></span><img src="/backoffice/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            <div class="pull-left"><img src="/backoffice/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
                            <div class="pull-right"><h5>Howdy, {{$auth.user().full_name}}</h5></div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
                            <li><a href="#">Change Password <i class="pull-right fa fa-cog"></i></a></li>
                            <li><a href="#">Help <i class="pull-right fa fa-question-circle"></i></a></li>
                            <li class="divider"></li>
                            <li><a href="#" class="text-right" @click.prevent="$auth.logout()">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </header>
</template>