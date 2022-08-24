@extends('layouts.index')
@section('content')
    <form action="create" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nom</label>
        <input type="text" name="nom">
        <label for="">age</label>
        <input type="number" name="age">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Telephone</label>
        <input type="telephone" name="tel">
        <button type="submit" >Ajouter</button>
    </form>
@endsection
