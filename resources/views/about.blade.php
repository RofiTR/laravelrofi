@extends('layouts.main')

@section('container')
  <h1>Halaman about</h1>
  <h3><?php echo $name; ?></h3>
  <p><?=$email; ?></p>
  <p>{{$email}}</p>
  <script src="js/script.js"></script>
  <img src="img/{{$image}}" alt="{{$name}} " width="200" class="img-thumbnail rounded-circle">
@endsection
