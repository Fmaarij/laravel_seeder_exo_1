@extends('layouts.index')
@section('content')

<form action="/{{$Personnes->id}}/update" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="nom" value="{{$Personnes->nom}}">


    <input type="number" name="age" value="{{$Personnes->age}}">


    <input type="text" name="email" value="{{$Personnes->email}}">


    <input type="text" name="tel" value="{{$Personnes->tel}}">

    <button type="submit" >Update</button>
</form>
@endsection
