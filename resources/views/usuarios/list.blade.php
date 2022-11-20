@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Lista de Usuarios <br>
                            <a class="btn btn-link text-success" href="{{ route('home') }}"><b>Home</b></a><br>
                            <a class="btn btn-success" href="{{ route('cadastro') }}">Novo usuario +</a>

                        </div>

                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col"> Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col"> E-mail </th>
                                        <th scope="col"> Editar</th>
                                        <th scope="col"> Deletar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $user)
                                    <tr>
                                            <th scope="row"> {{ $user->id }} </th>
                                            <td> {{ $user->name }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td> <a class="btn btn-primary" href="{{route('edit' ,$user->id)}}">Editar</a></td>
                                            <td>
                                                <form action=" {{route('delete',$user->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="app">
                    <lista-users>

                    </lista-users>
                </div>
            </div>
        </div>

    </div>
@endsection
