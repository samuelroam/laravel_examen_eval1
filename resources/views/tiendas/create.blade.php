@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="show" method="GET">
    @csrf
    Nombre:<br>
    <input type="text" name="name">
    <br><br>
    Descripcion:<br>
    <input type="text" name="description">
    <br><br>
    Stock:<br>
    <input type="text" name="stock">
    <br><br>
    Precio:<br>
    <input type="text" name="price">
    <br><br>
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
