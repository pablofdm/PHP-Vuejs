@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-0">
                <painel titulo="Dashboard">
                    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas> 
                        <div class="row">
                            <div class="col-md-4">
                                <caixa qtd="80" titulo="Artigos" url="{{ route('artigos.index') }}" cor="orange" icone="ion ion-pie-graph"></caixa>
                            </div>
                            <div class="col-md-4">
                                <caixa qtd="1500" titulo="Usuários" url="{{ route('usuarios.index') }}" cor="navyblue" icone="ion-person-stalker"></caixa>
                            </div>
                            <div class="col-md-4">
                                <caixa qtd="3" titulo="Autores" cor="green" icone="ion-android-person"></caixa>
                            </div>
                        </div>
                </painel>
            </div>
        </div>
    </div>
</pagina>
@endsection
