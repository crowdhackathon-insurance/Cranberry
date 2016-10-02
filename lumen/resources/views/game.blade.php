@extends('layouts.app')
<!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
#slideshow { 
    margin: 50px auto; 
    position: relative; 

    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
    height: 694px;
    width: 300px;
    padding-bottom: 50px;
    position: relative;
    margin: 0 auto;
    clear: both;
}
 
  </style>

@section('content')


<div id="slideshow">
   <div>
    <img src="{{ URL::asset('images/game1.jpg') }}" >
   </div>
   <div>
    <img src="{{ URL::asset('images/game2.jpg') }}">
   </div>
   <div>
      <img src="{{ URL::asset('images/game3.jpg') }}">
   </div>
      <div>
      <img src="{{ URL::asset('images/game4.jpg') }}">
   </div>
</div>

@endsection
