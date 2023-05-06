@extends('layouts.master')

@section('title', 'Menu')

@section('navbar')
  @include('components.navbar', ['color' => $user->level])
@endsection

@section('main')
<div class="container" id="wrapper">
  <h3>History Transactions</h3>
  <div class="row" id="menu-content">
    @foreach ($transactions as $transaction)
      <div class="col border m-2">
        <div class="product-img" style="width: 100%">
          <img src="{{ asset('assets/menu/'.$transaction->menuId.'.jpg') }}" alt="" style="width: 100%">
        </div>
        <div>
          <div>
            <h4>{{ $transaction->name }}</h4>
          </div>
          <div>
            <p>Rp.{{ $transaction->price }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection