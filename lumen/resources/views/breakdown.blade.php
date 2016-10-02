@extends('layouts.app')

@section('content')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>					
						<center>
							<h1>Έχω βλάβη</h1>
							<div id="dummymap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12579.066339169618!2d23.709718699999996!3d37.982576249999994!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sel!2sgr!4v1475327934291" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div id="realmap" class="hiden">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d786.2399127423679!2d23.71439647252197!3d37.9780709398387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x280e1f4e6f0af096!2sINNOVATHENS!5e0!3m2!1sel!2sgr!4v1475416966029" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<button type="button" id="locateme" class="btn btn-danger">Βρες με</button>
							<form action="{{ url('/issue-status') }}" method="post">
							<div class="form-group">
								<label for="damage">Επέλεξε βλάβη:</label>
								  <select class="form-control" id="damage" name="damage">
									<option>Αλλαγή Ελαστικού</option>
									<option>Βεντιλατέρ</option>
									<option>Δισκοπλατό</option>
									<option>Έσβησε εν κινήσει</option>
									<option>Ελαστικό χωρίς ρεζέρβα</option>
									<option>Έλλειψη καυσίμων</option>
									<option>Ηλεκτρικά</option>
									<option>Θερμοκρασία</option>
									<option selected="selected">Θόρυβος Μηχανής</option>
									<option>Ιμάντας</option>
									<option>Μπαταρία</option>
									<option>Σασμάν</option>
									<option>Συμπλέκτης</option>
									<option>Τροφοδοσία</option>
									<option>Ψυγείο</option>
								  </select>
								
								<label for="phone">Τηλέφωνο:</label>
								<input type="text" class="form-control" id="phone" name="phone" value="69188928498"> 
								<label for="garage">Συνεργείο μεταφοράς:</label>
								<input type="text" class="form-control" id="garage" name="garage" value="Αρτέμιδος 18, Βούλα 166 73">
								<label for="comment">Σχόλια:</label>
								<input type="text" class="form-control" id="comment" name="comment" value="Ειναι σκοτάδι, θα ειμαι λίγο πιο πριν σε ενα περίπτερο"> 
								<button type="submit" class="btn btn-default ineedhelp">Βοηθησέ με</button>
							</div>
							</form>
							
						</center>
						
						
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
	
	$('#locateme').click(function(){
       $('#dummymap').addClass( "hiden" );
       $('#realmap').removeClass( "hiden" );
    }); 
</script>
        <!-- /#page-content-wrapper -->
@endsection