@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $event)
    <p>Nome: {{ $event->title }} -- Descrição: {{ $event->description }} -- Cidade: {{ $event->city }} -- Público: {{ $event->private ? "Não": "Sim" }}</p>
@endforeach

@endsection