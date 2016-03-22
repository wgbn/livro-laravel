<?php
/**
 * Created by PhpStorm.
 * User: walter
 * Date: 21/03/16
 * Time: 21:00
 */

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = DB::select("select * from produtos");

        return view('listagem')->with("produtos", $produtos);

    }

    public function mostra(){
        $id = Request::input('id', 0);
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if (empty($resposta))
            return "Este produto não existe";

        return view('detalhes')->with("p", $resposta[0]);
    }

}