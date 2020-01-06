@extends('layouts.app1')

@section('content')


<div class="container">
  <!-- Content here -->
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Mire se erdhe {{ Auth::user()->name }} !</h4>
  <p> Dite te mbare  sot !</p>
  <hr>
  <p class="mb-0"></p>
</div>
 
 



</div>
@endsection
