@extends('layouts.panel')

@section('content')
  @foreach($pessoas as $pessoa)
    <p>{{ $pessoa->titular }}</p>
  @endforeach
@endsection