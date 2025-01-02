@extends('site.layout')
@section('title', 'Página pessoa')
@section('conteudo')

<div class="row container" style="margin-top: 30px;">
    <!-- Card centralizado e estilizado -->
    <div class="col s12 m10 offset-m1 l8 offset-l2">
        <div class="card z-depth-4" style="border-radius: 15px; overflow: hidden; background-color: #ffffff;">
            
            <!-- Seção de imagem com overlay -->
            <div class="card-image" style="position: relative;">
                <img src="{{ $mizeravel->imagem }}" alt="{{ $mizeravel->nome }}" class="responsive-img" style="filter: brightness(80%);">
                <div style="position: absolute; bottom: 10%; left: 10%; background: rgba(0, 0, 0, 0.6); color: #ffffff; padding: 10px 20px; border-radius: 10px;">
                    <h4 style="margin: 0; font-weight: bold;">{{ $mizeravel->nome }}</h4>
                </div>
            </div>

            <!-- Conteúdo do card -->
            <div class="card-content" style="padding: 30px; text-align: center;">
                <h5 class="green-text text-darken-2" style="font-weight: bold; margin-bottom: 15px;">Situação Atual</h5>
                <p style="font-size: 18px; line-height: 1.8; color: #4e4e4e; margin-bottom: 25px;">
                    {{ $mizeravel->situacao }}
                </p>
            </div>

            <!-- Botão de ação ajustado -->
            <div class="card-action" style="background: #f4f4f4; padding: 20px; text-align: center;">
                <button 
                    class="btn green waves-effect waves-light btn-large"
                    style="
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 60%;
                        border-radius: 50px;
                        font-size: 1.4rem;
                        padding: 15px 25px;
                        font-weight: bold;
                        letter-spacing: 1px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        transition: transform 0.3s ease, background-color 0.3s ease;
                        margin: 0 auto;
                    "
                    onmouseover="this.style.transform='scale(1.05)'; this.style.backgroundColor='#2e7d32';"
                    onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#4caf50';"
                >
                    <i class="material-icons" style="font-size: 1.5rem; margin-right: 8px;">favorite</i>
                    AJUDAR
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

