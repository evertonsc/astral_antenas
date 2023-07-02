@extends('layouts.menu')
@section('title', "Produto {$informacoes['Id']}")
@section('conteudo')

    <main>
        
        <div class="seta_voltar_pagina">
            <a href="./produtos?p=<?= $_SESSION['pagina'] ?>">
                <svg width="26px" height="28px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
                    <title>Voltar</title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="24-px-Icons" transform="translate(-219.000000, -26.000000)" stroke="#000000">
                            <g id="ic_back" transform="translate(216.000000, 24.000000)">
                                <g transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) " id="forward">
                                    <g transform="translate(4.000000, 3.000000)" stroke-width="2">
                                        <path d="M0,9 L16,9" id="Line"></path>
                                        <path d="M16,9 L7.93774223,0.937742233" id="Line"></path>
                                        <path d="M16,9 L7.93774223,17.0622578" id="Line"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            
        </div>
        
        
        <div class="produto_container">
            <div class="imagem_geral_container">
                <div class="imagem_principal_container">
                    <img src="./img/produtos/<?= $informacoes['Id'] . "/" . $informacoes['Imagens'][0] ?>" alt="" width="350px" height="350px" class="imagem_principal">
                </div>

                <div class="imagem_secundaria_container" <?php if(count($informacoes['Imagens']) > 5){ echo "style='flex-wrap: wrap; width: auto;'"; }?>>
                    @foreach ($informacoes['Imagens'] as $indiceImagem => $imagem)
                        @if($indiceImagem == 0)
                            <img src="./img/produtos/<?= $informacoes['Id'] . "/" . $imagem ?>" alt="" width="50px" height="50px" class="imagem_secundaria imagem_ativa" onclick="trocaImagemAtiva(this)">
                        @else
                            <img src="./img/produtos/<?= $informacoes['Id'] . "/" . $imagem ?>" alt="" width="50px" height="50px" class="imagem_secundaria" onclick="trocaImagemAtiva(this)">
                        @endif
                    @endforeach
                </div>
            </div>
            

            <div class="informacoes_produto_container">
                <h3 class="nome_produto">{{ $informacoes['Nome'] }}</h3>
                <p class="preco_produto"><b>{{ $informacoes['Preco'] }}</b></p>
                
                <p class="descricao_produto">{{ $informacoes['Descricao'] }}</p>
            </div>
        </div>
        
    </main>

    <script src="./js/produto-especifico.js"></script>

@endsection