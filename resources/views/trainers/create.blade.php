@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
    <form files="true" class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>

@endsection