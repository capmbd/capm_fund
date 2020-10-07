<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit Fund | LogIn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" href=" {{ asset('BackEnd/files/assets/images/capm.ico') }} " type="image/x-icon">
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery/js/jquery.min.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/pace.min.js') }} "></script>
        <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/bower_components/bootstrap/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/icon/feather/css/feather.css') }} ">
        <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/font-awesome-n.min.css') }} ">
        <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/style.css') }} ">
        <link rel="stylesheet" type="text/css" href=" {{ asset('BackEnd/files/assets/css/pages.css') }} ">
    </head>
    <body style="background: #01646e">
        <section class="login_panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 offset-md-3 offset-sm-3">
                        <div class="auth-box">
                            <div class="card-block">

                            	<div class="aps_logo text-center">
                            		<img class="img-fluid w-25" src="{{ asset('BackEnd/files/assets/images/apps.png') }}" alt="">
                        		</div>

                                <div class="login_header_apps">
                                    <p class="text-center">Investor Login</p>
                                </div>
                                <div class="login_error">
                                    @if($errors->any())
                                        <p class="text-center text-light">{{$errors->first()}}</p>
                                    @endif
                                </div>
                                <form class="md-float-material form-material" action="{{ url('/inv-login') }}" method="POST">

                                    @csrf

                                    <div class="form-group form-primary aps_form">
                                        <input type="text" name="regno" minlength="12" maxlength="12" class="form-control" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">User ID</label>
                                    </div>
                                    <div class="form-group form-primary aps_form">
                                        <input type="password" name="password" class="form-control" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-3 col-ms-3 inv_login">
                                            <input type="submit" class="btn btn-md my_bg_one btn-block waves-effect waves-light text-center m-b-20" value="LogIn">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery-ui/js/jquery-ui.min.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/popper.js/js/popper.min.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/bootstrap/js/bootstrap.min.js') }} "></script>
        <script src=" {{ asset('BackEnd/files/assets/pages/waves/js/waves.min.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/modernizr/js/modernizr.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/modernizr/js/css-scrollbars.js') }} "></script>
        <script src=" {{ asset('BackEnd/files/assets/js/pcoded.min.js') }} "></script>
        <script src=" {{ asset('BackEnd/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
        <script src=" {{ asset('BackEnd/files/assets/js/vertical/vertical-layout.min.js') }} "></script>
        <script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/script.js') }} "></script>
    </body>
</html>