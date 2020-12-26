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

        <style>
            #msg {
                    font-size: 14px;
                    color: #f35626;
                    letter-spacing: 1px;
                    background-image: -webkit-linear-gradient(92deg, maroon, red, yellow);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    -webkit-animation: hue 1s infinite linear;
                }

                @-webkit-keyframes hue {
                    from {
                      -webkit-filter: hue-rotate(0deg);
                    }

                    to {
                      -webkit-filter: hue-rotate(360deg);
                    }
                }
        </style>
    </head>
    <body style="background: #fff">
        <section class="login_panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-d">
                        <div class="login_img">
                            <a href="http://www.capmbd.com/" target="blank"><img src=" {{ asset('BackEnd/files/assets/images/capmlogo.png') }} " alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        @if ($success = Session::get('message'))
                            <div class="alert alert-primary alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{$success}}</strong>
                            </div>
                        @endif
                        <div class="auth-box card login_card">
                            <div class="card-block">

                                <div class="login_header">
                                    <p id="heading" class="text-center">Admin Login</p>
                                    <p class="my_color_one text-center" id="msg"></p><br>
                                </div>
                                <form style="display: none;" id="reset_form" class="md-float-material form-material">
                                    <div class="form-group form-primary">
                                        <input type="hidden" id="re_email">
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="number" id="re_code" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Enter 6 Digits Code</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" id="re_pass" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Enter New Password</label>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-3 col-ms-3 admin_login">
                                            <a href="#" id="reset_btn" class="btn my_bg_one text-center text-white">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                <form id="main_form" class="md-float-material form-material" style="display: none;">
                                    <div class="form-group form-primary">
                                        <input type="email" id="email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Enter Your Email</label>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-3 col-ms-3 admin_login">
                                            <a href="#" id="forgot" class="btn my_bg_one btn-sm text-center text-white">Submit</a>
                                        </div>
                                    </div>
                                </form>

                                <form id="loginform" class="md-float-material form-material" action="{{ route('login') }}" method="POST">

                                    @csrf

                                    <div class="form-group form-primary">
                                        <input type="email" name="email" class="form-control" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Your Email Address</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-3 col-ms-3 admin_login">
                                            <input type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" value="LogIn">
                                        </div>

                                         <div class="col-md-9 col-ms-9 forg_pass">
                                            <a href="#" id="fgt">Forgot Password</a>
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

        <script>

            $(document).ready(function(){
                $("#fgt").on('click',function(){
                    document.getElementById("loginform").style.display = "none";
                    document.getElementById("main_form").style.display = "block";
                    document.getElementById("heading").innerHTML = "Reset Your Password";
                });
            });

            $(document).ready(function(){
                $("#forgot").on('click',function(){
                    var email = $('#email').val();
                    if(email == ''){
                        document.getElementById("msg").innerHTML = "Please Enter Your Email";
                    }else{
                        $.ajax({
                            url: '/emp_forg/'+email,
                            type: "GET",
                            data : {"_token":"{{ csrf_token() }}"},

                            success:function(data) {
                                if(data == 'Sorry!!! Your Entered Email Is Not Registered'){
                                    document.getElementById("msg").innerHTML=data;
                                }else{
                                    document.getElementById("msg").innerHTML=data;
                                    document.getElementById("main_form").style.display = "none";
                                    document.getElementById("reset_form").style.display = "block";
                                    document.getElementById("heading").innerHTML = "Reset Your Password";
                                    document.getElementById("re_email").value = email;
                                }
                            }
                        });
                    }

                });
            });

            $(document).ready(function(){
                $("#reset_btn").on('click',function(){
                    var code = $('#re_code').val();
                    var email = $('#re_email').val();
                    var pass = $('#re_pass').val();
                    if(code == '' || email == '' || pass == ''){
                        document.getElementById("msg").innerHTML = "Please Enter Your Security Code & New Password";
                    }else{
                        $.ajax({
                            url: '/emp_pass_res/'+code+'/'+email+'/'+pass,
                            type: "GET",
                            data : {"_token":"{{ csrf_token() }}"},

                            success:function(data) {
                                if(data == 'Enter Correct Security Code'){
                                    document.getElementById("msg").innerHTML=data;
                                }
                                else if(data == 'Your Password Successfully Changed'){
                                    document.getElementById("msg").innerHTML=data;
                                    document.getElementById("reset_form").style.display = "none";
                                    document.getElementById("loginform").style.display = "block";
                                    document.getElementById("heading").innerHTML = "Admin Login";
                                    
                                }else{
                                    document.getElementById("msg").innerHTML='Error';
                                }
                            }
                        });
                    }


                });
            });

        </script>
    </body>
</html>