@extends('layouts.app')
<!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
#slideshow { 
    margin: 10px auto; 
    position: relative; 

    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}
 #slideshow > div img{ 
     max-height: 600px;
    margin: 0 auto;
    display: block;
  }
#slideshow > div { 
   
    padding-bottom: 60px;
    position: relative;
    margin: 0 auto;
    clear: both;
}
 
  </style>

@section('content')

<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
<div id="slideshow">
<div>
    <img src="{{ URL::asset('images/game1.png') }}" >
   </div>
   <div>
    <img src="{{ URL::asset('images/game2.png') }}">
   </div>
   <div>
      <img src="{{ URL::asset('images/game3.png') }}">
   </div>
      <div>
      <img src="{{ URL::asset('images/game4.png') }}">
   </div>


 </center>
                    </div>
                </div>
            </div>
        </div>
@endsection
