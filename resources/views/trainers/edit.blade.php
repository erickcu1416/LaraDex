@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}

        @include('trainers.form')

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
{{--
    <form files="true" class="form-group" method="POST" action="/trainers/{{ $trainer->slug }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form> --}}

@endsection
