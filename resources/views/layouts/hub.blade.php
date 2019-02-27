<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SimpleHub2</title>

    <link rel="stylesheet" href="{{ url('css/' . (env('APP_ENV') == 'local' ? 'hub.css' : 'hub.min.css')) }}">

</head>
<body class="theme">

    <div class="header-wrapper">

        <nav class="navbar is-white">

            <div class="navbar-brand">
                <div class="navbar-burger left">
                    <i class="fal fa-bars fa-lg"></i>
                </div>
                <a class="navbar-item is-size-4" href="{{ url('hub') }}">
                    <i class="fa fa-claw-marks has-text-primary has-mr-10"></i> SimpleHub
                </a>
                <div class="navbar-burger right" data-target="top_navbar">
                    <i class="fal fa-bars fa-lg"></i>
                </div>
            </div>

            <div class="navbar-menu" id="top_navbar">

                <div class="navbar-start">

                    <a class="navbar-item toggle-sidebar is-hidden-touch" href="#">
                        <i class="fal fa-bars fa-lg"></i>
                    </a>
                    <div class="navbar-item">
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input is-hovered" type="text" placeholder="global search...">
                                <span class="icon is-small is-left">
                                    <i class="fal fa-search"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-clickable icon-dropdown">
                        <a class="navbar-link" href="#">
                            <i class="fal fa-bell fa-lg"></i> <span class="is-hidden-desktop">Notifications</span>
                        </a>
                        <div class="navbar-dropdown animated fadeInDown">
                            <div class="navbar-item">
                                show latest notifications
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-clickable icon-dropdown">
                        <a class="navbar-link" href="#">
                            <i class="fal fa-heart fa-lg"></i> <span class="is-hidden-desktop">Favorite Pages</span>
                        </a>
                        <div class="navbar-dropdown animated fadeInDown">
                            <div class="navbar-item">
                                show favorited/saved pages here
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-clickable icon-dropdown">
                        <a class="navbar-link" href="#">
                            <i class="fal fa-sticky-note fa-lg"></i> <span class="is-hidden-desktop">Sticky Notes</span>
                        </a>
                        <div class="navbar-dropdown animated fadeInDown">
                            <div class="navbar-item">
                                show the sticky note form
                            </div>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    {{--<div class="navbar-item has-dropdown is-clickable icon-dropdown">
                        <a class="navbar-link is-arrowless" href="#">
                            <i class="fal fa-question-circle fa-lg"></i>
                        </a>
                        <div class="navbar-dropdown animated fadeInDown is-right">
                            <div class="navbar-item">
                                show the feedback/help form
                            </div>
                        </div>
                    </div>--}}
                    <div class="navbar-item has-dropdown is-clickable role-menu">
                        <a class="navbar-link is-arrowless">
                            <button class="button is-small is-secondary is-outlined is-hidden-touch">Role: Read Only {!! \Request::is('hub') ? '<small class="has-text-danger has-ml-4">(SuperAdmin)</small>' : '' !!}</button>
                            <span class="is-hidden-desktop">
                                Switch Role
                            </span>
                        </a>
                        <div class="navbar-dropdown animated fadeInDown is-right">
                            <div class="navbar-item has-text-primary is-hidden-touch">
                                <i class="fal fa-user-lock fa-lg has-mr-10"></i> Switch Role
                            </div>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Read Only <span class="is-hidden-desktop has-text-grey-light">(active)</span>
                            </a>
                            <a class="navbar-item">
                                Master User
                            </a>
                            @if ( \Request::is('hub') )
                                <hr class="navbar-divider">
                                <a class="navbar-item has-text-danger">
                                    Disable SuperAdmin
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-clickable user-menu">
                        <a class="navbar-link">
                            Welcome, John <img src="https://keenthemes.com/metronic/preview/assets/app/media/img/users/user4.jpg" alt="">
                        </a>
                        <div class="navbar-dropdown animated fadeInDown is-right">
                            <a class="navbar-item">
                                My Account
                            </a>
                            <a class="navbar-item">
                                System Settings
                            </a>
                            <a class="navbar-item">
                                Time Clock
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item has-text-danger">
                                <i class="fal fa-power-off fa-lg has-mr-10"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>

        <div class="help-wrapper">
            <a href="#">
                <i class="fal fa-question-circle"></i>
            </a>
        </div>
    </div>

    <div class="columns sidebar-content-columns">
        <div class="column is-narrow is-paddingless">

            <div class="sidebar-wrapper">

                <ul class="sidebar-menu">
                    <li class="has-submenu">
                        <a href="#">
                            <i class="fa fa-fw fa-newspaper"></i> <span class="animated fadeInLeft">Articles</span>
                        </a>
                        <ul class="submenu animated fadeInLeft">
                            <li>
                                <a href="#">Overview</a>
                            </li>
                            <li>
                                <a href="#">List Articles</a>
                            </li>
                            <li>
                                <a href="#">Article Groups</a>
                            </li>
                            <li>
                                <a href="#">Advanced</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu active open">
                        <a href="#">
                            <i class="fa fa-fw fa-address-book"></i> <span class="animated fadeInLeft">Contacts</span>
                        </a>
                        <ul class="submenu animated fadeInLeft">
                            <li>
                                <a href="#">Overview</a>
                            </li>
                            <li class="active">
                                <a href="#">List Contacts</a>
                            </li>
                            <li>
                                <a href="#">Contact Groups</a>
                            </li>
                            <li>
                                <a href="#">Advanced</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('hub/forms') }}">
                            <i class="fa fa-fw fa-file-alt"></i> <span class="animated fadeInLeft">Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('hub/mail') }}">
                            <i class="fa fa-fw fa-envelope"></i> <span class="animated fadeInLeft">Mail</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">
                            <i class="fa fa-fw fa-building"></i> <span class="animated fadeInLeft">Properties</span>
                        </a>
                        <ul class="submenu animated fadeInLeft">
                            <li>
                                <a href="#">Overview</a>
                            </li>
                            <li>
                                <a href="#">List Properties</a>
                            </li>
                            <li>
                                <a href="#">Property Groups</a>
                            </li>
                            <li>
                                <a href="#">Advanced</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('hub/thirdparty') }}">
                            <i class="fa fa-fw fa-globe-americas"></i> <span class="animated fadeInLeft">Third Party Apps</span>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
        <div class="column is-paddingless">

            <div class="content-wrapper">

                @yield('content')

            </div>

        </div>
    </div>

    <div class="modal help-modal">
        <div class="modal-background"></div>
        <div class="modal-content animated fadeInDown">
            <div class="box">
                Show our help form here!
                <br>
                Maybe even display some pre-defined help content based on the page they are on?
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    {!! Js::config() !!}
    <script src="{{ url('js/' . (env('APP_ENV') == 'local' ? 'vendor.js' : 'vendor.min.js')) }}"></script>
    <script src="{{ url('js/' . (env('APP_ENV') == 'local' ? 'hub.js' : 'hub.min.js')) }}"></script>
    @stack('scripts')
</body>
</html>