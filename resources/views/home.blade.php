@extends('layouts.main')

@section('container')
<h1 style="text-align: center">{{ $name }}</h1>
  <div id="cards">
    @foreach ($laptops as $laptop)
      <div class="card my-card" style="width: 14rem;">
        <img src="https://cf.shopee.co.id/file/b050d490fcb5244218a25702b7bfb8a7" class="card-img-top" alt="Laptop">
        <div class="card-body">
          <h5 class="card-title">{{ $laptop->name }}</h5>
          <p class="card-text">{{ 'Rp' .  $laptop->price . '000.000' }}</p>
          <a href="#" class="btn btn-primary">Detail</a>
        </div>
      </div>
    @endforeach

  </div>
@endsection