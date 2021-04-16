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
    <title>Reset - {{ \App\Helper\Constant::APP_NAME }}</title>
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
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <img src="{{ asset('logo.svg') }}" height="75" alt="">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Reset password</h5>
                                        <div class="nk-block-des">
                                            <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="html/pages/auths/auth-success-v2.html">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">
                                    <a href="{{ route('login') }}"><strong>Return to login</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>