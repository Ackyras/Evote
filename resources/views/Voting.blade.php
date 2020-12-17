@extends('layout.homemaster')
@section('title')
    Profil kandidat {{$data}}
@endsection
@section('content')
<center>
  <div class="content">
      <div class="vprofil">
        @if($data==1)
        <img src="{{asset('img/kandidat1.png')}}" alt="calon1">
        <img src="{{asset('img/cv_frikles.jpg')}}" alt="calon1">
        @else
        <img src="{{asset('img/kandidat2.png')}}" alt="calon2">
        <img src="{{asset('img/cv_alfina.jpg')}}" alt="calon2">
        @endif
      </div>
  </div>
</center>
<div class="form">
  <form method="POST" action="{{route('vote', $data)}}">
    @csrf
    <input type="hidden" name="vote" value="{{$data}}" id="">
    <button type="submnit">Vote</button>
  </form>
</div>
@if(session('msg'))
  <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>{{session('msg')}}</p>
      </div>
      <div class="modal-footer">
        <button onclick="location.href='{{route('profil')}}'" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif
@endsection