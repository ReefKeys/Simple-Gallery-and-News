@extends('welcome')
@section('content')
<div class="container-fluid">
  <div class="card">
      <div class="card-header">
          <img src="{{asset('data_gambar/'.$data->gambar)}}" class="w-100" alt="">
      </div>
      <div class="card-body">
          <h2>{{$data->judul}}</h2>
          <p>{{$data->deskripsi}}</p>
      </div>
  </div>
</div>
@endsection