@extends('layouts.app')

@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>					
                        <center>
                        <h3>Τα στοιχεία μου</h3>
                        <p><code>#WeRoad by #Cranberry</code></p>
						<img src="{{ URL::asset('images/logo_we_road.png') }}" class="img-circle" alt="Cinque Terre" width="304" height="236">
						</center>
						<div class="row">
						  <div class="col-md-6">
							<div class="contact-form">
							 
							  <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">

								<div class="form-group">
								  <label for="name">Ονοματεπώνυμο</label>
								  <input type="text" name="name" class="form-control" id="name" required="">
								</div>

								<div class="form-group">
								  <label for="plate">Αριθμός Κυκλοφορίας</label>
								  <input type="text" name="plate" class="form-control" id="plate" required="">
								</div>

								<div class="form-group">
								  <label for="mark">Μάρκα/Μοντέλο</label>
								  <input type="text" name="mark" class="form-control" id="mark">
								</div>

								

								<button type="submit" name="submit" class="btn btn-primary">Edit</button>
							  </form>
							</div><!-- /.contact-form -->
						  </div><!-- /.col-md-6 -->

                    </div>
                </div>
            </div>
        </div>
		
        <!-- /#page-content-wrapper -->
@endsection