<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Khas Tech</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 

$(document).ready(function(){
    $("#flipforjobs").click(function(){
		$("#flipforjobs").hide();
        $("#panelforjobs").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#flipforjobsopen").click(function(){
		$("#flipforjobs").show();
        $("#panelforjobs").slideToggle("slow");
    });
});


</script>

<style> 
#panel, #flip, #panelforjobs, #flipforjobs {
    padding: 5px;
    text-align: center;
   
   
}

#panel,#panelforjobs,#inner {
    padding: 50px;
    display: none;
}

</style>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
		.navbar-default {
    background-color: #DFF0D8;
    border-color: #E7E7E7;
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default" >
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar --> </br> 
                <ul class="nav navbar-nav">
               {{-- <button type="button" class="btn btn-primary navbar-btn">Sign in</button>--}}
                 {{--   <li> --}}
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    <a href="{{ url('/home') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                              <button type="button" class="btn btn-primary navbar-btn">
                               <i class="fa fa-home"></i> Main Dashboard 
                                </button>{{--<span class="caret"></span>--}}
                            </a>
                 {{--   </li> 
                    <li> --}}
                  {{--  <a href="{{ url('/pointsys_admin') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>&nbsp;&nbsp;To point system
                                </button></a>
                    <a href="{{ url('/timer_rec_admin') }}"><button  class="btn btn-primary">
                                    <i class="fa fa-btn fa-step-forward"></i>&nbsp;&nbsp;Timer Records
                                </button></a>
                                <a href="{{ url('/leave_mgt_admin_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp; Leave Management
                                </button></a>
                      <a href="{{ url('/admin_short_lv_mgt_vw') }}"><button  class="btn btn-primary">
                                    <i class="fa  fa-users"></i>&nbsp;&nbsp;Short Leave
                                </button></a> --}}
                     {{--<a href="{{ url('/ch_pswd_admin_vw') }}"> Logout {{ Auth::user()->first_name }}
                               <button  class="btn btn-primary">
                             <i class="fa fa-pencil-square-o"></i>      Change Password  
                                </button>
                                
                                 </a>--}}
                                
                                
                                {{--<span class="caret"></span>--}}
                            {{-- </li> --}}
                            
                </ul>
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                      {{--  <li class="dropdown">--}}
                           </br>
{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;
                              <a href="{{ url('/logout') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               
                                   Logout   <i class="fa fa-btn fa-sign-out"></i>
                                {{--<span class="caret"></span>--}}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                      {{--  </li> --}}
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
