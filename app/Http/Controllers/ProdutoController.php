<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        $dados = Produto::all();             // Me retorna um array com um monte de dados que não quero junto com os dados que quero (attributes).
        $produtos = $dados->toArray();       // Portanto, preciso transformar em um array para pegar somente os dados que desejo e enviar para a View.

        $produtosFormatados = ProdutoController::formataDados($produtos, 'produtos');      // Formata os preços e imagens dos produtos.
        $numeroTotalPaginas = ProdutoController::calculaPaginacao($produtos);
        
        $pagina = request('p');
        
        // Caso não tenha query string ou o número da página exceda o número de páginas existentes retorna 1 na variável página.
        if($pagina == null || $pagina > $numeroTotalPaginas){
            $pagina = 1;
        }
        $_SESSION['pagina'] = $pagina;

        $produtosDaPagina = ProdutoController::descobreProdutosPaginaAtual($pagina);
        

        return view('produtos', [
            'produtos' => $produtosFormatados,
            'numeroTotalPaginas' => $numeroTotalPaginas,
            'pagina' => $pagina,
            'produtosDaPagina' => $produtosDaPagina
        ]);
    }


    static public function formataDados($dados, $pg)
    {
        
        // Ao adicionar o "&" antes do $produto no loop abaixo, cria uma referência direta ao elemento original do array $dados. Dessa forma, as alterações feitas em $produto["Preco"] irão refletir no valor original no array.
        foreach ($dados as &$produto) {
            
            // Formata o preço de cada produto no resultado.
            $produto["Preco"] = number_format($produto["Preco"], 2, ',', '.');      // Transforma de ponto para vírgula.
            $produto["Preco"] = "R$ {$produto['Preco']}";                           // Coloca o R$ na frente do preço.


            // Formatar imagens
            $imagensSeparadas = $produto["Imagens"] = explode("||", $produto["Imagens"]);       // Separa as imagens
            $produto["Imagens"] = $imagensSeparadas;                                            // Substitui a string de Imagens antiga por um array com as imagens separadas
        }
        
        if($pg == 'produtos'){
            return $dados;
        }
        else if($pg == 'produto') {
            return $dados[0];
        }
    }


    static public function descobreProdutosPaginaAtual($pagina)
    {
        $paginaAtual = $pagina - 1;
        $ids = [];
        
        $id = $paginaAtual * 5;
        array_push($ids, $id);
        array_push($ids, 1 + $id);
        array_push($ids, 2 + $id);
        array_push($ids, 3 + $id);
        array_push($ids, 4 + $id);
        
        return $ids;
    }


    static public function calculaPaginacao($produtos)
    {
        $produtosPorPagina = 5;
        $totalProdutos = count($produtos);     // Total de produtos retornado pela query que seleciona todos os produtos da tabela "produtos".

        $numeroTotalPaginas = ceil($totalProdutos / $produtosPorPagina);        // Pego o número total de páginas para colocar no controle de páginas.

        return $numeroTotalPaginas;
    }


    public function buscaProduto(Request $request)
    {
        // aqui vou fazer a consulta com o where
        $id = $request->query('id', 1);      // Obtém o valor da query string 'id' com valor padrão 1

        $informacoes = Produto::get()->where('Id', $id)->first();
        $informacoes = $informacoes->toArray();
        //dd($informacoes);

        $informacoesFormatadas = ProdutoController::formataDados([$informacoes], 'produto');
        //dd($informacoesFormatadas);

        return view('produto-especifico', ['informacoes' => $informacoesFormatadas, 'produto' => ($id - 1)]);
    }
}


