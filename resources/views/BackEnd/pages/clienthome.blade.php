<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Unit Fund | Client Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <link rel="icon" href=" {{ asset('BackEnd/files/assets/images/capm.ico') }} " type="image/x-icon">
        <link href=" {{ asset('ClientEnd/css/bootstrap.css') }} " type="text/css" rel="stylesheet" media="all">
        <link href=" {{ asset('ClientEnd/css/style.css') }} " type="text/css" rel="stylesheet" media="all">
        <link href=" {{ asset('ClientEnd/css/fontawesome-all.min.css') }} " rel="stylesheet">
        <link href=" {{ asset('ClientEnd/css/minimal-slider.css') }} " rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href=" {{ asset('ClientEnd/css/flexslider.css') }} " type="text/css" media="screen" property="" />
        <link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
        <style>
            #fgtpass{
                font-size: 12px;
                letter-spacing: 2px;
                font-weight: 600;
                color: #0d6775;
            }

            #fgtpass:hover{
                color: #17a2b8;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                <a class="navbar-brand text-white logo" href=" {{ url('/') }} ">
                    <img src="{{ asset('BackEnd/files/assets/images/logo.png') }}" alt="">
                </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href=" {{ url('http://www.capmbd.com/') }} ">Home
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#" data-toggle="modal" aria-pressed="false" data-target="#loginModal">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="slide-window">
            <div class="slide-wrapper" style="width:400%;">
                <div class="slide slide"></div>
                <div class="slide slide2"></div>
                <div class="slide slide3"></div>
                <div class="slide slide4"></div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <section class="case_w3ls  py-lg-5">
            @if($errors->any())
                <p class="text-center text-danger insert_message"> <b> {{$errors->first()}} </b> </p>
            @endif
            <p class="text-center text-danger insert_message"> <b> {{Session::get('message')}} </b> </p>
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
                            <div class="img_text_w3ls">
                                <h4>CAPM BDBL Mutual Fund 01</h4>
                                <span> </span>
                                <p class="text-justify">CAPM BDBL Mutual Fund 01 is the foremost closed- end mutual fund of CAPM Company Ltd. The asset is intended to give financial specialists an above-normal level of current wage. <a class="mf" href=" {{ url('http://www.capmbd.com/home/mutual/mf') }} " target="blank">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-lg-0 mt-4">
                        <div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
                            <div class="img_text_w3ls">
                                <h4>CAPM Unit Fund</h4>
                                <span> </span>
                                <p class="text-justify">"CAPM Unit Fund" is the first time ever digitized open-end mutual fund in Bangladesh designed to provide capital appreciation benefits with regular dividend income opportunities. <a class="mf" href=" {{ url('http://www.capmbd.com/home/mutual/cuf') }} " target="blank">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-md-0 mt-4">
                        <div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
                            <div class="img_text_w3ls">
                                <h4>CAPM IBBL Islamic Mutual Fund</h4>
                                <span> </span>
                                <p class="text-justify">CAPM IBBL Islamic Mutual Fund is the first Islamic closed end Mutual Fund of CAPM Company Limited. This fund is sponsored by Islami Bank Bangladesh Limited (IBBL), the largest commercial bank. <a class="mf" href=" {{ url('http://www.capmbd.com/home/mutual/icuf') }} " target="blank">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-sm-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-8 col-sm-12 fv5-contact">
                        <h2 class="mb-4">Contact Us</h2>
                        <div class="fv3-contact mt-3">
                            <span class="fas fa-map-marker-alt mr-2"></span>
                            <p>Safura Tower (5th Floor),20 Kemal Ataturk Avenue Banani C/A, Dhaka - 1213</p>
                        </div>
                        <div class="fv3-contact mt-3">
                            <span class="fas fa-tty mr-2"></span>
                            <p>88-02-9856269</p>
                        </div>
                        <div class="fv3-contact mt-3">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>01847054877</p>
                        </div>
                        <div class="fv3-contact mt-3">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>01847054888</p>
                        </div>
                        <div class="fv3-contact mt-3">
                            <span class="fas fa-envelope mr-2"></span>
                            <a href="mailto:tauf@capmbd.com" class="text-mail">tauf@capmbd.com</a>
                        </div>
                    </div>
                </div>
                <div class="cpy-right text-center  pt-3">
                    
                    <div class="copyrightbottom">
                        <p class="text-footer">© <?php echo date("Y"); ?> CAPM Company Limited. All rights reserved. Developed by: CAPM ICT</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <p class="text-center modal_head">Login Panel</p>
                    <div class="modal-body">
                        <ul class="nav nav-tabs small justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active btn btn-info" href="#inv" role="tab" data-toggle="tab">Investor LogIn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-info" href="#ta" role="tab" data-toggle="tab">TA LogIn</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="inv">
                                <p class="form-titel text-center">Investor LogIn</p>
                                <p style="font-weight:500; color:#0f798a;" id="msg"></p>
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

                                <form id="inv_login_form" action="{{ url('/inv-login') }}" method="POST">

                                    @csrf
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label lbl">User ID</label>
                                        <input type="text" class="form-control" placeholder="User ID" name="regno" id="regno" minlength="12" maxlength="12" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label lbl">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="right-w3l">
                                        <input type="submit" class="btn btn-info btn-sm" value="LogIn">
                                        <a href="#" id="fgtpass">Forgot Password</a>
                                        <input type="submit" value="x" class="close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ta">
                                <p class="form-titel text-center">TA LogIn</p>
                                <form class="md-float-material form-material" action="{{ url('/ta-login/attempt') }}" method="POST">

                                    @csrf

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label lbl">User ID</label>
                                        <input type="text" class="form-control" placeholder="User ID" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label lbl">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="right-w3l">
                                        <input type="submit" class="btn btn-info btn-sm bt" value="LogIn">
                                        <input type="submit" value="x" class="close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                    </div>
                                </form>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src=" {{ asset('ClientEnd/js/jquery-2.2.3.min.js') }} "></script>
            <script src=" {{ asset('ClientEnd/js/minimal-slider.js') }} "></script>
            <link rel="stylesheet" href=" {{ asset('ClientEnd/css/jquery-ui.css') }} " />
            <script src=" {{ asset('ClientEnd/js/jquery-ui.js') }} "></script>
            <script>
            $(function() {
            $( "#datepicker" ).datepicker();
            });
            </script>
            <script defer src=" {{ asset('ClientEnd/js/jquery.flexslider.js') }} "></script>
            <script>
            $(window).load(function () {
            $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
            $('body').removeClass('loading');
            }
            });
            });
            </script>
            <script>
            window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
            }
            function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
            document.getElementById("password2").setCustomValidity('');
            }
            </script>
            <script src=" {{ asset('ClientEnd/js/move-top.js') }} "></script>
            <script src=" {{ asset('ClientEnd/js/easing.js') }} "></script>
            <script>
            jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
            scrollTop: $(this.hash).offset().top
            }, 1000);
            });
            });
            </script>
            <script>
            $(document).ready(function () {
            $().UItoTop({
            easingType: 'easeOutQuart'
            });
            });
            </script>
            <script src=" {{ asset('ClientEnd/js/SmoothScroll.min.js') }} "></script>
            <script src=" {{ asset('ClientEnd/js/bootstrap.js') }} "></script>

            <script type="text/javascript">
                window.onload = function() {
                    var d = new Date();
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";
                    var n = weekday[d.getDay()];
                                    
                    if(n == "Thursday" || n == "Friday" || n == "Saturday"){
                        document.getElementById("ta").innerHTML = 'To Day is Transaction Holiday';
                        document.getElementById("ta").style.color = 'red';
                        document.getElementById("ta").style.fontSize  = '14px';
                        document.getElementById("ta").style.fontWeight = "700";
                    }
                                    
                };
                /*document.getElementById("ta").innerHTML = 'Please be informed that CAPM Company Limited will be declared the Transaction Holiday of CAPM Unit Fund from 1st July, 2020 to 7th July, 2020 due to Book closure period of CAPM Unit Fund. Also, the transaction of CAPM Unit Fund will reopen from 8th July, 2020 as per regular scheduled time.';
                document.getElementById("ta").style.color = 'red';
                document.getElementById("ta").style.fontSize  = '14px';
                document.getElementById("ta").style.fontWeight = "700";
                document.getElementById("ta").style.textAlign = "justify";*/
            </script>

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
