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
    <title>Register - {{ \App\Helper\Constant::APP_NAME }}</title>
    <!-- StyleSheets  -->
    <link href="{{ asset('assets/css/dashlite.css?ver=2.2.0') }}" rel="stylesheet" type="text/css">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.2.0') }}">
    <!-- JS -->
    <script src="{{ asset('assets/js/bundle.js?ver=2.2.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=2.2.0') }}"></script>
</head>

<body class="nk-body bg-darkpurple npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <img src="{{ asset('logo.png') }}" height="75" alt="">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>                                
                                    </div>
                                </div>
                                <form action="{{ route('register') }}">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nama</label>
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Username</label>
                                        <input type="text" class="form-control form-control-lg" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-danger btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Sudah punya akun? <a href="{{ route('login') }}"><strong>Login</strong></a>
                                </div>                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</html>