@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Cadastrar novo usuário</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST"  @if(isset($usuario))  action="{{ route('update' , $usuario->id) }}" @else  action="{{ route('add') }}" @endif>
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Nome</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus  @if(isset($usuario)) value="{{ $usuario->name}} "@endif>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" @if(isset($usuario)) value="{{ $usuario->email}}"@endif>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">@if(isset($usuario)) Salvar @else Cadastrar @endif</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
