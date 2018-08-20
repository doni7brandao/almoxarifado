@extends('adminlte::page')

@section('title', 'Visualizar Ferramentas')

@section('content_header')

@stop

@section('content')

    <div class="box">
        <div class="box-header">
                <h3>Lista de Ferramentas Cadastradas</h3>    
        </div>
        <div class="box-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alicate</td>
                        <td>3</td>
                        <td>10/03/2017</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Furadeira</td>
                        <td>2</td>
                        <td>10/04/2016</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Talhadeira</td>
                        <td>3</td>
                        <td>14/08/2018</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Marreta</td>
                        <td>3</td>
                        <td>14/08/2018</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Serra circurar</td>
                        <td>1</td>
                        <td>15/02/2018</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Corda</td>
                        <td>1</td>
                        <td>14/08/2018</td>
                    </tr>
                </tbody>
            </table>
        </div>    
    </div>
@stop