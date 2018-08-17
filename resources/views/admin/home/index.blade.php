@extends('adminlte::page')

@section('title', 'Home - Painel')

@section('content_header')
    {{-- <h1>Bem Vindo(a) - <strong>{{ $user }}</strong></h1> --}}
    <h1>Bem Vindo(a) - </h1>
@stop

@section('content')
    <h4>O que deseja fazer?</h4>

    <ul>
        <li><a href="#">Visualizar Ferramentas Cadastradas</a></li>
        <li><a href="#">Cadastrar ferramentas</a></li>
        <li><a href="#">Visualizar histórico</a></li>
    </ul>
@stop