@extends('layouts.app')

@section('content')

<div class="section-header">
    <h1>Hai, Selamat Datang {{auth()->user()->user_id}}!</h1>
  </div>
  <h2 class="section-title">Aplikasi Back Office Honey Baby Spa</h2>
  <p class="section-lead">
    saya adalah aplikasi back office, monitoring dan reporting dari Honey Baby Spa
  </p>

  <div class="section-body">
    {{-- <h1>Aplikasi BackOffice Honey Baby Spa ❤️</h1> --}}
  </div>

  @endsection
