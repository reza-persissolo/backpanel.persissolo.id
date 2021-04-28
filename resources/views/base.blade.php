<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Reza Mandala">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="reza mandala">
    <!-- Fav Icon  -->    
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <!-- Page Title  -->
    <title>{{ $title }} - {{ \App\Helper\Constant::APP_NAME }}</title>
    <!-- StyleSheets  -->
    <link href="{{ asset('assets/css/dashlite.css?ver=2.2.0') }}" rel="stylesheet" type="text/css">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.2.0') }}">
    @yield('css')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link nk-sidebar-logo">
                            <img src="{{ asset('logo.png') }}" height="45" alt="">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>  
                                <li class="nk-menu-item">
                                    <a href="{{ route('news') }}" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                        <span class="nk-menu-text">News</span>
                                    </a>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="#" class="logo-link">
                                    <img src="{{ asset('logo.png') }}" height="45" alt="">
                                </a>
                            </div><!-- .nk-header-brand -->
                            
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                            <em class="icon ni ni-signout"></em>
                                                            <span>Logout</span>
                                                        </a>
                                                    </li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                @yield('content')
                      
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; {{ date('Y') }}. <a href="#" target="_blank">{{ \App\Helper\Constant::APP_NAME }}</a>
                            </div>                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-default.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('assets/js/blockui.min.js') }}"></script>
    <script src="{{ asset('assets/js/pnotify.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet_alert.min.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
    
    <script>
        swal.setDefaults({
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-light'
        });

        function notifWarning(msg) {
            new PNotify({
                title: 'Perhatian !',
                text: msg,
                icon: 'icon-warning22',
                addclass: 'bg-warning border-warning',
                delay: 2000
            });
        }

        function notifSuccess(msg) {
            new PNotify({
                title: 'Berhasil !',
                text: msg,
                icon: 'icon-checkmark3',
                addclass: 'bg-success border-success',
                delay: 2000
            });
        }

        function goBlock(b){
            $.blockUI({
                showOverlay: b,
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }});
        }
    </script>
    @yield("js")
</body>

</html>