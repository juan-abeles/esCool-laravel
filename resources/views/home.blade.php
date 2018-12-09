@extends('layouts.app')

@section('content')
  <div>
    @php
      $user = Auth::user();
    @endphp
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif
    @if(Session::has('alert-success'))
      <div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> <strong>{!! session('alert-success') !!}</strong></div>
    @endif
    @if(Session::has('alert-danger'))
      <div class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i> <strong>{!! session('alert-danger') !!}</strong></div>
    @endif


    @switch($user->role->name)
      @case("Alumno")
      @include('profiles.student')
      @break

      @case("Docente")
      @include('profiles.teacher')
      @break

      @case("Padre")
      @include('profiles.parent')
      @break

      @case("Administrador")
      @include('profiles.admin')
      @break

      @default
      <span>Something went wrong, please try again</span>
    @endswitch


  </div>
@endsection
