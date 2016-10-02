@extends('layouts.app')

@section('content')

<!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>          
                        <center>
                        <h3>Αίτημα</h3>
                        <p><code>#WeRoad by #Cranberry</code></p>
            <img src="{{ URL::asset('images/map.png') }}" class="img-responsive" alt="Cinque Terre">
            <hr/>
            
            </center>
            
                    </div>
                </div>

        </div>
    <div>
<img  style="float: left;" src="http://www.freeiconspng.com/uploads/accept-tick-icon-12.png" width="100">
<span style="float: left;top: 30px;display: block;position: relative;">Δεχτήκαμε το αίτημα σου και σε 3' λεπτά θα είμαστε δίπλα σου<br>
Κωδικός αιτήματος είναι :<strong>{{$issueID}}</strong>
</span>
</div>
        <!-- /#page-content-wrapper -->

@endsection
