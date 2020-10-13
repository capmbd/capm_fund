<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Capm Fund | LogIn</title>
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
            #fgtpass{
                font-size: 12px;
                letter-spacing: 2px;
                margin-top: 11px;
                font-weight: 600;
                color: #fff;
                padding: 0px 0px 0px 20px;
            }

            #fgtpass:hover{
                opacity: 0.7;
            }
        </style>

    </head>
    <body style="background: #fff">
        <section class="login_panel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="web_lgo text-center">
                            <img src="{{ asset('BackEnd/files/assets/images/capmfund.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <div class="auth-box">
                            <div class="card-block card_login">
                                <div class="login_header_apps">
                                    <p class="text-center">Investor Login</p>
                                </div>
                                <p class="text-center" style="font-weight:500; color:#fff;" id="msg"></p>
                                <div id="inv_id_input" style="display: none;">
                                    <input type="text" class="form-control" placeholder="Enter Your User ID" id="invID">
                                    <input style="margin-top:5px" id="id_submit" type="submit" class="btn btn-info btn-sm bt" value="Submit">
                                </div>

                                <div id="inv_code_input" style="display: none;">
                                    <input style="margin-bottom: 3px" type="text" class="form-control" placeholder="Enter 7 Digit Code ..." id="code">

                                    <input style="margin-bottom: 3px" type="text" class="form-control" placeholder="Enter User Id" id="user_id">
                                    <input type="password" class="form-control" placeholder="Enter New Password" id="repass">
                                    <input style="margin-top:5px" id="id_reset" type="submit" class="btn btn-info btn-sm bt" value="Reset">
                                </div>
                                <div class="login_error">
                                    @if($errors->any())
                                        <p class="text-center text-light">{{$errors->first()}}</p>
                                    @endif
                                </div>
                                <form id="inv_login_form" class="md-float-material form-material" action="{{ url('/inv-login') }}" method="POST">

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
                                        <a href="#" id="fgtpass">Forgot Password</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center">
                            <p id="pmsg" style="color: red; margin-top: 20px; font-size: 14px;"></p>
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


        <script type="text/javascript">

                $(document).ready(function(){
                    $("#fgtpass").on('click',function(){
                        document.getElementById("inv_login_form").style.display = "none";
                        document.getElementById("inv_id_input").style.display = "block";
                    });
                });


                $(document).ready(function(){
                    $("#id_submit").on('click',function(){
                        var id = $('#invID').val();
                        if(id == ''){
                            document.getElementById("msg").innerHTML = "Please Insert Your User Id";
                        }else{
                            $.ajax({
                            url: '/inv/pass-id/'+id,
                            type: "GET",
                            data : {"_token":"{{ csrf_token() }}"},

                            success:function(data) {
                                if(data == 'Your Inserted Id Is Not Found'){
                                    document.getElementById("msg").innerHTML=data;
                                }else{
                                    document.getElementById("msg").innerHTML=data;
                                    document.getElementById("inv_id_input").style.display = "none";
                                    document.getElementById("inv_code_input").style.display = "block";
                                    document.getElementById("pmsg").innerHTML = "*** Please Check Your Registered Email For 7 Digit Code";
                                }
                            }
                        });
                    }

                        
                    });
                });

                $(document).ready(function(){
                    $("#id_reset").on('click',function(){
                        var code = $('#code').val();
                        var id = $('#user_id').val();
                        var pass = $('#repass').val();
                        if(code == '' || id == '' || pass == ''){
                            document.getElementById("msg").innerHTML = "Please Enter Your Security Code, User Id & New Password";
                        }else{
                            $.ajax({
                            url: '/inv/pass-code/'+code+'/'+id+'/'+pass,
                            type: "GET",
                            data : {"_token":"{{ csrf_token() }}"},

                            success:function(data) {
                                if(data == 'Enter Correct User Id & Security Code'){
                                    document.getElementById("msg").innerHTML=data;
                                }
                                else if(data == 'Your Password Successfully Changed'){
                                    document.getElementById("msg").innerHTML=data;
                                    document.getElementById("inv_code_input").style.display = "none";
                                    document.getElementById("inv_login_form").style.display = "block";
                                    document.getElementById("pmsg").innerHTML = "";
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