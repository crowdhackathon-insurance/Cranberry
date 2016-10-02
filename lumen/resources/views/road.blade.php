@extends('layouts.app')

@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>					
                        <center>
                        
						
						<h1>Play "We Road"</h1>
						<img src="{{ URL::asset('images/win.png') }}" class="img-rounded" alt="Cinque Terre" width="304" height="236">

						<a href="{{ url('/game') }}"><button type="button" class="btn btn-danger">Play</button></a>
						</center>
						<div class="container">
						  <h2>Μηνιαία Κατάταξη</h2>
						  <p>Προσπάθησε να οδηγήσεις με ασφάλεια.  </p>
						  <p>Ο καλύτερος κερδίζει!</p>

							<div class="progress">
							  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
							  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
								7258 Charis
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
							  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
								6578 Dimitris
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
							  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
								5129 Ioulia
							  </div>
							</div>
							<div class="progress">
							  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
							  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
								4578 George
							  </div>
							</div>

						</div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- /#page-content-wrapper -->
@endsection