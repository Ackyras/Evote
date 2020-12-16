@extends('layout.homemaster')

@section('content')
    <div class="contentp">
      <center>
        <div class="headline">
          <h1>Calon Ketua Umum PMK 2020/2021</h1>
        </div>
      </center>
      <div class="pkiri">
        <center>
          <img src="{{asset('img/calon1.jpg')}}" alt="calon1" class="profil">
          <p>Frikles Lumbantoruan</p>
          <a href="/voting/1">Profil Calon I</a>
        </center>
      </div>
      <div class="pkanan">
        <center>
          <img src="{{asset('img/calon2.jpg')}}" alt="calon2" class="profil">
          <p>Alfina En Gedy</p>
          <a href="/voting/2">Profil Calon II</a>
        </center>
      </div>
    </div>
@endsection