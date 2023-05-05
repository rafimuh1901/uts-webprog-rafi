@extends('master')

@section('title', 'Starbucks')

@section('navbar')
  @include('components.navbar')
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@section('main')
  {{-- {{ @$id }} --}}
  <div class="hero-img"></div>
  @include('components.menuButton')
  {{-- <div class="container">
  </div> --}}
@endsection
<script>
  let activeUser = {{ Js::from($activeUser) }};
  let color = activeUser?.level;
</script>