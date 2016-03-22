@extends('layout.principal')
    @section('conteudo')

        @if(empty($produtos))

            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado.
            </div>

        @else

            <h1>Listagem de Produtos</h1>
            <table class="table table-striped table-bordered table-hover">

                @foreach ($produtos as $p)
                    <tr class="{{$p->quantidade <= 1 ? 'danger':''}}">
                        <td>{{$p->nome}}</td>
                        <td>{{$p->valor}}</td>
                        <td>{{$p->descricao}}</td>
                        <td>{{$p->quantidade}}</td>
                        <td>
                            <a href="/produtos/mostra/{{$p->id}}" class="btn btn-primary">ver</a>
                            <a href="{{action('ProdutoController@del', $p->id)}}" class="btn btn-danger apagar">del</a>
                        </td>
                    </tr>
                @endforeach

            </table>

            <h4>
                <span class="label label-danger pull-right">Um ou menos itens no estoque</span>
            </h4>

        @endif

        <script>
            $(document).ready(function(){
                $('.apagar').click(function(e){
                    if (!confirm('Apagar produto?'))
                        e.preventDefault();
                });
            });
        </script>

    @stop