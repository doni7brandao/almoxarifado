@extends('adminlte::page')

@section('title', 'Visualizar Ferramentas')

@section('content_header')

    <h1>Lista de Ferramentas Cadastradas</h1>
@stop

@section('content')

    <div class="box">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
        </table>
    </div>
@stop