@extends('layouts.app')

@section('content')
<div class="container">
     
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Mire se erdhe {{ Auth::user()->name }}</h4>
  <p>Shikim te kendshem</p>
  <hr>
  <p class="mb-0"><strong>IPTV </strong></p>
</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
