@extends('layout.principal')

@section('conteudo')

    <h1>Novo produto</h1>

    @if(count($errors))
        @foreach($errors->all() as $error)
            <div class="alert-danger alert">{{$error}}</div>
        @endforeach
    @endif

    <form action="/produtos/add" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{old('nome')}}">
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="{{old('descricao')}}">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="{{old('valor')}}">
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" type="number" class="form-control" value="{{old('quantidade')}}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

@stop