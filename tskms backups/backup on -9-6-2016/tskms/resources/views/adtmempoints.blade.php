<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Points system for Admin</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Points system</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<style> 
#panel, #flip, #panelforjobs, #flipforjobs {
    padding: 5px;
    text-align: center;
   
   
}

#tmdet {
    width: 300px;
     background-color: WHITE;
	 border: 2px solid GREY;
	  padding: 15px;
    box-shadow: 10px 10px 5px #888888;
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
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
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
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   {{-- <li>--}}</br>
</br>                   <a href="{{ url('/home') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <button  class="btn btn-primary">
                               <i class="fa fa-home"></i>  Home  
                                </button>{{--<span class="caret"></span>--}}
                            </a>
                            {{-- </li> --}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <a href="{{ url('/logout') }}">{{-- Logout {{ Auth::user()->first_name }}--}}
                               <h5>
                                   Logout {{ Auth::user()->first_name }}  <i class="fa fa-btn fa-sign-out"></i>
                                {{--<span class="caret"></span>--}} </h5>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

   
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard For Admin points</div>
                 <div> </div>
                <div class="panel-body">
                 <h1>Admin  points section</h1></br></br>
             
                   
                  {{--   <br>{{ Auth::user()->first_name }} </br>
                      <br>email  {{ Auth::user()->email }} </br> --}}
                      @foreach($matched_users as $ser_user1)
        <div id="tmdet">
        <h4>Details for {{$ser_user1['name']}}	</h4>
         <h6>  
        
        <h4>  {{$ser_user1['first_name']}}
          {{$ser_user1['last_name']}}</h4><br>
          Team member ID  {{$team_member_id=$ser_user1['id']}}
         <br>Email  {{$ser_user1['email']}}
          <br>Designation  {{$ser_user1['type_of']}}
           <br>Deparatmentsssed  {{$ser_user1['dept']}}
           </div>
         @endforeach	
                       
                          
                         
                     
                      
                   <?php
$total_points_days=0;
$total_points_score=0;
$avg_points=0;

?>
                    
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                                 
                                  <div class="col-md-6">
                          {{--  <form method="post" action="{{url('serc')}}" accept-charset="UTF-8">
     <!--   <input name="pass_name" type="hidden" value="{{ Session::get('name') }}"/>  -->  
            <div class="input-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input type="text" name="insearch" class="form-control" placeholder="Search Users by Name, id, designation or departments"/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>69
                </form>--}}
                </span>
            </div>
              </div> </br>
</br> </br></br></br> <div align="left">  
<form class="form-horizontal" role="form" method="POST" action="{{ url('/admindatefilter') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_data"  value="{{$team_member_id}}">
  &nbsp;&nbsp;&nbsp;  From Date : <input type="text"  id="datepicker" name="fromdate">
 &nbsp;&nbsp;&nbsp; To Date: <input type="text" id="datepicker1" name="todate">
    <button type="submit"  class="btn-primary btn-sm"  data-title="Delete12345678"  >Search
    <span class="glyphicon glyphicon-play-circle"></span>
    </button></p></form>        
     

                            
                                    
      </div>  </br> </br>           
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


	<div class="row">
		
        
        <div class="col-md-12">
        </h6>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped" style="font-size:13px;">
                   
                    <thead>
                   
                  
                   <th>User-id	</th>
                    <th>Date of points</th>
                     <th>Points scored</th>
                      <th>Task name</th>
                     <th>Comment</th>
                    {{-- <th>Deptarment</th>
                     <th>Day Points</th>--}}
                     
                     <th>By Team leader</th>
                    {{--  <th>Edit</th> --}}
                      
                     {{--  <th>Delete</th> --}}
                   </thead>
    <tbody>
    @foreach($users_points as $ser_user)
    
    <tr>
    
    <td>{{$ser_user['team_member_id']}}</td>
    <td>{{$ser_user['updated_at']}}</td>
    <td>{{$ser_user['points_of_day']}}</td>
    <td>{{$ser_user['point_task_name']}}</td>
    <td>{{$ser_user['comments_of_day']}}</td>
    
   
         <td>{{$ser_user['Evaluated_by']}}{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/vwdetails') }}">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$ser_user['id']}}">
    
    <button type="submit" formtarget="_blank" class="btn-info btn-sm"  data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-share"></span>
    </button></p></form>--}}</td>

   {{-- <td><span id="{{$ser_user['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td>--}}
  {{--  <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/deleteuser') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{ $ser_user['first_name']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$ser_user['id']}}">
    
    <button type="submit" class="btn btn-danger btn-sm" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td> --}}
   
     
 
</tr>
<tr>

   
 <td colspan="9"> 
 <div  id="{{$disp=$ser_user['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/edituser') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="usr_id"  value="{{$ser_user['id']}}">

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">first Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" 
                                value="{{$ser_user['first_name']}}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{$ser_user['last_name']}}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('type_of') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">type of user</label>

                            <div class="col-md-6">
<select name="type_of">
  <option disabled selected > -- select an option -- </option>
  <option value="proj_manager">Project manager</option>
  <option value="team_lead">Team leader</option>
  <option value="team_member">Team member</option>
  </select>
@if ($errors->has('type_of'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type_of') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{$ser_user['email']}}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">deptartment</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="dept" value="{{$ser_user['dept']}}">

                                @if ($errors->has('dept'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Make User
                                </button>
                            </div>
                        </div>
                    </form>
                    </tr>
                                
                        </div>
                         
</div> 


<?php
$total_points_days=$total_points_days+1;
$total_points_score=$total_points_score+$ser_user['points_of_day'];

$avg_points=$total_points_score/$total_points_days;
?>




  @endforeach
  
  
  
    
    </tbody>
    <tfoot>
    <tr>
                     <th>User-id	</th>
                    <th>Total points days </th>
                    <th>Total points </th>
                     <th colspan="3">Average points</th>
                   {{--   <th >Comment</th>
                    <th>Deptarment</th>
                     <th>Day Points</th>--}}
                     
                    
                      
                       </tr>
                       <tr>
                       
                       <td>{{$team_member_id}}</td>
                     <td>{{$total_points_days}}</td>
                     <td>{{$total_points_score}}</td>
                    {{-- <td>Deptarment</td>
                     <td>Day Points</td>--}}
                     
                     <td colspan="3">{{$avg_points}}</td>
                    {{--  <td>Edit</td> --}}
                      
                       
                       </tr>
                       
                       
                       
    
    </tfoot>
</table>


            
        </div>
	</div>
</div>



    
    
    
    
                    
                </div>
                
            
        </div>
    </div>
</div>

</div>

    <!-- JavaScripts -->
    
   
    
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

 

 
</body>
</html>