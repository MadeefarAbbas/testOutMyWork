<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Workype | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #3 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="webicosoft-assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="webicosoft-assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="webicosoft-assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- <link href="webicosoft-assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="webicosoft-assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="webicosoft-assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- END THEME LAYOUT STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="webicosoft-assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="webicosoft-assets/webicosoft/webicosoft.css">
</head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-1 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 bs-reset mt-login-5-bsfix">
            <div class="login-bg" style="background-image:url(webicosoft-assets/pages/img/login/bg1.jpg)">
                <img class="login-logo" src="webicosoft-assets/pages/img/logo-big.png" /> </div>
        </div>
        <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
            <div class="login-5-top col-sm-12">
                <nav class="top-nav">
                    <a href="javascript:;">Home</a>
                    <a href="javascript:;">About</a>
                    <a href="javascript:;">Contact</a>
                </nav>
                <a href="javascript:;" id="login-form" class="btn pull-right">Sign in</a>
                <a href="javascript:;" id="register-form" class="btn pull-right">Sign Up</a>
            </div>
            <div class="login-content">
                <h3>Workype’s goal is to provide you and enterprise with the best business platform for new business opportunity and success.</h3>


                
                
                <form method="POST"  class="login-form register" action="{{ route('register') }}">
                        @csrf
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Please enter all required fields. </span>
                    </div>
                   
                    @if($errors->has('first_name') || $errors->has('last_name') || $errors->has('Password'))
                        <div class="alert alert-danger display-hide clearfix" style="display: block;">
                            <button class="close" data-close="alert"></button>
                            @include('flash::message')
<!--                             @if($errors->has('email'))
                              {{$errors->first('email')}}
                            @endif
-->                         @if($errors->has('first_name'))
                                  {{$errors->first('first_name')}}<br>
                            @endif
                            @if($errors->has('last_name'))
                                  {{$errors->first('last_name')}}<br>
                            @endif
                            @if($errors->has('email'))
                                  {{$errors->first('email')}}<br>
                            @endif
                            @if($errors->has('Password'))
                                {{$errors->first('Password')}}
                            @endif
<!--                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}<br/></span>
                            @endforeach-->

                        </div>
                    @endif
                    

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   
<!--                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif-->



                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" autocomplete="off" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required/>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group {{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" autocomplete="off" placeholder="Last Name" name="last_name"  value="{{ old('last_name') }}" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required/>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" autocomplete="off" placeholder="Password" name="Password" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="agree" {{ old('agree') ? 'checked' : '' }}> I agree to the
                                    <a href="javascript:;">Terms of Service </a> &amp;
                                    <a href="javascript:;">Privacy Policy </a>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button class="btn green" type="submit" name="btn_register"> {{ __('Register') }}</button>

                        </div>
                    </div>
                </form>
                 
                <!-- BEGIN LOGIN FORM -->
               
                <form action="{{ route('login') }}" class="log login-form" method="post" style="display:block !important;">
                  @csrf
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Please enter all required fields. </span>
                    </div>

                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Please enter all required fields. </span>
                    </div>
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                    @if($errors->has('email') || $errors->has('password') || $errors->has('invalid_crediential'))
                        <div class="alert alert-danger display-hide clearfix" style="display: block;">
                            <button class="close" data-close="alert"></button>
                            @include('flash::message')
<!--                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}<br/></span>
                            @endforeach-->
                         
                            @if($errors->has('invalid_crediential'))
                              {{$errors->first('invalid_crediential')}}
                            @endif
                            @if($errors->has('email'))
                              {{$errors->first('email')}}
                            @endif
                            
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" value="{{ old('email') }}" required/>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="rem-password">
                                <label class="rememberme mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} /> Remember me
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-8 text-right">
                            <div class="forgot-password">
                                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                            </div>
                            <button class="btn green log-form" type="submit" name="btn_login">Sign In</button>
                        </div>
                    </div>
                </form>
                
                <!-- BEGIN FORGOT PASSWORD FORM -->
                <form class="forget-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3 class="font-green">Forgot Password ?</h3>
                    <p> Enter your e-mail address below to reset your password. </p>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email"  name="email" value="{{ old('email') }}" /> </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                        <button type="submit" name="btn_reset_password" class="btn btn-success uppercase pull-right">Submit</button>
                    </div>
                </form>
                <!-- END FORGOT PASSWORD FORM -->
            </div>
           
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; Workype 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-1 -->
<!--[if lt IE 9]>
<script src="webicosoft-assets/global/plugins/respond.min.js"></script>
<script src="webicosoft-assets/global/plugins/excanvas.min.js"></script>
<script src="webicosoft-assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="webicosoft-assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="webicosoft-assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="webicosoft-assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="webicosoft-assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- <script src="webicosoft-assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
  <script src="webicosoft-assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script> -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="webicosoft-assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="webicosoft-assets/webicosoft/webicosoft.js" type="text/javascript"></script>
<script src="webicosoft-assets/webicosoft/custom.js" type="text/javascript"></script>
</body>

</html>