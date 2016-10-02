@extends('layouts.app')

@section('content')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>                    
                        <center>
                        <h3>Welcome!</h3>
                        <p><code>#WeRoad by #Cranberry</code></p>
                        <img src="{{ URL::asset('images/logo_we_road.png') }}" class="img-circle" alt="Cinque Terre" width="304" height="236">
                        </center>
                        <form>
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                              </div>
                              <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                              </div>
                              <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /#page-content-wrapper -->
@endsection
