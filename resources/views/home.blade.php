@extends('layouts.menu')

@section('title', 'Astral Antenas')

@section('conteudo')
    
    <main>
        <h1 class="titulo">Quem somos</h1>

        <div class="quem_somos_container">

            <div class="container_fachada">

                <p class="primeiro_texto">
                    A Astral Antenas, situada no Centro da Cidade de Canoas, na Rua Muck, além de ser uma das lojas mais tradicionais de Canoas é também uma empresa familiar, que já em sua 3° geração, tem como único foco proporcionar produtos de renome e qualidade para seus clientes, além de proporcionar um ótimo atendimento riquíssimo em atenção e paciência com o cliente.
                    De segunda à sábado estamos a disposição para super bem recebê-los.
                </p>
                
                <div class="foto_fachada_container">
                    <img src="./img/loja/foto-fachada-loja.jpeg" alt="Foto da fachada da loja" class="foto_fachada">
                </div>

            </div>
            



            <div class="container_interior">
            
                <p class="segundo_texto">
                    Inúmeros produtos, abrangendo um enorme leque de categorias para melhor sanar as necessidades de nossos clientes, seja antena ou controle para sua TV, carregadores ou fones para seu celular, os mais diversos cabos de áudio e imagem, sistemas de alarme e câmeras para aumentar sua segurança, roteadores e repetidores para aumentar o alcance da sua internet,
                    mouses, teclados e headsets para turbinar seu setup gamer, caixinhas de som bluetooth para aumentar o som da sua festa e conversores digitais e Smart boxes para turbinar a sua TV.
                </p>

                <div class="foto_interior_container">
                    <img src="./img/loja/foto-interior-loja.jpeg" alt="Foto do interior da loja" class="foto_interior">
                </div>

            </div>

        </div>
    </main>

    <script src="./js/pagina-inicial.js"></script>

@endsection