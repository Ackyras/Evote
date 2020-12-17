@extends('layout.homemaster')
@section('title')
    Home
@endsection
@section('content')
<center>
    <div class="content">
        <img src="{{asset('img/panduan.jpg')}}" alt="Panduan" class="panduan">
    </div>
    @if(!Auth::check())
        <div class="dummy"></div>
    @endif
</center>
@endsection