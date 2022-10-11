@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Curso Laravel</h1>

        <img src="/img/banner.jpg" alt="Banner">

        @if(10 > 1)
            <p>A condição é true</p>
        @endif

        <p>Aula 04 - Template Engine Blade</p>
        <p>{{$nome}}</p>
        @if($nome == "Ruan")
            <p>O nome é: {{$nome}} e ele tem idade {{$idade}}</p>
        @elseif($nome == "Junior")
            <p>O nome é {{$nome}} e ele tem idade {{$idade}}</p>
        @else 
            <p>O nome não é {{$nome}}</p>
        @endif

        <a href="/contact">Link: Clique para contatos</a>
        <br>
        <a href="/products">Link: Clique para produtos</a>

        <p>Aula 05 - Template Engine Blade 2.0</p>

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
                <p>O indice é {{ $i }}</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "Ruan";
            echo $name;
        @endphp

        {{--Comentário feito com blade--}}

@endsection