<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta name="author" content="Cranberry">

    <title>We Road</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <!-- Custom  -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
        <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
			<center>
			<img src="{{ URL::asset('images/logo_cran.png') }}" class="img-circle" alt="Cinque Terre" width="236" height="236">
			</center>
                <li class="sidebar-brand">
                    
					<a href="{{ url('/') }}">
						We Road by Cranberry
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">Αρχική</a>
                </li>
                <li id="weroad">
                    <a href="{{ url('/road') }}">Θελω να παίξω!</a>
                </li>
				<li>
                    <a href="{{ url('/profile') }}">Προφίλ</a>
                </li>
                <li>
                    <a href="{{ url('/accident') }}">Έχω τρακάρει!</a>
                </li>
                <li>
                    <a href="{{ url('/breakdown') }}">Βλάβη</a>
                </li>
                 <li>
                    <a href="{{ url('/game') }}">Game mockup</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    @yield('content')


        </div>
    <!-- /#wrapper -->



    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>