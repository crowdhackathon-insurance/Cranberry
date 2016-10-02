@extends('layouts.app')

@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>					
						<center>
							<h1>Τράκαρα</h1>
							<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12579.066339169618!2d23.709718699999996!3d37.982576249999994!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sel!2sgr!4v1475327934291" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							<button type="button" class="btn btn-danger">Locate me</button>
							
							<div class="leftside">
								 
								<label class="radio-inline">
								<input type="radio" name="frontida">Καταγραφή</label> <br>
								<label class="radio-inline"> 
								<input type="radio" name="frontida">Καταγραφή & Ρυμούλκηση</label><br>
							</div>
							
							<div class="form-group">	
								<label for="phone">Τηλέφωνο:</label>
								<input type="text" class="form-control" id="phone" name="phone"> 
								<label for="garage">Συνεργείο μεταφοράς:</label>
								<input type="text" class="form-control" id="garage" name="garage"> 								
							</div>
							
							<div class="leftside">
								<label class="radio-inline">
								<input type="radio" name="ipaitiotita">Ευθύνομαι για το συμβάν</label> <br>
								<label class="radio-inline"> 
								<input type="radio" name="ipaitiotita">Ευθύνεται το άλλο όχημα για το συμβάν</label><br>
							</div>
							<button type="submit" class="btn btn-default">Send</button>
							
						</center>
						
						
                    </div>
                </div>
            </div>
        </div>
		
        <!-- /#page-content-wrapper -->
@endsection