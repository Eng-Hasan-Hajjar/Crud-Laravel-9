
@extends('parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 <h3>First Name - {{ $data->first_name }} </h3>
 <h3>Last Name - {{ $data->last_name }}</h3>
</div>
@endsection