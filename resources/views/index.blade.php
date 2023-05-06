@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title', 'Starbucks')

@section('navbar')
  @include('components.navbar', ['color' => $user->level])
@endsection

@section('main')
  <div class="hero-img"></div>
  @include('components.menuButton', ['color' => $user->level])
@overwrite

@section('js')
  <script>
    let activeUser = {{ Js::from(@$user) }};
    let color = activeUser?.level;
    console.log("activeUser:", activeUser);
    console.log("color index:", color);
  </script>
@endsection