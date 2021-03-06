<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('plugins/images/favicon.png')}}">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{URL::asset('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{URL::asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/style.min.css')}}" rel="stylesheet">
                              
    <!-- color CSS -->
    <link href="{{URL::asset('assets/css/colors/megna.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
  
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="{{URL::asset('plugins/images/eliteadmin-logo.png')}}" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                </ul>
                
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="/plugins/images/users/d1.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Dr. Steave</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="{{url('admin/profile')}}"><i class="ti-user"></i>  My Profile</a></li>
                            
                            <li><a href="{{url('admin/profile/edit')}}"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="{{url('/logout')}}"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                  
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    
                    <li> <a href="{{url('/admin')}}" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    
                    <li class="nav-small-cap m-t-10">--- Professional</li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{url('/schedule')}}">Hospital Schedule</a> </li>
                            <li> <a href="{{url('/schedule/booking')}}">Booking Schedule</a> </li>
                        </ul>
                    </li>
<!--
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Poly <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="{{url('/poly')}}">All Poly</a> </li>
                            <li> <a href="{{url('/add-poly')}}">Add Poly</a> </li>
                            <li> <a href="{{url('/edit-poly')}}">Edit Poly</a> </li>
                            
                        </ul>
                    </li>
-->
                    

                    <li class="nav-small-cap">--- Account</li>
                    
                    <li><a href="{{url('/logout')}}" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
    
        @yield('content')
    
    
    <!-- jQuery -->
    <script src="{{URL::asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('assets/bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{URL::asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{URL::asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('assets/js/waves.js')}}"></script>
    <!-- Flot Charts JavaScript -->
    <script src="{{URL::asset('plugins/bower_components/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('assets/js/custom.min.js')}}"></script>
    <script type="text/javascript">
        // Real Time chart
        var data = []
            , totalPoints = 200;

        function getRandomData() {
            if (data.length > 0) data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50
                    , y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                }
                else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }
            return res;
        }
        // Set up the control widget
        var updateInterval = 20;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                }
                else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });
        var plot = $.plot("#placeholder", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            }
            , yaxis: {
                min: 0
                , max: 200
            }
            , xaxis: {
                show: false
            }
            , colors: ["#01c0c8"]
            , grid: {
                color: "#AFAFAF"
                , hoverable: true
                , borderWidth: 0
                , backgroundColor: '#FFF'
            }
            , tooltip: true
            , resize: true
            , tooltipOpts: {
                content: "Y: %y"
                , defaultTheme: false
            }
        });

        function update() {
            plot.setData([getRandomData()]);
            // Since the axes don't change, we don't need to call plot.setupGrid()
            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();
    </script>
    <!--Style Switcher -->
    <script src="{{URL::asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>