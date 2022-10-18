@extends('layouts.main')

{{--Irá realizar a chamada da extensão /layout/main | Nesse caso a template engine irá ser responsável pelas seções--}}

@section('title', 'Cadastrar')

@section('content')

<h1>Cadastrar</h1>
<p>Login: [___________________]</p>
<p>Senha: [___________________]</p>
<p>[Entrar]</p>

<a href="/">Retornar</a>

@endsection