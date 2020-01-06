@extends('layouts.app1')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Menaxho Userat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('register') }}"> Krijo User </a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>Nr</th>
   <th>Emri</th>
   <th>Email</th>
   <th>Paketat</th>
   <th>Data e regjistrimit</th>
   <th>Vepro</th>
   
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->kanalet }}</td>
    <td>{{ $user->created_at }}</td>
    <!-- <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td> -->
    <td>
       <!-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Shfaq</a> -->
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edito</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Fshij', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}
</div>

 
@endsection