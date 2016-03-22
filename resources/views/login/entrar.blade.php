@extends('layout.principal')

@section('conteudo')

    <form action="/login" method="post">
        {!! csrf_field() !!}
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="seu email" class="form-control">

        <label for="pass">Senha:</label>
        <input type="password" name="password" placeholder="senha" class="form-control">

        <input type="submit" value="Entrar" class="btn btn-primary">
    </form>

@stop