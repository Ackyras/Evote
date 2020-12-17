@extends('layout.homemaster')

@section('content')
<center>
<div class="ccontent">
    @if(empty($data))
   <center> 
    <h2>Tidak di Temukan</h2>
    <b>Mohon Periksa Kembali Data Anda</b>
   </center>
@else
<p>Username : {{$data->email}}</p>
<p>Password : {{$data->passcode}}</p>
@endif
</div>
</center>
@endsection
