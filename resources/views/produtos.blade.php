@extends('layouts.menu')
@section('title', 'Produtos')
@section('conteudo')    

    <main>
            <h1 class="titulo">Produtos</h1>

            <div class="cards_container">
                @foreach ($produtos as $produto => $valor)
                    @if($produto >= $produtosDaPagina[0] && $produto <= end($produtosDaPagina))
                        <div class="card">
                            <img src=<?= "/img/produtos/{$valor['Id']}/{$valor['Imagens'][0]}"?> alt="" width="250px" height="250px">

                            <div class="card_conteudo">
                                <p class="card_nome_produto"><b>{{ $valor['Nome'] }}</b></p>
                                <p class="card_preco_produto"><b>{{ $valor['Preco'] }}</b></p>
                            </div>

                            <a href="./produto?id={{ $valor['Id'] }}" class="card_botao">Saiba mais</a>
                        </div>
                    @endif
                @endforeach
            </div>


            <div class="controles_paginacao">
                <a href="./produtos<?php if($pagina - 1 != 0) {echo "?p=" . $pagina - 1;} ?>" class="botao_paginacao">Anterior</a>

                @for ($i = 1; $i <= $numeroTotalPaginas; $i++)
                    @if($i == $pagina)
                        <a href='./produtos?p={{ $i }}' class='botao_paginacao botao_pagina botao_ativo'>{{ $i }}</a>
                    @else
                        <a href='./produtos?p={{ $i }}' class='botao_paginacao botao_pagina'>{{ $i }}</a>
                    @endif
                @endfor

                <a href="./produtos<?php if($pagina + 1 <= $numeroTotalPaginas) {{ echo "?p=" . $pagina + 1;}} ?>" class="botao_paginacao">Próxima</a>
            </div>

        </main>
@endsection