@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

{{--Nesta view, será responsabilidade do formulário pegar o input das informações: img.png / nome / descrição--}}

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Criar registro (CREATE)</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-groups">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-groups">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-groups">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-groups">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-groups">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Uma breve descrição do seu evento..."></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>

@endsection