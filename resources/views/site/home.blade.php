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
    <div class="row">
        @foreach ($mizeraveis as $mizeravel)
            <div class="col s12 m6 l3">
                <div class="card card-square">
                    <div class="card-image">
                        <img src="{{ $mizeravel->imagem }}" alt="Imagem de {{ $mizeravel->nome }}">
                        <span class="card-title">{{ $mizeravel->nome }}</span>
                        <a href="{{ route('site.pessoa', $mizeravel->id) }}" class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">visibility</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <p>{{ Str::limit($mizeravel->situacao, 20) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row center">
        {{ $mizeraveis->appends(['search' => request('search')])->links('custom.pagination') }}
    </div>
@endif

@endsection

