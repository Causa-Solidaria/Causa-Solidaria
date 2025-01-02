@extends('site.layout')
@section('title', 'Página do Doador')
@section('conteudo')

@if($mizeraveis->isEmpty())
    <div class="card-panel red lighten-4">
        <span class="red-text text-darken-2">
            <i class="material-icons left">error_outline</i>
            Nenhum resultado encontrado para "{{ request('search') }}"
        </span>
    </div>
@else
    <div class="row"> <!-- Mover a row para fora do loop -->
        @foreach ($mizeraveis as $mizeravel)
            <div class="col s12 m6 l3"> <!-- Ajuste a largura das colunas -->
                <div class="card card-square">
                    <div class="card-image">
                        <img src="{{ $mizeravel->imagem }}">
                        <span class="card-title">{{ $mizeravel->nome }}</span>
                        <a href="{{ Route('site.pessoa', $mizeravel->id)}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <p>{{ Str::limit($mizeravel->situacao, 20)}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

    <div class="row center">
        {{ $mizeraveis->links('custom.pagination')}}
    </div>
@endif

@endsection
