<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 21/03/16
 * Time: 21:00
 */

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests\ProdutosRequest;
use Estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function __construct() {
        $this->middleware('auth', [
            'only' => [
                'novo',
                'add',
                'del'
            ]
        ]);
    }

    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with("produtos", $produtos);
    }

    public function listaJson(){
        $produtos = Produto::all();
        return $produtos;
    }

    public function mostra($id){
        $resposta = Produto::find($id);
        if (empty($resposta))
            return "Este produto não existe";
        return view('produto.detalhes')->with("p", $resposta);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function add(ProdutosRequest $req){
        $form = $req->only('nome', 'descricao', 'valor', 'quantidade');
        Produto::create($form);
        return redirect('/produtos');
    }

    public function del($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/produtos');
    }

}