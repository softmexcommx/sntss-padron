<!DOCTYPE html>
<html lang="en">

<head>
    <title>CCyC Quintana Roo</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="{{ asset('dashboard/images/favicon.ico') }}" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/bower_components/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('dashboard/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/icon/icofont/css/icofont.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/style.css') }}">
  </head>

  <body themebg-pattern="theme1">
  

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material"  name="loginForm" method="POST"
                        action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="text-center">
                                <img style="width: 250px" src="{{ asset('images/logos/solologos.png') }}" alt="">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Iniciar sesión</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" 
                                        value="{{ old('email') }}" required autofocus>
                                        <span class="form-bar"></span>
                                        <label class="float-label">Email</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Contraseña</label>
                                    </div>

                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show text-justify" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {!! session('error') !!}
                                    </div>
                                    @endif
            
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible fade show text-justify" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                    
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Ingresar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left"><a href="{{ route('web.home') }}"><b>Regresar al sitio</b></a></p>
                                        </div>
                                        <div class="col-md-2">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="asset/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="asset/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="asset/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="asset/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="asset/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('dashboard/bower_components/jquery/js/jquery.min.js') }}"></script>    
     <script type="text/javascript" src="{{ asset('dashboard/bower_components/jquery-ui/js/jquery-ui.min.js') }} "></script>   
       <script type="text/javascript" src="{{ asset('dashboard/bower_components/popper.js/js/popper.min.js') }}"></script>    
        <script type="text/javascript" src="{{ asset('dashboard/bower_components/bootstrap/js/bootstrap.min.js') }} "></script>
<!-- waves js -->
<script src="{{ asset('dashboard/assets/pages/waves/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('dashboard/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }} "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('dashboard/assets/js/SmoothScroll.js') }}"></script>     
    <script src="{{ asset('dashboard/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('dashboard/assets/js/common-pages.js') }}"></script>
</body>

</html>
