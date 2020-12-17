@extends('layout.homemaster')
@section('title')
    Profil Calon Ketua PMK
@endsection
@section('content')
    <center>
      <div class="headline">
         <h1>Calon Ketua Umum PMK 2020/2021</h1>
       </div>
    </center>
    <div class="contentp">
      <div class="pkiri">
        <center>
          <div class="profil"><img src="{{asset('img/calon1.jpg')}}" alt="calon1"></div>
          <p>Frikles Lumbantoruan</p>
          <a href="/voting/1">Profil Calon I</a>
        </center>
      </div>
      <div class="pkanan">
        <center>
          <div class="profil"><img src="{{asset('img/calon2.jpg')}}" alt="calon2"></div>
          <p>Alfina En Gedy</p>
          <a href="/voting/2">Profil Calon II</a>
        </center>
      </div>
    </div>
    <div class="dummy"></div>
@endsection